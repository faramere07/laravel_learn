<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct()
	{
		$this->middleware(['guest']);
	}

    public function index()
    {
    	return view('auth.login');
    }

    public function login(Request $request)
    {

    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:8',
    	]);

    	if (!auth()->attempt($request->only('email', 'password'), $request->remember))
    	{
    		return back()->with('status', 'Email or password is incorrect, please check your details');
    	}

    	return redirect()->route('home');
    }

    
}
