<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    //

    protected $fillable = [
        'date'
    ];

    public function result(){
        return $this->hasMany('App\Result');
    }
}
