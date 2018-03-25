<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    
    protected $fillable = ['certification_number','rating','comment','valid_from','student_id','course_id','created_at','updated_at'];

}
