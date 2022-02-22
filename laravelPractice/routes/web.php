<?php

use App\Http\Controllers\pagesController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/login',function(){return view('home.logins.login');});

route::get('/register',function(){return view('home.logins.register');});

route::get('/login',[pagesController::class,'login'])->name('login');

route::get('/register',[pagesController::class,'register']);

route::get('/student/list',[studentController::class,'list']);

route::get('/student/create',[studentController::class,'create'])->name('student.create');

route::get('/student/get',[studentController::class,'get']);

route::get('/student/details/{id}/{name}',[studentController::class,'details'])->name('student.details');