<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewRegisterController extends Controller
{
    public function register(){
        return view('new-register');
    }
}
