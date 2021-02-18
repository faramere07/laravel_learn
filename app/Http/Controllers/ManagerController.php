<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function __construct()
	{
		$this->middleware(['authManager']);
	}

    public function dashboard()
    {
    	return view('MANAGER.dashboard');
    }

    public function home()
    {
    	return view('MANAGER.home');
    }
}
