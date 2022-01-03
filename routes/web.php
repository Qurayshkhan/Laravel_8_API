<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\post;

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
Route::get('/',[post::class,'show']);
Route::get('single/{id}',[post::class,'single_post']);
Route::get('add',[post::class,'add']);
Route::get('update/{id}',[post::class,'update']);
Route::get('delete/{id}',[post::class,'delete']);