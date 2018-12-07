<?php
namespace App\Http\Controllers;
use Auth;
use App\User;
use Mail;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image; 

class IndexController extends Controller
{
     public function index()
    {   
    	
		
 
        return view('pages.index');
    }
	
     

	
 
    	
}
