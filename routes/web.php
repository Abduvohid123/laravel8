<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
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

Route::get('posts', [\App\Http\Controllers\ClientController::class,'index']);
Route::get('posts/{id}',[\App\Http\Controllers\ClientController::class,'findById']);
Route::get('addpost',[\App\Http\Controllers\ClientController::class,'addPost']);
Route::get('updatepost',[\App\Http\Controllers\ClientController::class,'updatePost']);
Route::get('delete/{id}',[\App\Http\Controllers\ClientController::class,'deleteById']);
