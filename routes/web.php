<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TclassController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\TuitionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/login', [UserController::class, 'loginForm'])->name('admin.login');
Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');


Route::group(['middleware' => 'auth'], function () {
    // admin
    Route::get('/admin/logout',[UserController::class, 'logout'])->name('admin.logout');
    Route::get('/', [HomeController::class, 'Home'])->name('admin.dashboard');

    // user
    Route::get('/users',[UserController::class, 'list'])->name('user.list');
    Route::get('/users/create',[UserController::class, 'createForm'])->name('users.Formcreate');
    Route::post('/users/store',[UserController::class, 'store'])->name('users.store');


    Route::get('/studentlist', [StudentController::class, 'Studentlist'])->name('student.list');
    Route::get('/student/advertisement', [StudentController::class, 'Student_Adv'])->name('student.post');

    Route::get('/teacherlist', [TeacherController::class, 'Teacherlist'])->name('teacher.list');
    Route::get('/teacher/advertisement', [TeacherController::class, 'T_adv'])->name('teacher.post');

    // subject
    Route::get('/subject/list', [SubjectController::class, 'Subject'])->name('subject.list');
    Route::get('/subject/form', [SubjectController::class, 'Create_form'])->name('subject_create.form');
    Route::post('/subject/store', [SubjectController::class, 'Store'])->name('subject.store');

    //class
    Route::get('/class/list', [TclassController::class, 'Class_list'])->name('class.list');
    Route::get('/class/form', [TclassController::class, 'Create_form'])->name('class.form');
    Route::post('/class/store', [TclassController::class, 'store_form'])->name('class.store');

    // institute
    Route::get('/institute/list', [InstituteController::class, 'Institute_li'])->name('institute.list');
    Route::get('/institute/form', [InstituteController::class, 'Institute_form'])->name('institute.form');
    Route::post('/institute/store', [InstituteController::class, 'Institute_store'])->name('institute.store');

    Route::get('/tuition/list', [TuitionController::class, 'Tuition_list'])->name('tuition.list');
    Route::get('/tuition/form', [TuitionController::class, 'Tuition_form'])->name('tuition.form');
    Route::post('/tuition/store', [TuitionController::class, 'Tuition_store'])->name('tuition.store');
});



//Route::get('/about',[AboutController::class,'AboutPage'])->name(aboutpage);

//Route::get('/contacts',[ContactsController::class,'Contacts']);