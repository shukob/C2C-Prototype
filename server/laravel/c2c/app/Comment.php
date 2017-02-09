<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Comment extends Model
{
    //

    use ValidatingTrait;

    protected $rules = [
        'from_user_id' => 'required',
        'item_id' => 'required'
    ];
    public function fromUser()
    {
        return $this->belongsTo('App\User', 'from_user_id');
    }

    public function toUser()
    {
        return $this->belongsTo('App\User', 'to_user_id');
    }

    public function item(){
        return $this->belongsTo('App\Item');
    }
}
