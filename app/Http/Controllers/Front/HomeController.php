<?php
namespace App\Http\Controllers\Front;
use Auth;
use App\User;
use Mail;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image; 
use Validator;

class HomeController extends Controller
{
     public function index()
    {   
    	
        return view('front.pages.home');
    } 
	public function signin()
    {   
    	
        return view('front.pages.signin');
    }
	public function signup_form(Request $request)
    {   
    	 $data=$request->all();
		 unset($data['_token']);
		 
		 if(empty($data))
		 {
			$validator = Validator::make($request->all(), [
			'company' => 'required',
			'broker' => 'required',
			]);

			if ($validator->fails()) { 
			return redirect('signin')
					->withErrors($validator)
					->withInput();
			} 
		 }
		 else{
			 return view('front.pages.register');
		 }	 
		 
	 
		 
         //return view('front.pages.signup');
    }
	
     
/**
     * Do user login
     * @return $this|\Illuminate\Http\RedirectResponse
     */
	 
    public function postLogin(Request $request)
    {
    	
    //echo bcrypt('123456');n
    //exit;	
      $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');

		 
		
         if (Auth::attempt($credentials, $request->has('remember'))) {

           if(Auth::user()->usertype !='Parents'  && Auth::user()->usertype !='Students'){
                \Auth::logout();
				 return redirect('/staff')->withErrors('No Permission.');
            }

            return $this->handleUserWasAuthenticated($request);
        }

       // return array("errors" => 'The email or the password is invalid. Please try again.');
        //return redirect('/admin');
       return redirect('/staff')->withErrors('The email or the password is invalid. Please try again.');
        
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
		
		           if(Auth::user()->usertype =='Parents'){
					    return redirect('parents/dashboard');
				   }
				   
				              if(Auth::user()->usertype =='Students'){
								   return redirect('students/dashboard');

							  
							  }

        
    }
    
    
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
    
	
 
    	
}
