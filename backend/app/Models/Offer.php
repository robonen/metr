<?php

namespace App\Models;

use App\Enums\OrderTypesEnum;
use App\Enums\RoomTypesEnum;
use App\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offer extends Model
{
    use HasFactory, Filterable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'type',
        'price',
        'rooms',
        'space',
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
        'rooms' => RoomTypesEnum::class,
        'space' => 'double',
        'price' => 'double',
        'is_group' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(OfferPhoto::class);
    }
}
