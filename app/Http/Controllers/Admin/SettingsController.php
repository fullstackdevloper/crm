<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 

class SettingsController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');	
         
    }
    public function settings()
    { 
    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        
        $settings = Settings::findOrFail('1');
        
        return view('admin.pages.settings',compact('settings'));
    }	 
    
    public function settingsUpdates(Request $request)
    {  
    		 
    	$settings = Settings::findOrFail('1');
 
	    
	    $data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'site_name' => 'required',
		        'site_email' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return redirect()->back()->withErrors($validator->messages());
            }
	    

	    $inputs = $request->all();
		
		$icon = $request->file('site_logo');
		
		$icon_favicon = $request->file('site_favicon');
		 
		//Logo
		 
        if($icon){
            
           // $icon->move(public_path().'/upload/', 'logo.png');
            
            $tmpFilePath = 'upload/';			
			 
			$hardPath = 'logo.png';
			
            $img = Image::make($icon);

            $img->save($tmpFilePath.$hardPath); 
             
            $settings->site_logo = 'logo.png';
             
        }       
        
        //Favicon
        if($icon_favicon){
        	
        	//$icon_favicon->move(public_path().'/upload/', 'favicon.png');
             
            //$settings->site_favicon = 'favicon.png';
            
            $tmpFilePath = 'upload/';			
			 
			$hardPath = 'favicon.png';
			
            $img = Image::make($icon_favicon);

            $img->fit(16, 16)->save($tmpFilePath.$hardPath); 
             
            $settings->site_favicon = 'favicon.png';
            
             
        }
       
		 
		$settings->site_name = $inputs['site_name']; 
		
		$settings->site_email = $inputs['site_email'];
		$settings->site_description = $inputs['site_description'];

		$settings->facebook_url = $inputs['facebook_url'];
		$settings->twitter_url = $inputs['twitter_url'];
		$settings->gplus_url = $inputs['gplus_url'];
		$settings->linkedin_url = $inputs['linkedin_url'];
		$settings->steemit_link = $inputs['steemit_url'];
		$settings->telegram_url = $inputs['telegram_url'];
		

		$settings->site_copyright = $inputs['site_copyright'];
		
		  
		 
	    $settings->save();

	    Session::flash('flash_message', 'Successfully updated!');

        return redirect()->back();
    }
    
     
    	
}
