<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    
public function mail()
    {
        // this data will go to mail (mail content)
        $data=['name'=>"vijay yogi",'data'=>"hey i'm a software engineer"];

        $user['to']='dprogrammer20@gmail.com';
        Mail::send('mail',$data,function($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject('developer');
        });
    }
}
