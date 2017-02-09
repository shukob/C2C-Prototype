<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment', 'item_id');
    }

    public function purchases(){
        return $this->hasMany('App\Purchase', 'item_id');
    }

    public function purchasers(){
        return $this->hasManyThrough('App\User', 'App\Purchase', 'item_id', 'user_id', 'id');
    }
}
