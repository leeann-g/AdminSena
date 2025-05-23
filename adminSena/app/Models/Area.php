<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //

    public function courses(){
        return $this->hasMany('App\Models\Course');
    }

    public function teachers(){
        return $this->hasMany('App\Models\Teacher');
    }
}
