<?php
use App\Settings;
use App\User;
use App\Upwork;
 
if (! function_exists('getcong')) {

    function getcong($key)
    {
    	 
        $settings = Settings::findOrFail('1'); 

        return $settings->$key;
    }
}

if (!function_exists('classActivePath')) {
    function classActivePath($path)
    {
        $path = explode('.', $path);
        $segment = 2;
        foreach($path as $p) {
            if((request()->segment($segment) == $p) == false) {
                return '';
            }
            $segment++;
        }
        return ' active';
    }
}

if (!function_exists('classActivePathSite')) {
    function classActivePathSite($path)
    {
        $path = explode('.', $path);
        $segment = 1;
        foreach($path as $p) {
            if((request()->segment($segment) == $p) == false) {
                return '';
            }
            $segment++;
        }
        return 'active';
    }
}

if (! function_exists('username_by_id')) {

    function username_by_id($id)
    {
    	 
        $user = User::where('id',$id)->get(); 
		
	if(count($user) >0 )
	{
		return $user[0]->first_name.' '.$user[0]->last_name;
	}else{
		return '';
	}
        
    }
}

if (! function_exists('upworkname_by_id')) {

    function upworkname_by_id($id)
    {
    	 
        $upwork = Upwork::where('id',$id)->get(); 
		
	if(count($upwork) >0 )
	{
		return $upwork[0]->upwork_id;
	}else{
		return '';
	}
        
    }
}

