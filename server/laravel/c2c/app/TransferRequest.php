<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferRequest extends Model
{
    //
    public function purchase(){
        $this->belongsTo('App\Purchase', 'purchase_id');
    }
}
