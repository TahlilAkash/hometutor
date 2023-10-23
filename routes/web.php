<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

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
Route::get('/',[AdminController::class,'Home']);

Route::get('/studentlist',[StudentController::class,'Studentlist']);
Route::get('/student/advertisement',[StudentController::class,'Student_Adv']);

Route::get('/teacherlist',[TeacherController::class,'Teacherlist']);
Route::get('/teacher/advertisement',[TeacherController::class,'T_adv']);

Route::get('/subject/list',[SubjectController::class,'Subject'])->name('subject.list');
Route::get('/subject/form',[SubjectController::class,'Create_form'])->name('subject_create_form');
Route::post('/subject/store',[SubjectController::class,'Store'])->name('subject.store');







//Route::get('/about',[AboutController::class,'AboutPage']);

//Route::get('/contacts',[ContactsController::class,'Contacts']);