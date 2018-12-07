<?php

namespace App\Http\Controllers\Bidder;
use App\User;
use Auth;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class BidderController extends MainBidderController
{
    
    public function __construct()
    {
		 $this->middleware('auth');	
         
    }
	
	public function profile()
    { 
        return view('bidder.pages.profile');
    }
    
	
	
    public function updateProfile(Request $request)
    {  
    		  
    	$user = User::findOrFail(Auth::user()->id);
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'first_name' => 'required',
                'last_name' => 'required',
		       // 'email' => 'unique:users,email,' . Auth::user()->id,
				'password' => 'confirmed',
		        'image_icon' => 'mimes:jpg,jpeg,gif,png'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	    

	    $inputs = $request->all();
		
		$icon = $request->file('user_icon');
		
		/*if($icon){
            
			
			 $filename  = str_slug($inputs['name'], '-').'-'.time().'.'.$icon->getClientOriginalExtension();

             $path = public_path('upload/members/');
 			
 			 $icon->move($path,$filename);
 			 
    		 $user->image_icon = 'upload/members/' . $filename;
        
                 
           // $user->image_icon = $hardPath;
        }
        
        */ 
		
		if($icon){
            $tmpFilePath = 'upload/members/';

            $hardPath =  str_slug($inputs['first_name'], '-').'-'.md5(time());

            $img = Image::make($icon);

            $img->fit(250, 250)->save($tmpFilePath.$hardPath.'-b.jpg');
            //$img->fit(80, 80)->save($tmpFilePath.$hardPath. '-s.jpg');

            $user->fileUpload1 = $tmpFilePath.$hardPath.'-b.jpg';
        }
        
		
		
		$user->first_name = $inputs['first_name']; 
        $user->last_name = $inputs['last_name']; 
		$user->email = $inputs['email']; 
		$user->phone_number = $inputs['mobile'];
        $user->address = $inputs['address']; 
        $user->skype = $inputs['skype']; 
		$user->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    }
    
    public function updatePassword(Request $request)
    { 
    	 
    		//$user = User::findOrFail(Auth::user()->id);
		
		
		    $data =  \Input::except(array('_token')) ;
            $rule  =  array(
                    'password'       => 'required|confirmed',
                    'password_confirmation'       => 'required'
                ) ;
 
            $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
		
	   		/* $val=$this->validate($request, [
                    'password' => 'required|confirmed',
            ]);  */      
         
	    $credentials = $request->only('password', 'password_confirmation'
            );
            
        $user = \Auth::user();
        $user->password = bcrypt($credentials['password']);
        $user->save();

	    Session::flash('flash_message', 'Successfully updated your password');

        return redirect()->back();
    }
	
    
    
}