<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Like extends Model
{
    use ValidatingTrait;
    protected $rules = [
        'user_id' => 'required',
        'item_id' => 'required'
    ];
    //
    public function user(){
        $this->belongsTo('App\User');
    }

    public function item(){
        $this->belongsTo('App\Item');
    }
}
