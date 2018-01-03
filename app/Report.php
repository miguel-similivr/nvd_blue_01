<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $fillable = [
        'time', 
        'cost',
        'description',
        'user_id',
        'car_id',
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function car(){
        return $this->belongsTo('App\Car');
    }

    public function datalogs(){
        return $this->hasmany('App\Datalog');
    }
}
