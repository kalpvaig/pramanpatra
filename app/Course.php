<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name','description','duration_hours','duration_days','duration_type','instructor_id','created_at','updated_at'];

    public function instructors()
    {
        return $this->hasOne('App\Instructor')->withPivot('name');
    }
}
