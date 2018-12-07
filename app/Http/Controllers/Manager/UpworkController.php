<?php

namespace App\Http\Controllers\Manager;
use App\User;
use App\Upwork;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class UpworkController extends MainManagerController
{
    
    public function addupwork_id(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        return view('manager.pages.add_edit_upwork');
    }
    
    public function edit_upwork(Request $request)
    {
        
        $upwork = Upwork::findOrFail($request->id);
        
        return view('manager.pages.add_edit_upwork', compact('upwork'));
    }
    public function addnew(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        $data = \Input::except(array(
            '_token'
        ));
        
        $inputs = $request->all();
        
        $rule = array(
            
            'upwork_id' => 'required'
            
        );
        
        
        $validator = \Validator::make($data, $rule);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }
        if (empty($inputs['id'])) {
            $Upwork = new Upwork;
        } else {
            $Upwork = Upwork::findOrFail($inputs['id']);
        }
        $Upwork->upwork_id  = $inputs['upwork_id'];
        $Upwork->created_by  = Auth::user()->id;
        $Upwork->save();
        
        
        \Session::flash('flash_message', 'ID added sucessfully');
        return back();
        
    }
    public function allupwork_id(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        $allUpwork = Upwork::get();
        return view('manager.pages.view_upwork_id', compact('allUpwork'));
    }
    
    public function deleteupwork_id(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        if ($task = Upwork::findOrFail($request->id)) {
            $task->delete($request->id);
            \Session::flash('flash_message', 'Upwork ID has been deleted successfully.');
        } else {
            \Session::flash('flash_message', 'Please try again. Something went wrong.');
        }
        
        return back();
    }
    
    public function status(Request $request)
    {
        
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        
        $Upwork         = Upwork::findOrFail($request->id);
        $Upwork->status = $request->status;
        $Upwork->save();
        \Session::flash('flash_message', 'Status updated successfully.');
        return back();
        
        
    }
    
    
}