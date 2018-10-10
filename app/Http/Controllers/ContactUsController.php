<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;

class ContactUSController extends Controller
{
    public function contactUS()
    {
        return view('contactUS');
    }
    /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [ 'firstName' => 'required', 'lastName' => 'required', 'email' => 'required|email', 'phone' => 'required|digits:10', 'companyName' => 'nullable|string','accredited' => 'nullable', 'message' => 'required' ]);
        ContactUS::create($request->all());

        Mail::send('email',
            array(
                'firstName' => $request->get('firstName'),
                'lastName' => $request->get('lastName'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'companyName' => $request->get('companyName'),
                'accredited' => $request->get('accredited'),
                'user_message' => $request->get('message'),
            ), function($message) use ($request)
            {
                $message->from( $request->get('email'));
                $message->to('admin@gmail.com', 'Admin')->subject('Cloudways Feedback');
            });

        return back()->with('success', 'Thanks for contacting us!');
    }
}