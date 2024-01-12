<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $administrators = User::where('is_admin', true)->get();

        foreach ($administrators as $administrator) {
            Mail::to($administrator->email)->send(new ContactMail($request->name, $request->email, $request->message));
        }
        return redirect('/news')->with('success', 'Your message has been sent.');
    }
}
