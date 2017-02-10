<?php

namespace App;

use Davibennun\LaravelPushNotification\Facades\PushNotification;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function source()
    {
        return $this->morphTo();
    }

    public function devices()
    {
        return $this->belongsToMany('App\Device');
    }

    public function notify_once()
    {
        foreach ($this->devices() as $device) {
            switch ($device->os) {
                case 'iOS': {
                    $this->notify_ios($device) ;
                    break;
                }
                case 'Android': {
                    $this->notify_android($device) ;
                    break;
                }
            }
        }
    }

    public function notify_ios($device){
        PushNotification::app('appNameIOS')
            ->to($device->token)
            ->send($this->title);

    }

    public function notify_android($device){
        PushNotification::app('appNameAndroid')
            ->to($device->token)
            ->send($this->title);
    }

}
