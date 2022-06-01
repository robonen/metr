<?php

namespace App\Enums;

enum RoomTypesEnum: string
{
    use Arrayable;

    case STUDIO = 'Studio';
    case ROOM1 = 'Room1';
    case Room2 = 'Room2';
    case Room3More = 'Room3More';
}
