<?php

namespace email_tracker\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class fetchController extends Controller
{
    function index(){
    	$emails_list = DB::table('add_emails')
    	->groupBy('email')
    	->get();
    	return view('form')->with('emails_list',$emails_list);

    }
}
