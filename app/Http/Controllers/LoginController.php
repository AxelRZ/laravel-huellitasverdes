<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    //

    public function onLogin(Request $req){

        $validate = array(
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $req->validate($validate);

        $userdata = array(
            'email' => $req->only('email'),
            'password' => $req->only('password')
            
        );

        $email= $req->input('email');
        $pass = $req->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $pass])){
            return view('admin');
        }else{
            return view('/')->with('status','failed to auth');
        }



    }
    public function show(){
        if(Auth::check()){
            return redirect(('/'));



        }else{
            return view('login');

        }


    }
}
