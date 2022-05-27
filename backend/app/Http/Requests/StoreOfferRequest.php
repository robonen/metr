<?php

namespace App\Http\Requests;

use App\Enums\OrderTypesEnum;
use Illuminate\Validation\Rules\Enum;

class StoreOfferRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'owner_id' => ['required', 'numeric', 'exists:users,id'],
            'name' => ['required', 'string'],
            'type' => ['required', new Enum(OrderTypesEnum::class)],
            'price' => ['required', 'numeric'],
            'rooms' => ['required', 'numeric'],
            'yandex_mark' => ['string'],
            'location' => ['required', 'string'],
            'description' => ['required', 'string'],
            'is_group' => ['required', 'boolean'],
        ];
    }
}
