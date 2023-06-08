<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Registration extends Controller
{
    public function index(){
        return view('login');
    }

    public function register(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password '
        ]);



        echo "<pre>";
        print_r($request->all());


    }
}
