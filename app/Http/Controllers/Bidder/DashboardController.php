<?php
namespace App\Http\Controllers\Bidder;
use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;


class DashboardController extends MainBidderController
{
    public function __construct()
    {
	$this->middleware('auth');	
         
    }
    public function index()
    { 
    	if(Auth::user()->usertype=='Bidder')	
        {  
            $users = User::where('usertype', 'Bidder')->count();
            return view('bidder.pages.dashboard',compact('users'));
	}else{
	    return redirect('/bidder');
	    }
   
    }
		
}
