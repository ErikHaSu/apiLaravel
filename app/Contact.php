<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable =[
        'title',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'date'
    ];
    public function source(){
        return $this->belongsTo('App\ContactSource');
    }
    public function status(){
        return $this->belongsTo('App\contactStatus');
    }
    public function account(){
        return $this->belongsTo('App\Account');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function activities(){
        return $this->hasMany('App\Contact');
    }
}
