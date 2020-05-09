<?php

namespace Collex\Domain\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public const ATTRIBUTES = [
        'username',
        'first_name',
        'last_name',
        'email',
        'dob',
        'password'
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
            'username' => [
                'required',
                'string',
                'min:8',
                'max:50',
                'unique:users,username',
            ],
            'first_name' => [
                'required',
                'string',
                'max:255'
            ],
            'last_name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
            ],
            'dob' => [
                'required',
                'date'
            ],
            'password' => [
                'required',
                'string',
                'min:10',
                'max:255',
                'different:email',
                'confirmed'
            ]
        ];
    }
}