<?php

namespace App\Http\Controllers\Manager;
use App\User;
use App\Lead;
use App\Note;
use App\Reminder;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class LeadController extends MainManagerController
{
    
    public function add_lead(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        return view('manager.pages.add_edit_lead');
    }
    
    public function edit_lead(Request $request)
    {
        
        $leads = Lead::findOrFail($request->id);
        
        return view('manager.pages.add_edit_lead', compact('leads'));
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
            
            'upwork_id' => 'required',
            'job_link' => 'required',
            'job_type' => 'required',
            'lead_status' => 'required',
            'source' => 'required',
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
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        $allleads = Lead::orderBy('id', 'desc')->where('team',Auth::user()->userrole)->where('status','Lead')->get();
        return view('manager.pages.view_leads', compact('allleads'));
    }
	
	public function allcustomers(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        $allleads = Lead::orderBy('id', 'desc')->where('lead_status','Customer')->get();
        return view('manager.pages.view_customers', compact('allleads'));
    }
    
    public function deletelead(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
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
        
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        
        $lead= Lead::findOrFail($request->id);
        $lead->status = $request->status;
        $lead->save();
        \Session::flash('flash_message', 'Status updated successfully.');
        return back();
        
        
    }
	
	public function addnote(Request $request)
    {
        
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
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
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        if ($Note = Note::findOrFail($request->id)) {
            $Note->delete($request->id);
            \Session::flash('flash_message', 'Note has been deleted successfully.');
        } else {
            \Session::flash('flash_message', 'Please try again. Something went wrong.');
        }
        
        return back();
    } 
	
	
	public function addreminder(Request $request)
    {
        
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        
        $data = \Input::except(array(
            '_token'
        ));
        
        $inputs = $request->all();
        
        $rule = array(
            
            'lead_id' => 'required',
            'message' => 'required',
          
            
        );
        
        
        $validator = \Validator::make($data, $rule);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }
        $reminder = new Reminder;
        $reminder->message  = $inputs['message'];
        $reminder->time  = $inputs['time'];
        $reminder->lead_id  = $inputs['lead_id'];
		$reminder->created_by  = Auth::user()->id;
		$reminder->save();
        \Session::flash('flash_message', 'Reminder added successfully.');
        return back();
    }
	
	public function deletereminder(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        if ($reminder = Reminder::findOrFail($request->id)) {
            $reminder->delete($request->id);
            \Session::flash('flash_message', 'reminder has been deleted successfully.');
        } else {
            \Session::flash('flash_message', 'Please try again. Something went wrong.');
        }
        
        return back();
    } 
    
    public function filterallleads(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
		
		 $data = \Input::except(array(
            '_token'
        ));
		 $inputs = $request->all();
        $upwork_id=$inputs['upworkid'];
        $jobtype=$inputs['jobtype'];
		$job_link= $inputs['job_link'];
		$created_by= $inputs['created_by'];
		$datefromfilter= $inputs['datefrom'];
		$datetofilter= $inputs['dateto'];
        $inputs = $request->all();
		echo $datefrom=date($datefromfilter);;
		$dateto=date($datetofilter);
		if(empty($datefromfilter))
		{
		$datefrom = '2018-01-01';
		}
		if(empty($datetofilter))
		{
		 $dateto = date('Y-m-d');
		}
		if(empty($upwork_id) && empty($jobtype)&& empty($job_link) && empty($created_by))
		{ 
		$allleads = Lead::orderBy('id', 'desc')->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();	
		}
		else if(!empty($upwork_id) && empty($jobtype) && empty($job_link) && empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		} 
		else if(empty($upwork_id) && !empty($jobtype) && empty($job_link) && empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('job_type', $jobtype)->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(empty($upwork_id) && empty($jobtype) && !empty($job_link) && empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(!empty($upwork_id) && !empty($jobtype) && empty($job_link) && empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('job_type', $jobtype)->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		} 
		else if(!empty($upwork_id) && !empty($jobtype) && !empty($job_link) && empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('job_type', $jobtype)->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(!empty($upwork_id) && !empty($jobtype) && !empty($job_link) && !empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('job_type', $jobtype)->where('created_by', $created_by)->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(empty($upwork_id) && empty($jobtype) && empty($job_link) && !empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('created_by', $created_by)->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(!empty($upwork_id) && empty($jobtype) && empty($job_link) && !empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('created_by', $created_by)->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(!empty($upwork_id) && !empty($jobtype) && empty($job_link) && !empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('job_type', $jobtype)->where('created_by', $created_by)->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(!empty($upwork_id) && empty($jobtype) && !empty($job_link) && !empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('created_by', $created_by)->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(empty($upwork_id) && !empty($jobtype) && !empty($job_link) && !empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('job_type', $jobtype)->where('created_by', $created_by)->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(empty($upwork_id) && empty($jobtype) && !empty($job_link) && !empty($created_by))
		{
        $allleads = Lead::orderBy('id', 'desc')->where('created_by', $created_by)->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();
		} else{
		$allleads = Lead::orderBy('id', 'desc')->where('team',Auth::user()->userrole)->where('status','Lead')->whereBetween('created_at', [$datefrom, $dateto])->get();	
		}

		
		
        return view('manager.pages.view_leads', compact('allleads','upwork_id','jobtype','job_link','created_by','datefromfilter','datetofilter'));
    }
    
    
}