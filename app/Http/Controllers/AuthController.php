<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\HomeController;

class AuthController extends Controller{
    public function login()
    {
        // session()->flash(
        //     'link',
        //     session()->has('link') ? session('link') : url()->previous()
        // );
        return view('auth.login');
    } 
    public function register()
    {
        return view('auth.register');
    }  

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }
        session()->flash('link', session('link'));
        return redirect()->back()->with('error', 'Email or password is incorrect');
    }
    public function userRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required|alpha_dash|unique:users',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|same:password',
        ]);
        $request->merge(['password' => bcrypt($request->password),
                        
        ]);
        User::create($request->all());
        // session()->flash(
        //     'link',
        //     route('auth.login')
        // );
        return redirect()->route('auth.login')->with('success', 'User created successfully');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth.login');
    }
} 
