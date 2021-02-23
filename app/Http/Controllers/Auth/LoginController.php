<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

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

    	if (!auth()->attempt($request->only('email', 'password'), $request->remember, $request->userType))
    	{
    		return back()->with('message', 'Email or password is incorrect, please check your details');
    	}
        $role = Auth::user()->userType;
    	   if($role === 'applicant')
            {
                return redirect()->route('applicantHome');
            }
            if ($role === 'manager')
            {
                return redirect()->route('managerHome');
            }   
            if ($role === 'admin')
            {
                return redirect()->route('adminHome');
            }   



    	
    }

    
}
