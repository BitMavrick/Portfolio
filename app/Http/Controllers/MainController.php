<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function mail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $my_mail = 'hello.mehedi@outlook.com';

        Mail::to($my_mail)->send(new SendMail($request->name, $request->email, $request->message));

        // redirect home
        return redirect()->route('home');
    }
}
