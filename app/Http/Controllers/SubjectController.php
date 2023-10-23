<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function Subject(){
        return view('admin.pages.subject.subject_li');
    }

    public function Create_form()
    {
        return view('admin.pages.subject.sub_form');
    }
    public function Store(Request $request){

             //    dd($request->all());
           //model mame
           Subject::create([
            'name'=>$request->subject_name,
             'class'=>$request->class
           ]); 
           return redirect()->back();   
                        

        
    }
}
