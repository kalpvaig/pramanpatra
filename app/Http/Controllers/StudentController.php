<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $students = \App\Student::all();
        return view('student.index',compact('students'));
    }

    public function create(){
        return view('student.create');
    }

    public function postCreate(Request $request){
        $file = $request->file('photo');
        $photo_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $photo_url);
        $request->request->add(['photo_url' => $photo_url]);

        $file = $request->file('verification_doc');
        $verification_doc_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/verification_docs');
        $file->move($destinationPath, $verification_doc_url);
        $request->request->add(['verification_doc_url' => $verification_doc_url]);

        \App\Student::create($request->all());

        return redirect('/admin/student')->with('status', 'Created Successfully');
    }

    public function edit($id){
        $student = \App\Student::find($id);
        return view('student.edit',compact('student'));
    }

    public function show($id){
        $student = \App\Student::find($id);
        return view('student.show',compact('student'));
    }


    public function postEdit(Request $request){

        $file = $request->file('photo');
        $photo_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $photo_url);
        $request->request->add(['photo_url' => $photo_url]);

        $file = $request->file('verification_doc');
        $verification_doc_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/verification_docs');
        $file->move($destinationPath, $verification_doc_url);
        $request->request->add(['verification_doc_url' => $verification_doc_url]);

        \App\Student::find($request->id)->update($request->all());

        return redirect('/admin/student')->with('status', 'Updated Successfully');
    }

    public function delete($id){
        \App\Student::destroy($id);

        return redirect('/admin/student')->with('status', 'Deleted Successfully');
    }
}
