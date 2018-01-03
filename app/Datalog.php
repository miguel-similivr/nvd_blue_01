<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datalog extends Model
{
    //
    protected $fillable = [
        'enginecode', 
        'data',
        'car_id',
    ];


    public function car(){
        return $this->belongsTo('App\Car');
    }

    public function reports(){
        return $this->belongsToMany('App\Report');
    }
}
