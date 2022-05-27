<?php

namespace App\Models;

use App\Enums\OrderTypesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'owner_id',
        'name',
        'type',
        'price',
        'rooms',
        'yandex_mark',
        'location',
        'description',
        'is_group',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'type' => OrderTypesEnum::class,
        'price' => 'double',
        'is_group' => 'boolean',
    ];
}
