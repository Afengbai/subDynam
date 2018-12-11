<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;
use Mail;

class ContactUSController extends Controller
{
    //

    public function contactUS()
    {
        return view('pages.contactUS');
    }

    public function contactUSPost(Request $request)
    {
        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
        ContactUS::create($request->all());

        $name = $request->get('name');
        $email = $request->get('email');
        $user_message = $request->get('message');

        $data = array('name' => $name, 'email' => $email,'user_message' => $user_message);

        Mail::send('pages.email', $data, function($message) use ($name,$email){
            $message->to($email,$name)->subject('Do not-reply');
            $message->from('adewalefakeye@gmail.com','Admin');
        });

        return redirect("/contact-us")->with('sent', "Message Sent");
    }
}
