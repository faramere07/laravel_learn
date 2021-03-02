<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Openings;
use App\Models\Posts;
use App\Models\User;
use Redirect;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
	{
		$this->middleware(['authAdmin']);
	}

    public function home()
    {   
        $activePosts = Posts::where('status', 'active')->paginate(10);
    	return view('ADMIN.home', ['activePosts' => $activePosts]);
    }

    public function managers()
    {
        $managers = User::orderBy('name', 'ASC')->where('userType', 'manager')->paginate(10);

    	return view('ADMIN.managers', [
            'managers' => $managers,
        ]);
    }

    public function applications()
    {
        return view('ADMIN.applications');
    }

    public function openings()
    {
        $activeOpenings = Openings::where('status', 'active')->paginate(10);

        return view('ADMIN.openings', [
            'activeOpenings' => $activeOpenings,
        ]);
    }

    public function closedOpenings()
    {
        $inactiveOpenings = Openings::where('status', 'inactive')->paginate(10);

        return view('ADMIN.closedOpenings', [
            'inactiveOpenings' => $inactiveOpenings,
        ]);
    }

    public function createPost()
    {
        return view('ADMIN.posts');
    }


    public function storePost(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:200',
            'subtitle' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

            Posts::updateOrCreate([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'category' => $request->category,
            'status' => 'active',
        ]);
            return redirect()->route('adminHome')->with('message', 'Post have been successfully created!');
    }

    public function postDetails(Request $request)
    {
        $postDetails = Posts::find($request->id);
        return view('ADMIN.postDetails', [
            'postDetails' => $postDetails,
        ]);
    }

    // public function createOpening(Request $request)
    // {
    //     $this->validate($request, [
    //         'title' => 'required|max:255',
    //         'startTime' => 'required',
    //         'endTime' => 'required',
    //         'category' => 'required|max:255',
    //         'description' => 'required',
    //         'jobType' => 'required|max:255',
    //         'status' => 'required|max:255',
    //     ]);


    //     //check if the data exists on the database
    //     $opening = Openings::where('title', $request->title)->where('startTime', $request->startTime)->where('endTime', $request->endTime);

    //     if($opening == null){
    //         Openings::updateOrCreate([
    //         'title' => $request->title,
    //         'startTime' => date("h:i a", strtotime($request->startTime)),
    //         'endTime' => date("h:i a", strtotime($request->endTime)),
    //         'category' => $request->category,
    //         'description' => $request->description,
    //         'jobType' => $request->jobType,
    //         'salary' => $request->salary ?? "N/A",
    //         'status' => $request->status,
    //     ]);
    //     return redirect()->back()->with('active', 'Job Opening Succesfully created');  
    //     } else{
    //         return redirect()->back()->with('error', 'Job Opening already exists'); 
    //     }
    // }

    // public function closeOpening(Request $request)
    // {
    //     $opening = Openings::find($request->id);

    //     $opening->status = 'inactive';

    //     $opening->save();

    //     return redirect()->back()->with('active', 'Job Opening Succesfully closed');  
    // }

    // public function openOpening(Request $request)
    // {
    //     $opening = Openings::find($request->id);

    //     $opening->status = 'active';

    //     $opening->save();

    //     return redirect()->back()->with('active', 'Job Opening Succesfully opened');  
    // }

    // public function destroyOpening(Request $request)
    // {
    //     $opening = Openings::find($request->id);

    //     $opening->delete();

    //     return redirect()->back()->with('inactive', 'Job Opening Succesfully Deleted');  
    // }

    // public function createManager(Request $request)
    // {

    //     $this->validate($request, [
    //         'name' => 'required|max:255',
    //         'Mtype' => 'required|max:255',
    //         'gender' => 'required|max:1|min:1',
    //         'username' => 'required|max:255|unique:users',
    //         'email' => 'required|max:255|email|unique:users',
    //         'password' => 'required|min:8',
    //     ]);

    //     User::create([
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'userType' => $request->userType,
    //         'gender' => $request->gender,
    //         'Mtype' => $request->Mtype,
    //         'status' => 'enabled',
    //     ]);

    //     return redirect()->back()->with('message', 'Manager Account Successfully created');  
    // }

    // public function disableAccount(Request $request)
    // {
    //     $user = User::find($request->id);

    //     $user->status = 'disabled';

    //     $user->save();

    //     return redirect()->back()->with('message', 'Manager Account has been successfully disabled');  
    // }

    // public function enableAccount(Request $request)
    // {
    //     $user = User::find($request->id);

    //     $user->status = 'enabled';

    //     $user->save();

    //     return redirect()->back()->with('message', 'Manager Account has been successfully enabled');  
    // }

    // public function deleteManagerAccount(Request $request)
    // {
    //     $user = User::find($request->id);

    //     $user->delete();

    //     return redirect()->back()->with('message', 'Manager Account has been successfully deleted');  
    // }

}