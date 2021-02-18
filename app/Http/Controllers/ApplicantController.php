<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function __construct()
	{
		$this->middleware(['authApplicant']);
	}

    public function dashboard()
    {
    	return view('APPLICANTS.dashboard');
    }

    public function home()
    {
    	return view('APPLICANTS.home');
    }
}
