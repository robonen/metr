<?php

namespace App\Enums;

enum OrderTypesEnum: string
{
    use Arrayable;

    case HOUSE = 'House';
    case FLAT = 'Flat';
    case GUEST_HOUSE = 'Guest';
    case HOTEL = 'Hotel';
}
