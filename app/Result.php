<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //

    protected $fillable = [
        'date',
        'value',
        'commit_id'
    ];

    public function commit(){
        return $this->belongsTo('App\Commit');
    }
}
