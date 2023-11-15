<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Studentlist(){
        return view('admin.pages.student.s_list');
    }

    public function Student_Adv(){
        return view('admin.pages.student.s_advertisement');
    }
    
}
