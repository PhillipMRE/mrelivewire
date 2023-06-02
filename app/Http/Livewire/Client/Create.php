<?php

namespace App\Http\Livewire\Client;

use App\Models\Agent;
use App\Models\Client;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public Client $client;

    public array $agents = [];

    public array $listsForFields = [];

    public function mount(Client $client)
    {
        $this->client            = $client;
        $this->client->published = false;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.client.create');
    }

    public function submit()
    {
        $this->validate();

        $this->client->save();
        $this->client->agents()->sync($this->agents);

        return redirect()->route('admin.clients.index');
    }

    protected function rules(): array
    {
        return [
            'client.published' => [
                'boolean',
            ],
            'client.user_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
            'agents' => [
                'array',
            ],
            'agents.*.id' => [
                'integer',
                'exists:agents,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['user']   = User::pluck('name', 'id')->toArray();
        $this->listsForFields['agents'] = Agent::pluck('display_name', 'id')->toArray();
    }
}
