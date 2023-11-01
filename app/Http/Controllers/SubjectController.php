<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //retrive from database
    public function Subject(){
        $subjects=Subject::all();
        return view('admin.pages.subject.subject_li' ,compact('subjects'));//subject =table name
    }

    public function Create_form()
    {
        return view('admin.pages.subject.sub_form');
    }
    public function Store(Request $request){

             //    dd($request->all());
           //model mame
           // storing to the database
           Subject::create([
            'name'=>$request->subject_name,  //database column name,request , name property of form
            'class'=>$request->class,
            'study_hours'=>$request->study_hours
           ]);
           return redirect()->route('subject.list');   
                        

        
    }
}
