<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $courses = \App\Course::join('instructors','instructors.id','=','instructor_id')->select('instructors.name as instructor_name','courses.name','courses.description','courses.id','courses.duration_type','courses.duration_days','courses.duration_hours' )->get();
        return view('course.index',compact('courses'));
    }

    public function create(){
        $instructors = \App\Instructor::all();

        return view('course.create',compact('instructors'));
    }

    public function postCreate(Request $request){
      

        \App\Course::create($request->all());

        return redirect('/admin/course')->with('status', 'Created Successfully');
    }

    public function edit($id){

        $instructors = \App\Instructor::all();
        $course = \App\Course::find($id);
        return view('course.edit',compact('course','instructors'));
    }

    public function show($id){
        $course = \App\Course::find($id);
        return view('course.show',compact('course'));
    }


    public function postEdit(Request $request){
        \App\Course::find($request->id)->update($request->all());

        return redirect('/admin/course')->with('status', 'Updated Successfully');
    }

    public function delete($id){
        \App\Course::destroy($id);

        return redirect('/admin/course')->with('status', 'Deleted Successfully');
    }
}
