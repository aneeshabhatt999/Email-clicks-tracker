<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class mailController extends Controller
{
	
    function send(Request $request) {
    	$data= array(
         'email'=> $request->email,
         'subject'=>$request->subject,
         'body'=>$request->body
         );
        
        
    	Mail::to('aneeshabhatt99@gmail.com')->send(new SendMail($data));
        return back( )->with('success','Mail has been sent');
        
    }

}
