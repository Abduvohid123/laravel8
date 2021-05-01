<?php

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
Route::get('test/{parametr?}', function ($a=false) {
    return "qalesan".$a;
});
Route::get('id/{id?}', function ($a=false) {
    return "qalesan".$a;
});
Route::match(['get', 'post'], '/match', function (Request $request) {
    return $request->method();
});
Route::any('any/{id?}', function ($id=false,Request $request) {
    return $request->method();  
});