<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class RegistrationRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string'],
        ];
    }
}
