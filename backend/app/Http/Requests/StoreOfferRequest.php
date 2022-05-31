<?php

namespace App\Http\Requests;

use App\Enums\OrderTypesEnum;
use App\Enums\RoomTypesEnum;
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
            'name' => ['required', 'string'],
            'type' => ['required', new Enum(OrderTypesEnum::class)],
            'price' => ['required', 'numeric', 'min:0.1'],
            'rooms' => ['required', new Enum(RoomTypesEnum::class)],
            'space' => ['required', 'numeric', 'min:1'],
            'yandex_mark' => ['string'],
            'location' => ['required', 'string'],
            'description' => ['required', 'string'],
            'is_group' => ['required', 'boolean'],
            'images' => ['required', 'array'],
        ];
    }
}
