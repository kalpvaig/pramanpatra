<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function find(Request $request){
        $certification_number = $request->certification_number;
        
        $certificate  = \App\Certificate::where('certification_number',"$certification_number")->first();

        if($certificate!=null){
            $certificate = \DB::table('certificates')
            ->join('students','students.id','=','student_id')
            ->join('courses','courses.id','=','course_id')
            ->select('courses.name as course_name','students.email as email','certificates.id','students.name as student_name','students.photo_url as photo_url','certificates.certification_number','certificates.rating','certificates.valid_from' )
            ->where('certificates.certification_number','=',$certification_number)
            ->first();
            return view('search',compact('certificate'));
        }
        return view('searchfail');
    }
}
