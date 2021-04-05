<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function show()
    {
        return view('mails.show');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))->send(new ContactMe('Justice League'));

        return redirect('/mail')->with('message', 'Email sent');
    }
}
