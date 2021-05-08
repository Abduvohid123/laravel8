<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function sendEmail()
    {
        $details=[
            'title'=>'Email title',
            'body'=>'Email description'
        ];
        Mail::to('abduvohid.mirzamahmudov@gmail.com')->send(new TestMail($details));
        return  "Email yuborildi";
    }


}
