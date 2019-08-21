<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function contacts(){
        return $this->belongsTo('App\Contact');
    }
    public function status(){
        return $this->belongs('App\ActivityStatus');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
