<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Openings;
use Redirect;

class AdminController extends Controller
{
    public function __construct()
	{
		$this->middleware(['authAdmin']);
	}

    public function home()
    {
    	return view('ADMIN.home');
    }

    public function managers()
    {
    	return view('ADMIN.managers');
    }

    public function applications()
    {
        return view('ADMIN.applications');
    }

    public function openings()
    {
        return view('ADMIN.openings');
    }

    public function createOpening(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'startTime' => 'required',
            'endTime' => 'required',
            'category' => 'required|max:255',
            'description' => 'required|max:255',
            'salary' => 'required|max:255',
            'jobType' => 'required|max:255',
        ]);

        Openings::updateOrCreate([
            'title' => $request->title,
            'startTime' => date("h:i a", strtotime($request->startTime)),
            'endTime' => date("h:i a", strtotime($request->endTime)),
            'category' => $request->category,
            'description' => $request->description,
            'jobType' => $request->jobType,
            'salary' => $request->salary,
        ]);

        return redirect()->back()->with('success', 'Job Opening Succesfully created');  
    }
}