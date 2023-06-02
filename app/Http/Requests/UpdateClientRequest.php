<?php

namespace App\Http\Requests;

use App\Models\Client;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateClientRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('client_edit'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'published' => [
                'boolean',
            ],
            'user_id' => [
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
}
