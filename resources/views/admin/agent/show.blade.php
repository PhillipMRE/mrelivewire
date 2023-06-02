@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.agent.title_singular') }}:
                    {{ trans('cruds.agent.fields.id') }}
                    {{ $agent->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.id') }}
                            </th>
                            <td>
                                {{ $agent->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.published') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $agent->published ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.user') }}
                            </th>
                            <td>
                                @if($agent->user)
                                    <span class="badge badge-relationship">{{ $agent->user->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.display_name') }}
                            </th>
                            <td>
                                {{ $agent->display_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.first_name') }}
                            </th>
                            <td>
                                {{ $agent->first_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.last_name') }}
                            </th>
                            <td>
                                {{ $agent->last_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.notify_phone') }}
                            </th>
                            <td>
                                {{ $agent->notify_phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.contact_phone') }}
                            </th>
                            <td>
                                {{ $agent->contact_phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.timezone') }}
                            </th>
                            <td>
                                {{ $agent->timezone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.call_line') }}
                            </th>
                            <td>
                                {{ $agent->call_line }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.biography') }}
                            </th>
                            <td>
                                {{ $agent->biography }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.license') }}
                            </th>
                            <td>
                                {{ $agent->license }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.website') }}
                            </th>
                            <td>
                                {{ $agent->website }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.facebook') }}
                            </th>
                            <td>
                                {{ $agent->facebook }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.youtube') }}
                            </th>
                            <td>
                                {{ $agent->youtube }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.linkedin') }}
                            </th>
                            <td>
                                {{ $agent->linkedin }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.twitter') }}
                            </th>
                            <td>
                                {{ $agent->twitter }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.instagram') }}
                            </th>
                            <td>
                                {{ $agent->instagram }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.settings') }}
                            </th>
                            <td>
                                {{ $agent->settings }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.office') }}
                            </th>
                            <td>
                                {{ $agent->office }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.template') }}
                            </th>
                            <td>
                                {{ $agent->template }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.is_vetted') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $agent->is_vetted ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.vetting_data') }}
                            </th>
                            <td>
                                {{ $agent->vetting_data }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.user_confirmed_info') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $agent->user_confirmed_info ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.agent.fields.demo') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $agent->demo ? 'checked' : '' }}>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('agent_edit')
                    <a href="{{ route('admin.agents.edit', $agent) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.agents.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection