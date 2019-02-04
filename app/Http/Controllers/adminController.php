<?php

namespace email_tracker\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    function index(){

    	$emails_list = DB::table('add_emails')
    	->groupBy('email')
    	->get();
    	return view('admin')->with('emails_list',$emails_list);
}
}
