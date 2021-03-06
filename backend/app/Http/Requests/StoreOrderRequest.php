<?php

namespace App\Http\Requests;

class StoreOrderRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'offer_id' => ['required', 'numeric', 'exists:offers,id'],
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'price' => ['required', 'numeric', 'min:0.1'],
            'discount' => ['required', 'numeric', 'min:0'],
        ];
    }
}
