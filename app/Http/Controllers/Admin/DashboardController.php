<?php
namespace App\Http\Controllers\Admin;
use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;


class DashboardController extends MainAdminController
{
    public function __construct()
    {
	$this->middleware('auth');	
         
    }
    public function index()
    { 
    	if(Auth::user()->usertype=='Admin')	
        {  
            $users = User::where('usertype', 'User')->count();
            return view('admin.pages.dashboard',compact('users'));
	}else{
	    return redirect('/');
	    }
   
    }
		
}
