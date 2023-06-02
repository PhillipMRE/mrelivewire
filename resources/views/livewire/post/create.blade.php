<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('mediaCollections.post_featured_image') ? 'invalid' : '' }}">
        <label class="form-label" for="featured_image">{{ trans('cruds.post.fields.featured_image') }}</label>
        <x-dropzone id="featured_image" name="featured_image" action="{{ route('admin.posts.storeMedia') }}" collection-name="post_featured_image" max-file-size="2" max-width="1800" max-height="800" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.post_featured_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.featured_image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.post.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" wire:model.defer="post.title">
        <div class="validation-message">
            {{ $errors->first('post.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.author_id') ? 'invalid' : '' }}">
        <label class="form-label" for="author">{{ trans('cruds.post.fields.author') }}</label>
        <x-select-list class="form-control" id="author" name="author" :options="$this->listsForFields['author']" wire:model="post.author_id" />
        <div class="validation-message">
            {{ $errors->first('post.author_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.author_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.published') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="published" id="published" wire:model.defer="post.published">
        <label class="form-label inline ml-1" for="published">{{ trans('cruds.post.fields.published') }}</label>
        <div class="validation-message">
            {{ $errors->first('post.published') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.published_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.sticky') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="sticky" id="sticky" wire:model.defer="post.sticky">
        <label class="form-label inline ml-1" for="sticky">{{ trans('cruds.post.fields.sticky') }}</label>
        <div class="validation-message">
            {{ $errors->first('post.sticky') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.sticky_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.content') ? 'invalid' : '' }}">
        <label class="form-label" for="content">{{ trans('cruds.post.fields.content') }}</label>
        <textarea class="form-control" name="content" id="content" wire:model.defer="post.content" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('post.content') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.content_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.for') ? 'invalid' : '' }}">
        <label class="form-label" for="for">{{ trans('cruds.post.fields.for') }}</label>
        <input class="form-control" type="text" name="for" id="for" wire:model.defer="post.for">
        <div class="validation-message">
            {{ $errors->first('post.for') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.for_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.slug') ? 'invalid' : '' }}">
        <label class="form-label" for="slug">{{ trans('cruds.post.fields.slug') }}</label>
        <input class="form-control" type="text" name="slug" id="slug" wire:model.defer="post.slug">
        <div class="validation-message">
            {{ $errors->first('post.slug') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.slug_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>