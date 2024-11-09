<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EmailNotification;

class EmailController extends Controller
{
    public  function contact(){
        return view('contact');
    }
    public  function thanks(){
        return view('thanks');
    }

    public function sendEmail(Request $request){
        $data=$request->validate([
           'name'=> 'required|string',
           'email'=>'required|email',
           'subject'=>'required',
           'message'=>'required',
        ]);
        \Notification::route('mail','bipintiwari118@gmail.com')->notify(new EmailNotification($data));
        return redirect()->route('thanks');
    }
}
