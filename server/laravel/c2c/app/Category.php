<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Category extends Model
{

    use ValidatingTrait;

    protected $rules = [
        'name' => 'required'
    ];

    public function parent(){
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children(){
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function items(){
        return $this->hasMany('App\Item');
    }
}
