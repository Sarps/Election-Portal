<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Voter extends Authenticatable
{
    //
    use Notifiable;

    protected $guard = 'voter';

    protected $fillable = [
        'nsbe_id'
    ];

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }
}
