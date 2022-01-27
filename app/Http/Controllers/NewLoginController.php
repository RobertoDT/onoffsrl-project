<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewLoginController extends Controller
{
    public function login()
    {
        return view('new-login');
    }
}
