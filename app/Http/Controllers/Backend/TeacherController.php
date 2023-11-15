<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function Teacherlist(){
        return view('admin.pages.teacher.teacher_list');
    }


    public function T_adv(){
        return view('admin.pages.teacher.teacher_adv');
    }
}
