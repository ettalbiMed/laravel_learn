<?php

namespace App\Repositories;

use App\Product;

class ProductRepository extends BaseRepository
{
    /**
     * Specify model.
     *
     * @return string
     */
    public function model(): string
    {
        return Product::class;
    }
}