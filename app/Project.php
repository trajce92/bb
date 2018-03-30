<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [ 'title', 'owner_id', 'icon' ];

    public function owner()
    {
    	return $this->belongsTo('App\User');
    }

}


