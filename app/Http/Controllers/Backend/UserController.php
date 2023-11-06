<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginForm(){
        return view('admin.pages.login');
    }

    public function loginPost(Request $request){
        //dd($request);

        $val=Validator::make($request->all(),
        
        [
            'email'=>'required|email', //name property of form
            'password'=>'required|min:6',
        ]);
        //dd($val);
        

        if($val->fails())
        {
            return redirect()->back()->withErrors($val);
        }

        $credentials=$request->except('_token');
        // $credentials=$request->only('email','password');

        // if(auth()->attempt($credentials))
        $login=auth()->attempt($credentials);

        if($login)
        {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->withErros('invalid email or password');
    }

    public function logout()
    {

        auth()->logout();
        return redirect()->route('admin.login');
        
    }
}
