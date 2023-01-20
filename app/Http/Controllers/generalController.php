<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class generalController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->route('home');
    }
}