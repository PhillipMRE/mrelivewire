<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadTrait;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\Admin\PostResource;
use App\Models\Post;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostApiController extends Controller
{
    use MediaUploadTrait;

    public function index()
    {
        abort_if(Gate::denies('post_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PostResource(Post::with(['author'])->get());
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->validated());

        if ($request->input('post_featured_image', false)) {
            $post->addMedia(storage_path('tmp/uploads/' . basename($request->input('post_featured_image'))))->toMediaCollection('post_featured_image');
        }

        return (new PostResource($post))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Post $post)
    {
        abort_if(Gate::denies('post_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PostResource($post->load(['author']));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        if ($request->input('post_featured_image', false)) {
            if (! $post->post_featured_image || $request->input('post_featured_image') !== $post->post_featured_image->file_name) {
                if ($post->post_featured_image) {
                    $post->post_featured_image->delete();
                }
                $post->addMedia(storage_path('tmp/uploads/' . basename($request->input('post_featured_image'))))->toMediaCollection('post_featured_image');
            }
        } elseif ($post->post_featured_image) {
            $post->post_featured_image->delete();
        }

        return (new PostResource($post))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Post $post)
    {
        abort_if(Gate::denies('post_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $post->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
