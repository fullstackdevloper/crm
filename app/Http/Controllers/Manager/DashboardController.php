<?php
namespace App\Http\Controllers\Manager;
use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;


class DashboardController extends MainManagerController
{
    public function __construct()
    {
	$this->middleware('auth');	
         
    }
    public function index()
    { 
    	if(Auth::user()->usertype=='Manager')	
        {  
            $users = User::where('usertype', 'Manager')->count();
            return view('manager.pages.dashboard',compact('users'));
	}else{
	    return redirect('/manager');
	    }
   
    }
		
}
