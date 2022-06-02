<?php

namespace App\Filters;

use App\Enums\OrderTypesEnum;
use App\Enums\RoomTypesEnum;
use Illuminate\Database\Eloquent\Builder;

class OfferFilter extends QueryFilter
{
    /**
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function type(string $type): Builder
    {
        if (OrderTypesEnum::tryFrom($type) !== null)
            return $this->builder->where('type', $type);

        return $this->builder;
    }

    /**
     * @param int $rooms
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function rooms(string $type): Builder
    {
        if (RoomTypesEnum::tryFrom($type) !== null)
            return $this->builder->where('rooms', $type);

        return $this->builder;
    }

    /**
     * @param int $price
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function startPrice(int $price): Builder
    {
        if ($price >= 0)
            return $this->builder->where('price', '>=', $price);

        return $this->builder;
    }

    /**
     * @param int $price
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function endPrice(int $price): Builder
    {
        if ($price >= 0)
            return $this->builder->where('price', '<=', $price);

        return $this->builder;
    }

    /**
     * @param int $space
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function startSpace(int $space): Builder
    {
        if ($space >= 0)
            return $this->builder->where('space', '>=', $space);

        return $this->builder;
    }

    /**
     * @param int $space
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function endSpace(int $space): Builder
    {
        if ($space >= 0)
            return $this->builder->where('space', '<=', $space);

        return $this->builder;
    }

    /**
     * @param string $word
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function search(string $word): Builder
    {
        if (!empty(trim($word)))
            return $this->builder->where('name', 'LIKE', "%{$word}%");

        return $this->builder;
    }
}
