<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('agent.published') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="published" id="published" wire:model.defer="agent.published">
        <label class="form-label inline ml-1" for="published">{{ trans('cruds.agent.fields.published') }}</label>
        <div class="validation-message">
            {{ $errors->first('agent.published') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.published_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.user_id') ? 'invalid' : '' }}">
        <label class="form-label" for="user">{{ trans('cruds.agent.fields.user') }}</label>
        <x-select-list class="form-control" id="user" name="user" :options="$this->listsForFields['user']" wire:model="agent.user_id" />
        <div class="validation-message">
            {{ $errors->first('agent.user_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.user_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.display_name') ? 'invalid' : '' }}">
        <label class="form-label" for="display_name">{{ trans('cruds.agent.fields.display_name') }}</label>
        <input class="form-control" type="text" name="display_name" id="display_name" wire:model.defer="agent.display_name">
        <div class="validation-message">
            {{ $errors->first('agent.display_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.display_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.first_name') ? 'invalid' : '' }}">
        <label class="form-label" for="first_name">{{ trans('cruds.agent.fields.first_name') }}</label>
        <input class="form-control" type="text" name="first_name" id="first_name" wire:model.defer="agent.first_name">
        <div class="validation-message">
            {{ $errors->first('agent.first_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.first_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.last_name') ? 'invalid' : '' }}">
        <label class="form-label" for="last_name">{{ trans('cruds.agent.fields.last_name') }}</label>
        <input class="form-control" type="text" name="last_name" id="last_name" wire:model.defer="agent.last_name">
        <div class="validation-message">
            {{ $errors->first('agent.last_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.last_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.notify_phone') ? 'invalid' : '' }}">
        <label class="form-label" for="notify_phone">{{ trans('cruds.agent.fields.notify_phone') }}</label>
        <input class="form-control" type="text" name="notify_phone" id="notify_phone" wire:model.defer="agent.notify_phone">
        <div class="validation-message">
            {{ $errors->first('agent.notify_phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.notify_phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.contact_phone') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_phone">{{ trans('cruds.agent.fields.contact_phone') }}</label>
        <input class="form-control" type="text" name="contact_phone" id="contact_phone" wire:model.defer="agent.contact_phone">
        <div class="validation-message">
            {{ $errors->first('agent.contact_phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.contact_phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.timezone') ? 'invalid' : '' }}">
        <label class="form-label" for="timezone">{{ trans('cruds.agent.fields.timezone') }}</label>
        <input class="form-control" type="text" name="timezone" id="timezone" wire:model.defer="agent.timezone">
        <div class="validation-message">
            {{ $errors->first('agent.timezone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.timezone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.call_line') ? 'invalid' : '' }}">
        <label class="form-label" for="call_line">{{ trans('cruds.agent.fields.call_line') }}</label>
        <input class="form-control" type="text" name="call_line" id="call_line" wire:model.defer="agent.call_line">
        <div class="validation-message">
            {{ $errors->first('agent.call_line') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.call_line_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.biography') ? 'invalid' : '' }}">
        <label class="form-label" for="biography">{{ trans('cruds.agent.fields.biography') }}</label>
        <textarea class="form-control" name="biography" id="biography" wire:model.defer="agent.biography" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('agent.biography') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.biography_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.license') ? 'invalid' : '' }}">
        <label class="form-label" for="license">{{ trans('cruds.agent.fields.license') }}</label>
        <input class="form-control" type="text" name="license" id="license" wire:model.defer="agent.license">
        <div class="validation-message">
            {{ $errors->first('agent.license') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.license_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.website') ? 'invalid' : '' }}">
        <label class="form-label" for="website">{{ trans('cruds.agent.fields.website') }}</label>
        <input class="form-control" type="text" name="website" id="website" wire:model.defer="agent.website">
        <div class="validation-message">
            {{ $errors->first('agent.website') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.website_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.facebook') ? 'invalid' : '' }}">
        <label class="form-label" for="facebook">{{ trans('cruds.agent.fields.facebook') }}</label>
        <input class="form-control" type="text" name="facebook" id="facebook" wire:model.defer="agent.facebook">
        <div class="validation-message">
            {{ $errors->first('agent.facebook') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.facebook_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.youtube') ? 'invalid' : '' }}">
        <label class="form-label" for="youtube">{{ trans('cruds.agent.fields.youtube') }}</label>
        <input class="form-control" type="text" name="youtube" id="youtube" wire:model.defer="agent.youtube">
        <div class="validation-message">
            {{ $errors->first('agent.youtube') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.youtube_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.linkedin') ? 'invalid' : '' }}">
        <label class="form-label" for="linkedin">{{ trans('cruds.agent.fields.linkedin') }}</label>
        <input class="form-control" type="text" name="linkedin" id="linkedin" wire:model.defer="agent.linkedin">
        <div class="validation-message">
            {{ $errors->first('agent.linkedin') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.linkedin_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.twitter') ? 'invalid' : '' }}">
        <label class="form-label" for="twitter">{{ trans('cruds.agent.fields.twitter') }}</label>
        <input class="form-control" type="text" name="twitter" id="twitter" wire:model.defer="agent.twitter">
        <div class="validation-message">
            {{ $errors->first('agent.twitter') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.twitter_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.instagram') ? 'invalid' : '' }}">
        <label class="form-label" for="instagram">{{ trans('cruds.agent.fields.instagram') }}</label>
        <input class="form-control" type="text" name="instagram" id="instagram" wire:model.defer="agent.instagram">
        <div class="validation-message">
            {{ $errors->first('agent.instagram') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.instagram_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.settings') ? 'invalid' : '' }}">
        <label class="form-label" for="settings">{{ trans('cruds.agent.fields.settings') }}</label>
        <input class="form-control" type="text" name="settings" id="settings" wire:model.defer="agent.settings">
        <div class="validation-message">
            {{ $errors->first('agent.settings') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.settings_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.office') ? 'invalid' : '' }}">
        <label class="form-label" for="office">{{ trans('cruds.agent.fields.office') }}</label>
        <input class="form-control" type="text" name="office" id="office" wire:model.defer="agent.office">
        <div class="validation-message">
            {{ $errors->first('agent.office') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.office_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.template') ? 'invalid' : '' }}">
        <label class="form-label" for="template">{{ trans('cruds.agent.fields.template') }}</label>
        <textarea class="form-control" name="template" id="template" wire:model.defer="agent.template" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('agent.template') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.template_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.is_vetted') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="is_vetted" id="is_vetted" wire:model.defer="agent.is_vetted">
        <label class="form-label inline ml-1" for="is_vetted">{{ trans('cruds.agent.fields.is_vetted') }}</label>
        <div class="validation-message">
            {{ $errors->first('agent.is_vetted') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.is_vetted_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.vetting_data') ? 'invalid' : '' }}">
        <label class="form-label" for="vetting_data">{{ trans('cruds.agent.fields.vetting_data') }}</label>
        <x-date-picker class="form-control" wire:model="agent.vetting_data" id="vetting_data" name="vetting_data" picker="date" />
        <div class="validation-message">
            {{ $errors->first('agent.vetting_data') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.vetting_data_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.user_confirmed_info') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="user_confirmed_info" id="user_confirmed_info" wire:model.defer="agent.user_confirmed_info">
        <label class="form-label inline ml-1" for="user_confirmed_info">{{ trans('cruds.agent.fields.user_confirmed_info') }}</label>
        <div class="validation-message">
            {{ $errors->first('agent.user_confirmed_info') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.user_confirmed_info_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('agent.demo') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="demo" id="demo" wire:model.defer="agent.demo">
        <label class="form-label inline ml-1" for="demo">{{ trans('cruds.agent.fields.demo') }}</label>
        <div class="validation-message">
            {{ $errors->first('agent.demo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.agent.fields.demo_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.agents.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>