<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
	public function __construct()
	{
		$this->middleware(['guest']);
	}

    public function index()
    {
    	return view('auth.register');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|max:255',
			'gender' => 'required|max:1|min:1',
    		'username' => 'required|max:255|unique:users',
    		'email' => 'required|max:255|email|unique:users',
    		'password' => 'required|confirmed|min:8',
    	]);

    	User::create([
    		'name' => $request->name,
    		'username' => $request->username,
    		'email' => $request->email,
    		'password' => Hash::make($request->password),
    		'userType' => $request->userType,
			'gender' => $request->gender,
            'status' => 'active',
    	]);

    	auth()->attempt($request->only('email','password'));
    	return redirect()->route('applicantHome');
    }
}
