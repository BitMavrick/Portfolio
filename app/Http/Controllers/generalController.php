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
}