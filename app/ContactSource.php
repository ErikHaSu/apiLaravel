<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSource extends Model
{
    public function contacts(){
        return $this->hasMany('App\Contact');
    }
}
