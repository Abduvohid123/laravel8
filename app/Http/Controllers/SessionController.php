<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getorput(Request $request)
    {
        if ($request->session()->has('name')) {
           echo $request->session()->get("name");
        }else
        {
            $request->session()->put('name',"Abduvohid");
        }
    }

    public function remove(Request $request)
    {
        $request->session()->remove('name');
    }




}
