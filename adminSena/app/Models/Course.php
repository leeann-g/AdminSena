<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function apprentices(){
        return $this->hasMany('App\Models\Apprentice');
    }

    public function teachers(){
        return $this->belongsToMany('App\Models\Teacher');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function trainingcenter(){
        return $this->belongsTo('App\Models\TrainingCenter');
    }
}
