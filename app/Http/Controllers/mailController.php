<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Mail\Mailable;
use App\add_emails;
use Illuminate\Support\Facades\Input;


class mailController extends Controller
{
	
    function send(Request $request) {
    	$data= array(
          
         'subject'=>$request->subject,
         'body'=>$request->body
         );
        
         $user = new add_emails;
          $user->email = Input::get("email");
          
        
    	Mail::to($request->E_mail)->send(new SendMail($data));
        return back( )->with('success','Mail has been sent');
        
    }

}
