<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function items()
    {
        $this->hasMany('App\Item', 'owner_id');
    }

    public function likes()
    {
        $this->hasMany('App\Like', 'user_id');
    }


    public function purchases(){
        $this->hasMany('App\Purchase', 'purchase_id');
    }
}