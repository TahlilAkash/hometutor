<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function Tlist(){
        return view ('admin.pages.teacherlist');

    }
}
