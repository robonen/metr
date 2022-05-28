<?php

namespace App\Http\Requests;

class UpdateUserRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['string'],
            'last_name' => ['string'],
            'middle_name' => ['string'],
            'email' => ['string', 'email', 'unique:users'],
            'phone' => ['string'],
        ];
    }
}
