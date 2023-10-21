<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Forgot extends Controller
{
    public function forgot ()
    {
        return view('login.forgot', [
            'title' => 'Forgot-Password'
        ]);
    }
}
