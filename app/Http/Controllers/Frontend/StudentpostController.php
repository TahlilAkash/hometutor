<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TuitionPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentpostController extends Controller
{
    public function studentpost(){
        return view('frontend.pages.studentpost');
    }

    public function studentpoststore(Request $request)
    {
        // 
        $val = Validator::make($request->all(), [
            'email' => 'required', // name property of the form
            'class_list' => 'required',
            'subject_name'=> 'required',
            'salary'=>'required',
            'contact'=> 'required',
        ]);

        if ($val->fails()) {
            notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $fileName=null;
        if($request->hasFile('image'))
            {
                
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

                $file->storeAs('/uploads',$fileName);

            }
        
            TuitionPost::create([
                'name'=>$request->name, // feild name --request --name property
                'role'=>$request->role,
                'email'=>$request->email,
                // 'salary'=>$request->salary,
                'class_list'=>$request->class_list,
                'subject_name'=>$request->subject_name,
                'salary'=>$request->salary,
                'contact'=>$request->contact,
                'address'=>$request->address,
                'image'=>$fileName,
                
            ]);
        return redirect()->route('home');
    }

}
