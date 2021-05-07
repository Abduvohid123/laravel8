<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});
Route::get('til/{language}',function ($language){
    \Illuminate\Support\Facades\App::setLocale($language);
    return __('message.lorem');
});
