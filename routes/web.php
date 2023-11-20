<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularContoller;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AuthController;
use App\Models\classroom;
use App\Models\Extracurricular;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/login',[AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class,'authenticating']);

Route::get('/logout',[AuthController::class,'logout'])->middleware('auth');


Route::get('/students',[StudentController::class,'index'])->middleware('auth');
Route::get('/student/{id}',[StudentController::class,'show'])->middleware('auth');
Route::get('/students-add',[StudentController::class,'create'])->middleware('auth');
Route::post('students/', [StudentController::class,'store'])->middleware('auth');
Route::get('/student-edit/{id}',[StudentController::class,'edit'])->middleware('auth');
Route::put('/students/{id}',[StudentController::class,'update'])->middleware('auth');
Route::get('/student-delete/{id}',[StudentController::class,'delete'])->middleware('auth');
Route::delete('/student-destroy/{id}',[StudentController::class,'destroy'])->middleware('auth');
Route::get('/student-deleted-list',[StudentController::class,'DeletedStudent'])->middleware('auth');
Route::get('/students/{id}/restore',[StudentController::class,'restore'])->middleware('auth');


Route::get('/class',[ClassController::class,'index'])->middleware('auth');
Route::get('/class-detail/{id}',[ClassController::class,'show'])->middleware('auth');
Route::get('/class-add',[ClassController::class,'create'])->middleware('auth');
Route::post('/class',[ClassController::class,'store'])->middleware('auth');

Route::get('/extracurricular',[ExtracurricularContoller::class,'index'])->middleware('auth');
Route::get('/extracurricular-detail/{id}',[ExtracurricularContoller::class,'show'])->middleware('auth');
Route::get('/extracurricular-add',[ExtracurricularContoller::class,'create'])->middleware('auth');
Route::post('/extracurricular',[ExtracurricularContoller::class,'store'])->middleware('auth');
Route::get('/extracurricular-delete/{id}',[ExtracurricularContoller::class,'delete'])->middleware('auth');
Route::delete('extracurricular-destroy/{id}',[ExtracurricularContoller::class,'destroy'])->middleware('auth');

Route::get('/teacher',[TeacherController::class,'index'])->middleware('auth');
Route::get('/teacher-detail/{id}',[TeacherController::class,'show'])->middleware('auth');
Route::get('/teachers-add',[TeacherController::class,'create'])->middleware('auth');
Route::post('/teachers',[TeacherController::class,'store'])->middleware('auth');
Route::put('/teachers/{id}',[TeacherController::class,'Update'])->middleware('auth');
Route::get('/teacher-edit/{id}',[TeacherController::class,'edit'])->middleware('auth');
Route::get('/teacher-delete/{id}',[TeacherController::class,'delete'])->middleware('auth');
Route::delete('/teacher-destroy/{id}',[TeacherController::class,'destroy'])->middleware('auth');

Route::get('/register',[AuthController::class,'createregister']);
Route::post('/register',[AuthController::class,'registerstore']);
