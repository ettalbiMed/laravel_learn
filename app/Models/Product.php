<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reference', 'designation','user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }


}
