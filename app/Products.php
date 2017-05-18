<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'brand', 'price', 'offer', 'offerPrice', 'x', 'y',
    ];
    
    public function shoppinglists() {
        return $this->belongsToMany('App\Shoppinglists');
    }
}
