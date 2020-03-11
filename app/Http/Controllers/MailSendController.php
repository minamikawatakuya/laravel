<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailSendController extends Controller
{
    public function index(){
        $data = [];

        /*
        Mail::send('emails.test', $data, function($message){
    	    $message->to( env('MAIL_FOR_TEST'), 'Test' )->subject('This is a test mail');
        });
        */
        
    }
}
