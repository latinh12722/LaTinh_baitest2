<?php

use App\Http\Controllers\forgot_pass;
use App\Http\Controllers\login;
use App\Http\Controllers\signup;
use App\Http\Controllers\MyController;
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

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('checklogin');

Route::get('/signup', function () {
    return view('signup');

})->name('signup')->middleware('checklogin');

Route::post('/signup', [signup::class, 'createUser']);

Route::post('/login', [login::class, 'checklogin']);

Route::get('/index', function () {
    return view('index');
})->name('index')->middleware('login');

Route::get('/logout',[login::class,'logout']);

        
Route::get('/forgot-pass',function(){
    return view('forgot_pass');
})->name('forgot-pass')->middleware('checklogin');

Route::post('/forgot-pass',[forgot_pass::class,'forgot_pass']);

Route::get('/reset-pass/{token}',[forgot_pass::class,'formresetpass'])->middleware('checklogin');
Route::post('/reset-pass',[forgot_pass::class,'resetpass']);