<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = ['name','description','email','phone','address','verification_doc_url','verification_no','resume_url','photo_url','age','gender','social1_name','social1_url','social2_name','social2_url','social3_name','social3_url','created_at','updated_at'];

    public function courses()
    {
        return $this->hasMany('App\Course');
    }

}
