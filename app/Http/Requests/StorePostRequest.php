<?php

namespace App\Http\Requests;

use App\Models\Post;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('post_create'),
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
            'title' => [
                'string',
                'nullable',
            ],
            'author_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
            'published' => [
                'boolean',
            ],
            'sticky' => [
                'boolean',
            ],
            'content' => [
                'string',
                'nullable',
            ],
            'for' => [
                'string',
                'nullable',
            ],
            'slug' => [
                'string',
                'nullable',
            ],
        ];
    }
}
