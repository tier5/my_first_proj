<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authenticate(Request)
    {
    	if (Auth::attempt(['email' =>$email, 'password'=>$password]))
    	{
    		//return redirect()->route('log')
    		return view ('layout.login');
    	}
    }
}






