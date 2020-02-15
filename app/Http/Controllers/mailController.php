<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
//use Mail;

class mailController extends Controller
{
  public function sendMail(Request $request){
    $email = $request->input('email');
    Newsletter::subscribe($email);
    return view('subscription',['email' => $email]);
  }
}
