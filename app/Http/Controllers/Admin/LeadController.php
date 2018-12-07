<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Lead;
use App\Note;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class LeadController extends MainAdminController
{
    
    public function add_lead(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        return view('admin.pages.add_edit_lead');
    }
    
    public function edit_lead(Request $request)
    {
        
        $leads = Lead::findOrFail($request->id);
        
        return view('admin.pages.add_edit_lead', compact('leads'));
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
        
        $rule = array(
            
            'upwork_id' => 'required',
            'job_link' => 'required',
            'job_type' => 'required',
            'lead_status' => 'required',
            'source' => 'required',
            'assigned' => 'required',
            
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
        $lead->team  = $inputs['team'];
		
        $lead->status= 'Lead';        
        $lead->lead_status= $inputs['lead_status'];        
        $lead->source= $inputs['source'];        
        $lead->assigned= $inputs['assigned'];        
        $lead->skype= $inputs['skype'];        
        $lead->name= $inputs['name'];        
        $lead->address= $inputs['address'];        
        $lead->website= $inputs['website'];        
        $lead->position= $inputs['position'];        
        $lead->email= $inputs['email'];        
        $lead->state= $inputs['state'];        
        $lead->country= $inputs['country'];        
        $lead->phone= $inputs['phone'];        
        $lead->zipcode= $inputs['zipcode'];        
        $lead->company= $inputs['company'];        
        $lead->description= $inputs['description'];        
        $lead->save();
        
        
        \Session::flash('flash_message', 'lead added sucessfully');
        return back();
        
    }
    public function alllead(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        $allleads = Lead::orderBy('id', 'desc')->where('lead_status','Lead')->get();
        return view('admin.pages.view_leads', compact('allleads'));
    }
	
	 public function allcustomers(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        $allleads = Lead::orderBy('id', 'desc')->where('lead_status','Customer')->get();
        return view('admin.pages.view_customers', compact('allleads'));
    }
    
    public function deletelead(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
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
        
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        
        $lead= Lead::findOrFail($request->id);
        $lead->status = $request->status;
        $lead->save();
        \Session::flash('flash_message', 'Status updated successfully.');
        return back();
        
        
    }
	
	public function addnote(Request $request)
    {
        
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        
        $data = \Input::except(array(
            '_token'
        ));
        
        $inputs = $request->all();
        
        $rule = array(
            
            'lead_id' => 'required',
            'notes' => 'required',
          
            
        );
        
        
        $validator = \Validator::make($data, $rule);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }
        $note = new Note;
        $note->notes  = $inputs['notes'];
        $note->lead_id  = $inputs['lead_id'];
		$note->created_by  = Auth::user()->id;
		$note->save();
        \Session::flash('flash_message', 'Note add successfully.');
        return back();
    }
	
	public function deletenote(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        if ($Note = Note::findOrFail($request->id)) {
            $Note->delete($request->id);
            \Session::flash('flash_message', 'Note has been deleted successfully.');
        } else {
            \Session::flash('flash_message', 'Please try again. Something went wrong.');
        }
        
        return back();
    } 
    
    
}