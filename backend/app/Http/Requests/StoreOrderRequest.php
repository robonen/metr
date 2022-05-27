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
            'start_date' => ['required', 'date', 'after_or_equal:today'],
            'end_date' => ['required', 'date', 'after_or_equal:tomorrow'],
            'price' => ['required', 'numeric', 'min:0.1'],
            'discount' => ['required', 'numeric', 'min:0'],
        ];
    }
}
