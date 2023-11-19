<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function registration()
    {
        return view('frontend.pages.registration');
    }

    public function store(Request $request)
    {
        //  /dd($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => bcrypt($request->password),
        ]);

        notify()->success('User Registration successful.');
        return redirect()->back();
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function doLogin(Request $request)
    {   
        // dd($request->all());

        $val = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($val->fails()) {
            notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $credentials = $request->except('_token');
        // dd($credentials);

        if (auth()->attempt($credentials)) {
            return redirect()->route('home')->with('success','You have login successfully');
            // return redirect()->route('home');
        }

        notify()->error('Invalid Credentials.');
            return redirect()->back();

    }

    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Success.');    
        return redirect()->route('home');
    }
}
