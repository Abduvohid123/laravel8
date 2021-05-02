<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        echo $request->method();
        echo "<br>";
        echo $request->url();
        echo "<br>";
        echo $request->fullUrl();
    }

    public function login()
    {
        return view('login.login');
    }

    public function getLogin(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'password'=>'password'
        ]);
        echo "<pre>";
        print_r($request->all());
        $token=$request->input('_token');
        $name=$request->input('name');
        $password=$request->input('password');
        echo $token;
        echo "<br>";
        echo $name;
        echo "<br>";
        echo $password;

    }





}
