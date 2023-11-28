<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\TeacherController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\TclassController;
use App\Http\Controllers\Backend\InstituteController;
use App\Http\Controllers\Backend\TuitionController;

use App\Http\Controllers\Frontend\MemberController;

use App\Http\Controllers\Frontend\TeacherpostController;//teacher post
use App\Http\Controllers\Frontend\StudentpostController;// student post
use App\Http\Controllers\Frontend\PostController; // single post view
use App\Http\Controllers\Frontend\ApplyPostController;// apply post 
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;

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
//web site home page
Route::get('/',[FrontendHomeController::class,'home'])->name('home');


Route::get('/registration',[MemberController::class,'registration'])->name('member.registration');
Route::post('/registration',[MemberController::class, 'store'])->name('member.store');

Route::get('/login',[MemberController::class, 'login'])->name('member.login');
Route::post('/login',[MemberController::class,'doLogin'])->name('member.do.login');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/profile', [MemberController::class, 'profile'])->name('profile.view'); // member profile view
    Route::get('/logout',[MemberController::class, 'logout'])->name('member.logout');

    // apply to the tuition post
    Route::get('/apply-now/{tuitionPost_id}',[ApplyPostController::class,'applyNow'])->name('apply.post.now');
    Route::get('/cancel-apply/{tuitionPost_id}',[ApplyPostController::class,'cancelApply'])->name('apply.cancel');

    // teacher post to the website
    Route::get('/teacher/post',[TeacherpostController::class,'teacherpost'])->name('teacher.create.tuition.post');
    Route::post('/teacher/post/store',[TeacherpostController::class,'store'])->name('teacher.tuition.post.store');

    // student post to the website
    Route::get('/student/post',[StudentpostController::class,'studentpost'])->name('student.create.tuition.post');
    Route::post('/student/post/store',[StudentpostController::class,'studentpoststore'])->name('student.tuition.post.store');

    //single cart view
    Route::get('/teacher-student/post/singleview/{id}',[PostController::class,'singlePostview'])->name('s_t.post.singleview');

    

});

Route::group(['prefix'=>'admin'],function(){
// admin
Route::get('/login', [UserController::class, 'loginForm'])->name('admin.login');
Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'checkAdmin'], function () {    
        // admin
        Route::get('/logout',[UserController::class, 'logout'])->name('admin.logout');
        Route::get('/', [HomeController::class, 'Home'])->name('admin.dashboard');

        // user
        Route::get('/users',[UserController::class, 'list'])->name('user.list');
        Route::get('/users/create',[UserController::class, 'createForm'])->name('users.Formcreate');
        Route::post('/users/store',[UserController::class, 'store'])->name('users.store');


        // admin panel student list
        Route::get('/studentlist', [StudentController::class, 'Studentlist'])->name('student.list');
        // Route::get('/student/advertisement', [StudentController::class, 'Student_Adv'])->name('student.post');
        Route::get('/studentlist/delete/{id}', [StudentController::class, 'delete'])->name('studentlist.delete');
        Route::get('/studentlist/edit/{id}', [StudentController::class, 'edit'])->name('studentlist.edit');
        Route::put('/studentlist/update/{id}',[StudentController::class, 'update'])->name('studentlist.update');
        
        
        // admin panel teacher list
        Route::get('/teacherlist', [TeacherController::class, 'Teacherlist'])->name('teacher.list');

        Route::get('/teacherlist/delete/{id}',[TeacherController::class,'delete'])->name('teacherlist.delete');
        Route::get('/teacherlist/edit/{id}', [TeacherController::class, 'edit'])->name('teacherlist.edit');
        Route::put('/teacherlist/update/{id}',[TeacherController::class, 'update'])->name('teacherlist.update');
        // Route::get('/teacher/advertisement', [TeacherController::class, 'T_adv'])->name('teacher.post');
       

        // subject
        Route::get('/subject/list', [SubjectController::class, 'Subject'])->name('subject.list');
        
        Route::get('/subject/delete/{id}', [SubjectController::class, 'delete'])->name('subject.delete');
        Route::get('/subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit');
        Route::put('/subject/update/{id}', [SubjectController::class, 'update'])->name('subject.update');

        Route::get('/subject/form', [SubjectController::class, 'Create_form'])->name('subject_create.form');
        Route::post('/subject/store', [SubjectController::class, 'Store'])->name('subject.store');

        //class
        Route::get('/class/list', [TclassController::class, 'Class_list'])->name('class.list');

        Route::get('/class/delete/{id}', [TclassController::class, 'delete'])->name('class.delete');
        Route::get('/class/edit/{id}', [TclassController::class, 'edit'])->name('class.edit');
        Route::put('/class/update/{id}', [TclassController::class, 'update'])->name('class.update');

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
});

});

//Route::get('/about',[AboutController::class,'AboutPage'])->name(aboutpage);

//Route::get('/contacts',[ContactsController::class,'Contacts']);