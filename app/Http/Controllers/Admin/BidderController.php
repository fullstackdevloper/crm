<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class BidderController extends MainAdminController
{
    
    public function add_bidder(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        return view('admin.pages.add_edit_bidder');
    }
    
    public function edit_bidder(Request $request)
    {
        
        $bidders = User::findOrFail($request->id);
        
        return view('admin.pages.add_edit_bidder', compact('bidders'));
    }
    public function addnew(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        $data = \Input::except(array(
            '_token'
        ));
        
        $inputs = $request->all();
        if (empty($inputs['id'])) {
        $rule = array(
            
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|max:75|unique:users,email',
            'skype' => 'required',
            'phone_number' => 'required',
            'password' => 'required'
            
        );
		
		} else{
			$rule = array(
            
            'first_name' => 'required',
            'last_name' => 'required',
            'skype' => 'required',
            'phone_number' => 'required',
            
        );
			
		}
        
        
        $validator = \Validator::make($data, $rule);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }
        if (empty($inputs['id'])) {
            $User = new User;
			$User->email  = $inputs['email'];
			$User->password= bcrypt($inputs['password']); 
        } else {
            $User = User::findOrFail($inputs['id']);
        }
        $User->first_name  = $inputs['first_name'];
        $User->last_name  = $inputs['last_name'];
        
        $User->created_by  = Auth::user()->id;
        $User->usertype  = 'Bidder';
        $User->skype  = $inputs['skype'];
        $User->phone_number  = $inputs['phone_number'];
        
        $User->save();
        
        
        \Session::flash('flash_message', 'bidder added sucessfully');
        return back();
        
    }
    public function allbidder(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        $allUser = User::where('usertype','Bidder')->get();
        return view('admin.pages.view_bidders', compact('allUser'));
    }
    
    public function deletebidder(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        if ($task = User::findOrFail($request->id)) {
            $task->delete($request->id);
            \Session::flash('flash_message', 'bidder has been deleted successfully.');
        } else {
            \Session::flash('flash_message', 'Please try again. Something went wrong.');
        }
        
        return back();
    }
    
    public function status(Request $request)
    {
        
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        
        $User= User::findOrFail($request->id);
        $User->status = $request->status;
        $User->save();
        \Session::flash('flash_message', 'Status updated successfully.');
        return back();
        
        
    }
    
    
}