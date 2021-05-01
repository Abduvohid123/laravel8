<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($HomeController=false)
    {
        $massiv=['olma','gilos','anor'];
        return view("home.index",[
            'HomeController'=>$HomeController,
            'massiv'=>$massiv
        ]);
    }
}
