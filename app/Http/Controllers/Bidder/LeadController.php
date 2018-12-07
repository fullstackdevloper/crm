<?php

namespace App\Http\Controllers\Bidder;
use App\User;
use App\Lead;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class LeadController extends MainBidderController
{
    
    public function add_lead(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Bidder') {
            return redirect('bidder');
        }
        return view('bidder.pages.add_edit_lead');
    }
    
    public function edit_lead(Request $request)
    {
        
        $leads = Lead::findOrFail($request->id);
        
        return view('bidder.pages.add_edit_lead', compact('leads'));
    }
    public function addnew(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Bidder') {
            return redirect('bidder');
        }
        $data = \Input::except(array(
            '_token'
        ));
        
        $inputs = $request->all();
        
        $rule = array(
            
            'upwork_id' => 'required',
            'job_link' => 'required',
            'job_type' => 'required',
            'status' => 'required',
            
        );
        
        
        $validator = \Validator::make($data, $rule);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }
        if (empty($inputs['id'])) {
            $lead = new Lead;
			$lead->created_by  = Auth::user()->id;
        } else {
            $lead = Lead::findOrFail($inputs['id']);
        }
        $lead->upwork_id  = $inputs['upwork_id'];
        $lead->job_link  = $inputs['job_link'];
        $lead->job_type  = $inputs['job_type'];
        $lead->status= $inputs['status'];        
        $lead->save();
        
        
        \Session::flash('flash_message', 'lead added sucessfully');
        return back();
        
    }
    public function alllead(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Bidder') {
            return redirect('bidder');
        }
        $allUser = Lead::where('created_by',Auth::user()->id)->where('status','Lead')->orderBy('id', 'desc')->get();
        return view('bidder.pages.view_leads', compact('allUser'));
    }
    
    public function deletelead(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Bidder') {
            return redirect('bidder');
        }
        if ($task = Lead::findOrFail($request->id)) {
            $task->delete($request->id);
            \Session::flash('flash_message', 'lead has been deleted successfully.');
        } else {
            \Session::flash('flash_message', 'Please try again. Something went wrong.');
        }
        
        return back();
    }
    
    public function status(Request $request)
    {
        
        if (!Auth::check() || Auth::user()->usertype != 'Bidder') {
            return redirect('bidder');
        }
        
        $lead= Lead::findOrFail($request->id);
        $lead->status = $request->status;
        $lead->save();
        \Session::flash('flash_message', 'Status updated successfully.');
        return back();
        
        
    }
    
    
}