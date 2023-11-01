<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use App\Models\Subject;
use App\Models\Tuition;
use Illuminate\Http\Request;

class TuitionController extends Controller
{
    public function Tuition_list(){
        $tuitions=Tuition::all();
        return view('admin.pages.tuition.tuition_list',compact('tuitions'));
    }
    public function Tuition_form(){
        $subjects=Subject::all();//database table_name,Model_name  
        $institutes=Institute::all();  //dropdown from subjects table & tuition table
        return view('admin.pages.tuition.tuition_form',compact('subjects','institutes'));
    }
    public function Tuition_store(Request $request){//to stote the form
        // dd($request->all()); before  storing it create model and migration
        Tuition::create([
            'subject_name'=>$request->subject_id,  //database column name,request , name property of form
            'tuition_type'=>$request->type,
            'institute_name'=>$request->institute_id,
            'salary'=>$request->preferable_salary
           ]);
           return redirect()->route('tuition.list');
    }
}
