<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StrController extends Controller
{

    public function index()
    {
        echo Str::after("salom qalesan nima gaplar",'a')."<br><br>";
        echo Str::of("salom qalesan nima gaplar")->afterLast('a')."<br><br>";
        echo Str::afterLast("salom qalesan nima gaplar",'a')."<br><br>";
        echo Str::kebab("salom qalesan nima gaplar")."<br><br>";
        echo Str::finish("salom qalesan nima gaplar",' yana bitta nima gaplar')."<br><br>";
//vahokazo

    }
}
