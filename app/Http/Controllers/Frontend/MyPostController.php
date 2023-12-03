<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Classt;
use App\Models\Subject;
use App\Models\Tuition;
use App\Models\TuitionPost;
use Illuminate\Http\Request;

class MyPostController extends Controller
{
    public function myPost($id){
        
        $myPost=TuitionPost::where('user_id',auth()->user()->id)->get();
        
        return view('frontend.pages.Mypost.myPOST',compact('myPost'));

    }
    
   public function edit($id)
   {

    $subjects=Subject::all();
    $classts=Classt::all();
    $editmyPost=TuitionPost::find($id);
   //   dd($editmyPost);
     return view('frontend.pages.Mypost.EditmyPOST',compact('editmyPost','subjects','classts'));
   
   }
   public function update(Request $request,$id)
    {
      // dd($request->all());
        $updatemyPost=TuitionPost::find($id);

        if($updatemyPost)
        {

          $fileName=$updatemyPost->image;
          if($request->hasFile('image'))
          {
              $file=$request->file('image');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

              $file->storeAs('/uploads',$fileName);

          }

          $updatemyPost->update([ // database column name-- form name property
            'name'=>$request->name,
            'role'=>$request->role,
            'email'=>$request->email,
            'class_list'=>$request->class_list,
            'subject_name'=>$request->subject_name,
            'salary'=>$request->salary,
            
            'contact'=>$request->contact,
            'address'=>$request->address,

            'image'=>$fileName
          ]);

          notify()->success('Your Post updated successfully.');
          return redirect()->back();
        }
    }
}
