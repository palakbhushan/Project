<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class sendmail extends Controller
{
    //
    public function index1()
    {
        $user=[];
        $data=['name'=>'palak','data'=>'hello'];
        Mail::send('contact',$data,function($messages) use ($user){
            $messages->to('palakbosw@gmail.com');
            $messages->subject('hello developer');
        } );
    }
}
