<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $fillable = [
        'make', 
        'model',
        'year',
        'plate_number',
        'user_id',
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function datalogs(){
        return $this->hasMany('App\Datalog');
    }

    public function reports(){
        return $this->hasMany('App\Report');
    }
}
