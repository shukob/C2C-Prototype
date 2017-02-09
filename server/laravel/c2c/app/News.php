<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    public function notification(){
        return $this->morphMany('App\Notification', 'source');
    }
}
