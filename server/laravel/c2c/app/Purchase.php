<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function item(){
        return $this->belongsTo('App\Item', 'item_id');
    }
}
