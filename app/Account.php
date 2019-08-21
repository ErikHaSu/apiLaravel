<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function contacts(){
        return $this->hasMany('App\Contact');
    }
    public function user(){
        return $this->balongTo('App\User');
    }
}
