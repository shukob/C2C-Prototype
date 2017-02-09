<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchHistory extends Model
{
    //

    public function user(){
        $this->belongsTo('App\User', 'user_id');
    }

    public function category(){
        $this->belongsTo('App\Category', 'category_id');
    }
}
