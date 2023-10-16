<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ContactsController;
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
Route::get('/',[AdminController::class,'Dashborad']);
Route::get('/Teacher',[TeacherController::class,'Tlist']);



//Route::get('/about',[AboutController::class,'AboutPage']);

//Route::get('/contacts',[ContactsController::class,'Contacts']);