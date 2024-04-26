<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('login');
    }

    function registration () {
    	return view('registration'); 
    }

    function loginPost(Request $request){
        $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) { 
           return redirect()->intended(route('home'))->with('success', 'you successfully logged in!');;
        } else {
          return redirect(route('login'))->with('error', 'Email or Password is incorrect!');
        }
    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['password']= Hash::make($request->password);

        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->with('error', 'Registration Failed!');
        }
        return redirect(route('login'))->with('success', 'you have successfully registered!');
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'))->with('success', 'you have successfully logged out!');
    }
}
