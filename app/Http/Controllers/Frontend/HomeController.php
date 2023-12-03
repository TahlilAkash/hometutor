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

        $tuitionposts = TuitionPost::where('role' , '=', 'tuitor')->where('status','approved')->get();

        $studentposts = TuitionPost::where('role' , '=', 'student')->where('status','approved')->get();
        //dd( $studentposts->toarray());
        return view('frontend.partial.homeDashboard',compact('studentposts', 'tuitionposts'));
       
    }


    // search
    public function search(Request $request)
    {
        // dd(request()->all());

        if($request->search)
        {
            $relatedposts=TuitionPost::where('subject_name','LIKE','%'.$request->search.'%')->get();
            //select * from products where name like % akash %;
        }else{
            $relatedposts=TuitionPost::all();
        }



        return view("frontend.pages.search",compact('relatedposts'));
    }
}
    

