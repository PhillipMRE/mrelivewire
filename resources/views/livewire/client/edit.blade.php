<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('client.published') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="published" id="published" wire:model.defer="client.published">
        <label class="form-label inline ml-1" for="published">{{ trans('cruds.client.fields.published') }}</label>
        <div class="validation-message">
            {{ $errors->first('client.published') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.published_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('client.user_id') ? 'invalid' : '' }}">
        <label class="form-label" for="user">{{ trans('cruds.client.fields.user') }}</label>
        <x-select-list class="form-control" id="user" name="user" :options="$this->listsForFields['user']" wire:model="client.user_id" />
        <div class="validation-message">
            {{ $errors->first('client.user_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.user_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agents') ? 'invalid' : '' }}">
        <label class="form-label" for="agents">{{ trans('cruds.client.fields.agents') }}</label>
        <x-select-list class="form-control" id="agents" name="agents" wire:model="agents" :options="$this->listsForFields['agents']" multiple />
        <div class="validation-message">
            {{ $errors->first('agents') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.client.fields.agents_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>