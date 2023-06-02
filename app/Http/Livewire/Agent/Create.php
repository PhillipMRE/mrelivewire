<?php

namespace App\Http\Livewire\Agent;

use App\Models\Agent;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public Agent $agent;

    public array $listsForFields = [];

    public function mount(Agent $agent)
    {
        $this->agent                      = $agent;
        $this->agent->published           = false;
        $this->agent->is_vetted           = false;
        $this->agent->user_confirmed_info = false;
        $this->agent->demo                = false;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.agent.create');
    }

    public function submit()
    {
        $this->validate();

        $this->agent->save();

        return redirect()->route('admin.agents.index');
    }

    protected function rules(): array
    {
        return [
            'agent.published' => [
                'boolean',
            ],
            'agent.user_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
            'agent.display_name' => [
                'string',
                'nullable',
            ],
            'agent.first_name' => [
                'string',
                'nullable',
            ],
            'agent.last_name' => [
                'string',
                'nullable',
            ],
            'agent.notify_phone' => [
                'string',
                'nullable',
            ],
            'agent.contact_phone' => [
                'string',
                'nullable',
            ],
            'agent.timezone' => [
                'string',
                'nullable',
            ],
            'agent.call_line' => [
                'string',
                'nullable',
            ],
            'agent.biography' => [
                'string',
                'nullable',
            ],
            'agent.license' => [
                'string',
                'nullable',
            ],
            'agent.website' => [
                'string',
                'nullable',
            ],
            'agent.facebook' => [
                'string',
                'nullable',
            ],
            'agent.youtube' => [
                'string',
                'nullable',
            ],
            'agent.linkedin' => [
                'string',
                'nullable',
            ],
            'agent.twitter' => [
                'string',
                'nullable',
            ],
            'agent.instagram' => [
                'string',
                'nullable',
            ],
            'agent.settings' => [
                'string',
                'nullable',
            ],
            'agent.office' => [
                'string',
                'nullable',
            ],
            'agent.template' => [
                'string',
                'nullable',
            ],
            'agent.is_vetted' => [
                'boolean',
            ],
            'agent.vetting_data' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'agent.user_confirmed_info' => [
                'boolean',
            ],
            'agent.demo' => [
                'boolean',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['user'] = User::pluck('name', 'id')->toArray();
    }
}
