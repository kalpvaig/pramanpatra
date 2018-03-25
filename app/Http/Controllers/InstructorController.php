<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $instructors = \App\Instructor::all();
        return view('instructor.index',compact('instructors'));
    }

    public function create(){
        return view('instructor.create');
    }

    public function postCreate(Request $request){
       
        $file = $request->file('photo');
        $photo_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $photo_url);
        $request->request->add(['photo_url' => $photo_url]);

        $file = $request->file('resume');
        $resume_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/resume');
        $file->move($destinationPath, $resume_url);
        $request->request->add(['resume_url' => $resume_url]);


        $file = $request->file('verification_doc');
        $verification_doc_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/verification_docs');
        $file->move($destinationPath, $verification_doc_url);
        $request->request->add(['verification_doc_url' => $verification_doc_url]);

        \App\Instructor::create($request->all());

        return redirect('/admin/instructor')->with('status', 'Created Successfully');
    }

    public function edit($id){
        $instructor = \App\Instructor::find($id);
        return view('instructor.edit',compact('instructor'));
    }

    public function show($id){
        $instructor = \App\Instructor::find($id);
        return view('instructor.show',compact('instructor'));
    }

    public function postEdit(Request $request){

        $file = $request->file('photo');
        $photo_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $photo_url);
        $request->request->add(['photo_url' => $photo_url]);

        $file = $request->file('resume');
        $resume_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/resume');
        $file->move($destinationPath, $resume_url);
        $request->request->add(['resume_url' => $resume_url]);


        $file = $request->file('verification_doc');
        $verification_doc_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/verification_docs');
        $file->move($destinationPath, $verification_doc_url);
        $request->request->add(['verification_doc_url' => $verification_doc_url]);

        \App\Instructor::find($request->id)->update($request->all());

        return redirect('/admin/instructor')->with('status', 'Updated Successfully');
    }

    public function delete($id){
        \App\Instructor::destroy($id);

        return redirect('/admin/instructor')->with('status', 'Deleted Successfully');
    }
}
