<?php

namespace App\Http\Controllers;
use App\Models\Classt;
use Illuminate\Http\Request;

class TclassController extends Controller
{
    public function Class_list(){
        //retrive from database
        $classts=Classt::all();// table name -- model name
        return view('admin.pages.classt.class_list',compact('classts'));
    }

    public function Create_form(){
        return view('admin.pages.classt.class_form');
    }

    public function store_form(Request $request){
        //dd($request->all());
        //model mame
        // storing to the database
        Classt::create([
            'name'=>$request->class_name,  //database column name,request , name property of form
            
            'description'=>$request->class_description
        ]);
        
        notify()->success('Submit Successfully ⚡️');
        return redirect()->route('class.list');   


    }
}
