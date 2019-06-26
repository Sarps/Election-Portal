<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    //
    protected $fillable = [
        'name', 'gender', 'photo'
    ];

    public function post()
    {
    	return $this->belongsTo("App\Post");
    }

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }
}
