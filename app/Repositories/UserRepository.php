<?php

namespace App\Repositories;

use App\User;

class UserRepository extends BaseRepository
{
    /**
     * Specify model.
     *
     * @return string
     */
    public function model(): string
    {
        return User::class;
    }
}