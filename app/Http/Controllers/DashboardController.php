<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{


    public function submit(Request $request)
{
    $details = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'nullable',
        'subject' => 'required',
        'message' => 'required',
    ]);

    Mail::to('wp2@firmtechsol.com')->send(new ContactMail($details));

    return redirect()->back()->with('success', 'Your message has been sent.');
}

    // public function submit(Request $request)
    // {
    //     // dd($request->all());
    //     // $details = $request->validate([
    //     //     'name' => 'required|min:3|max:255',
    //     //     'email' => 'required|email',
    //     //     'phone' => 'required',
    //     //     'subject' => 'required',
    //     //     'message' => 'required|min:10',
    //     // ]);

    //     // Mail::to('wp2@firmtechsol.com')->send(new ContactMail($details));


    //     Mail::send('emails.contact', [
    //         'name' => $request->get('name'),
    //         'subject'=>$request->get('subject'),
    //         'phone' => $request->get('phone'),
    //         'messages' => $request->get('messages'),
    //         'email' => $request->get('email') ],
    //         function ($message) {
    //                 $message->from('wp2@firmtechsol.com');
    //                 $message->to('wp2@firmtechsol.com', 'FirmTechServices')
    //                         ->subject('New Candidate for Job');
    // });

    //             return redirect()->back()->with('success', 'Message sent!');

    // }
}
