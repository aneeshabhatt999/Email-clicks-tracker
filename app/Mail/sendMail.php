<?php

namespace email_tracker\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use email_tracker\add_emails;
use DB;


class sendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $email;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$email)
    {
        $this->data= $data;
        $this->email=$email;

        
 
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request )
    {
       
        return $this->from($request->user())->subject ($this->data['subject'])->to($request->E_mail)->view('dynamic_email_template')->with('data',$this->data);
                                   
        
 
      
    }
}
