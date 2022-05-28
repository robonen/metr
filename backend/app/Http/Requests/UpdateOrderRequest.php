<?php

namespace App\Http\Requests;

class UpdateOrderRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'offer_id' => ['numeric', 'exists:offers,id'],
            'user_id' => ['numeric', 'exists:users,id'],
            'price' => ['numeric', 'min:0.1'],
            'discount' => ['numeric', 'min:0.1'],
        ];
    }
}
