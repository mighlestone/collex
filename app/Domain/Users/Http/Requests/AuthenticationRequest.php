<?php

namespace Collex\Domain\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticationRequest extends FormRequest
{
    public const ATTRIBUTES = [
        'email',
        'password',
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,username',
            ],
            'password' => [
                'required',
                'string',
                'min:10',
                'max:255'
            ]
        ];
    }
}