<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Device extends Model
{

    use ValidatingTrait;

    protected $rules = [
        'user_id' => 'required',
        'os' => 'required',
        'token' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function notifications()
    {
        return $this->belongsToMany('App\Notifications');
    }

}
