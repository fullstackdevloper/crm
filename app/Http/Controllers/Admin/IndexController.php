<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;

class IndexController extends MainAdminController
{
	
    public function index()
    {   
    	if (Auth::check()) {
			if(Auth::user()->usertype=='Admin')	
			{ 
                        
            return redirect('admin/dashboard'); 
			}
			else if(Auth::user()->usertype=='Manager')
			{
			return redirect('manager/dashboard');
			}
			else if(Auth::user()->usertype=='Bidder')
			{
			return redirect('bidder/dashboard');
			}
        }
 
        return view('admin.index');
    }
	
	/**
     * Do user login
     * @return $this|\Illuminate\Http\RedirectResponse
     */
	 
    public function postLogin(Request $request)
    {
    	
  
    	
      $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');

		 
		
         if (Auth::attempt($credentials, $request->has('remember'))) {

            if(Auth::user()->usertype !='Admin'){
                \Auth::logout();
				 return redirect('/admin')->withErrors('No Permission.');
            }

            return $this->handleUserWasAuthenticated($request);
        }

       // return array("errors" => 'The email or the password is invalid. Please try again.');
        //return redirect('/admin');
       return redirect('/admin')->withErrors('The email or the password is invalid. Please try again.');
        
    }
    
     /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  bool  $throttles
     * @return \Illuminate\Http\Response
     */
    protected function handleUserWasAuthenticated(Request $request)
    {

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::user());
        }

        return redirect('admin/dashboard'); 
    }
    
    
    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/admin');
    }
	
	
	
	
    	
     
		


}
