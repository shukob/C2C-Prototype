<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Item extends Model
{

    use ValidatingTrait;

    protected $rules = [
        'category_id' => 'required',
        'owner_id' => 'required'
    ];
    //
    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function purchases(){
        return $this->hasMany('App\Purchase');
    }

    public function purchasers(){
        return $this->hasManyThrough('App\User', 'App\Purchase', 'item_id', 'user_id', 'id');
    }

}
