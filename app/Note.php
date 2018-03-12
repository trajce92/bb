<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';

    protected $fillable = [
        'user_id', 'note'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
