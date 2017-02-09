<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    public function user(){
        $this->belongsTo('App\User', 'user_id');
    }

    public function item(){
        $this->belongsTo('App\Item', 'item_id');
    }
}
