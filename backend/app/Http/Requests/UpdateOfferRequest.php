<?php

namespace App\Http\Requests;

use App\Enums\OrderTypesEnum;
use Illuminate\Validation\Rules\Enum;

class UpdateOfferRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'owner_id' => ['numeric', 'exists:users,id'],
            'name' => ['string'],
            'type' => [new Enum(OrderTypesEnum::class)],
            'price' => ['numeric'],
            'rooms' => ['numeric'],
            'yandex_mark' => ['string'],
            'location' => ['string'],
            'description' => ['string'],
            'is_group' => ['boolean'],
        ];
    }
}
