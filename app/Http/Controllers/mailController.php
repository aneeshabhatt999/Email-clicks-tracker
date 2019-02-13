<?php

namespace email_tracker\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use email_tracker\Mail\SendMail;
use Illuminate\Mail\Mailable;
use email_tracker\add_emails;
use Illuminate\Support\Facades\Input;
use DB;


class mailController extends Controller
{
	
    public function send(Request $request) {
    	$data= array(
          'checkbox'=>$request->checkbox,
         'subject'=>$request->subject,
         'body'=>$request->body
         );
        
         $user = new add_emails;
         
         $email = Input::get("email");
      

  

  
     
    	Mail::to($request->E_mail)->send(new SendMail($data,$request->E_mail));

        return back( )->with('success','Mail has been sent');
       

  
        
       
    }
     
        }


