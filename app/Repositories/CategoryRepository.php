<?php

namespace App\Repositories;

use App\Category;

class CategoryRepository extends BaseRepository
{
    /**
     * Specify model.
     *
     * @return string
     */
    public function model(): string
    {
        return Category::class;
    }

    public function getCategories() : object
    { 
        return $this->getModel()::all();

    }
}