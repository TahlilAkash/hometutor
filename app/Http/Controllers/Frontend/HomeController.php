<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\TuitionPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $tuitionposts=TuitionPost::all();
        return view('frontend.pages.home',compact('tuitionposts'));
       
    }
    
}
