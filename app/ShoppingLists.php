<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoppinglists extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id',
    ];
}
