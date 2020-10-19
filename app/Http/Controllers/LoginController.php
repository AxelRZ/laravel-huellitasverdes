<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    //

    public function onLogin(Request $req){

        $validate = array(
            'name' => 'required',
            'password' => 'required|alphaNum|min:3'
        );

        $req->validate($validate);


        $name= $req->input('name');
        $pass = $req->input('password');

        if (Auth::attempt(['name' => $name, 'password' => $pass])){
            return redirect('/');
        }else{
            return redirect('/login')->with('status','failed to auth');
        }



    }
    public function show(){
        if(Auth::check()){
            return redirect('/')->with('status','Ya iniciaste sesion');
        }else{
            return view('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect("/")->with('status','Sesion cerrada correctamente');
    }


}
