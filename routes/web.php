<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\StrController;
use App\Http\Controllers\UserController;
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
Route::resource('users', UserController::class);
Route::get('post',[\App\Http\Controllers\PostController::class,'getAllPost']);
Route::get('addPost',[\App\Http\Controllers\PostController::class,'addPost']);
Route::post('addSubmit',[\App\Http\Controllers\PostController::class,'addSubmit'])->name('addSubmit');
Route::get('postview/{id}',[\App\Http\Controllers\PostController::class,'postview'])->name('postview');
Route::get('delete/{id}',[\App\Http\Controllers\PostController::class,'delete'])->name('delete');
Route::get('edit/{id}',[\App\Http\Controllers\PostController::class,'edit'])->name('edit');
Route::post('update',[\App\Http\Controllers\PostController::class,'update'])->name('update');

