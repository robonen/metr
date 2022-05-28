<?php

namespace App\Filters;

use App\Enums\OrderTypesEnum;
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
    protected function rooms(int $rooms): Builder
    {
        if ($rooms >= 1)
            return $this->builder->where('rooms', '>=', $rooms);

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
}
