<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
	{
		$this->middleware(['authAdmin']);
	}

    public function dashboard()
    {
    	return view('ADMIN.dashboard');
    }

    public function home()
    {
    	return view('ADMIN.home');
    }

    public function managers()
    {
    	return view('ADMIN.managers');
    }
}