<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //
    protected $fillable = [
        'voter_id', 'nominee_id', 'value'
    ];

    public function nominee()
    {
    	$this->belongsTo("App\Nominee");
    }

    public function voter()
    {
    	$this->belongsTo("App\Voter");
    }

}
