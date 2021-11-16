<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserConroller;
use App\Http\Controllers\FormConroller;
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
Route::get('/about',function(){
    echo env("APP_KEY");
    return view('about');
});
Route::get('user',[UserConroller::class,'index']);
Route::post('upload',[UserConroller::class,'upload']);
Route::view('form','form');
Route::get('/{id}/delete',[UserConroller::class,'delete']);
Route::get('/{id}/edit',[UserConroller::class,'edit']);
Route::post('/{id}/update',[UserConroller::class,'update']);
Route::post('create',[UserConroller::class,'create']);
Route::get('/login',function(){
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('login');
});
Route::post('loginaction',[UserConroller::class,'loginAction']);