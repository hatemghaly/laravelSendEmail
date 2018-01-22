<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Mail;


class Emailcontroller extends Controller
{
    //
	
	public function index(){
		
		return view('email');
		
		
	}
	public function email(){
		
		return view('email');
		
		
	}
	
	public function postEmail(Request $request){

		$request->validate(
[

'email'=>'required',
'subject'=>'required',
'message'=>'required',
'name'=>'required'




]);

$data=[
'email'=>$request->email,
'subject'=>$request->subject,
'message'=>$request->message,
'name'=>$request->name,


];
Mail::send('emailContent',['data' => $data],function($message) use ($data){

	$message->from('Hatem@yahoo.com',$data['subject']);
	$message->to($data['email']);
	$message->subject($data['subject']);

});

return view('result');

	}
	
	
	
	
	
	
}
