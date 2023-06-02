<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Post $post;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
                ->update(['model_id' => $this->post->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }

    public function mount(Post $post)
    {
        $this->post            = $post;
        $this->post->published = false;
        $this->post->sticky    = false;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.post.create');
    }

    public function submit()
    {
        $this->validate();

        $this->post->save();
        $this->syncMedia();

        return redirect()->route('admin.posts.index');
    }

    protected function rules(): array
    {
        return [
            'mediaCollections.post_featured_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.post_featured_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'post.title' => [
                'string',
                'nullable',
            ],
            'post.author_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
            'post.published' => [
                'boolean',
            ],
            'post.sticky' => [
                'boolean',
            ],
            'post.content' => [
                'string',
                'nullable',
            ],
            'post.for' => [
                'string',
                'nullable',
            ],
            'post.slug' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['author'] = User::pluck('name', 'id')->toArray();
    }
}
