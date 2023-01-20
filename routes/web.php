<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
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

Route::get('/',[mycontroller::class,'home']);
Route::get('adduser',[mycontroller::class,'adduser']);
Route::get('dashbord',[mycontroller::class,'dash']);
Route::post('create',[mycontroller::class,'insert']);
Route::get('/design', function () {
    return view('design');
} );
