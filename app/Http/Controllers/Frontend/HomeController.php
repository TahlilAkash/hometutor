<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\TuitionPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // $tuitionposts=TuitionPost::all();

        $tuitionposts = TuitionPost::where('role' , '=', 'tutor')->get();

        $studentposts = TuitionPost::where('role' , '=', 'student')->get();
        //dd( $studentposts->toarray());
        return view('frontend.partial.homeDashboard',compact('studentposts', 'tuitionposts'));
       
    }
    
}
