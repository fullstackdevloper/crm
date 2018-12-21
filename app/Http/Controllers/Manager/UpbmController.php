<?php

namespace App\Http\Controllers\Manager;
use App\User;
use App\Upbm;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class UpbmController extends MainManagerController
{
    
    public function add_upbm(Request $request)
    {
		$heading_title='Add New Upbm';
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        return view('manager.pages.add_edit_upbm',compact('heading_title'));
    }
    
    public function edit_upbm(Request $request)
    {
        $heading_title='Edit Upbm';
        $upbms = Upbm::findOrFail($request->id);
        
        return view('manager.pages.add_edit_upbm', compact('upbms','heading_title'));
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
            'status' => 'required',
            
        );
        
        
        $validator = \Validator::make($data, $rule);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }
        if (empty($inputs['id'])) {
            $Upbm = new Upbm;
			$Upbm->created_by  = Auth::user()->id;
        } else {
            $Upbm = Upbm::findOrFail($inputs['id']);
        }
        $Upbm->upwork_id  = $inputs['upwork_id'];
        $Upbm->job_link  = $inputs['job_link'];
        $Upbm->job_type  = $inputs['job_type'];
	$Upbm->team  = $inputs['team'];
        $Upbm->status= $inputs['status'];  
        $Upbm->clientrating= $inputs['clientrating']; 
        $Upbm->save();
        
        
        \Session::flash('flash_message', 'Upbm added sucessfully');
        return back();
        
    }
    public function allupbm(Request $request)
    {
		$heading_title='All Upbm';
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        $allUser = Upbm::orderBy('id', 'desc')->where('team',Auth::user()->userrole)->where('status','Bid Placed')->get();
        return view('manager.pages.view_upbms', compact('allUser','heading_title'));
    }
    
    public function deleteupbm(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Manager') {
            return redirect('manager');
        }
        if ($task = Upbm::findOrFail($request->id)) {
            $task->delete($request->id);
            \Session::flash('flash_message', 'Upbm has been deleted successfully.');
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
        
        $Upbm= Upbm::findOrFail($request->id);
        $Upbm->status = $request->status;
        $Upbm->save();
        \Session::flash('flash_message', 'Status updated successfully.');
        return back();
        
        
    }
	
	public function filterallupbm(Request $request)
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
		 $datefrom=date($datefromfilter); 
		$dateto=date($datetofilter);
		if(empty($datefromfilter))
		{
		$datefrom = '2018-01-01';
		}
		if(empty($datetofilter))
		{
		  $dateto = date('Y-m-d');
          $dateto = date('Y-m-d',strtotime($dateto . "+1 days"));
		}
		if(empty($upwork_id) && empty($jobtype)&& empty($job_link) && empty($created_by))
		{ 
		$allUser = Upbm::orderBy('id', 'desc')->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();	
		}
		else if(!empty($upwork_id) && empty($jobtype) && empty($job_link) && empty($created_by))
		{ 
        $allUser = Upbm::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		} 
		else if(empty($upwork_id) && !empty($jobtype) && empty($job_link) && empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('job_type', $jobtype)->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(empty($upwork_id) && empty($jobtype) && !empty($job_link) && empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(!empty($upwork_id) && !empty($jobtype) && empty($job_link) && empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('job_type', $jobtype)->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		} 
		else if(!empty($upwork_id) && !empty($jobtype) && !empty($job_link) && empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('job_type', $jobtype)->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(!empty($upwork_id) && !empty($jobtype) && !empty($job_link) && !empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('job_type', $jobtype)->where('created_by', $created_by)->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(empty($upwork_id) && !empty($jobtype) && empty($job_link) && !empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('job_type', $jobtype)->where('created_by', $created_by)->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(empty($upwork_id) && empty($jobtype) && empty($job_link) && !empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('created_by', $created_by)->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(!empty($upwork_id) && empty($jobtype) && empty($job_link) && !empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('created_by', $created_by)->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(!empty($upwork_id) && !empty($jobtype) && empty($job_link) && !empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('job_type', $jobtype)->where('created_by', $created_by)->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(!empty($upwork_id) && empty($jobtype) && !empty($job_link) && !empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('upwork_id', $upwork_id)->where('created_by', $created_by)->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(empty($upwork_id) && !empty($jobtype) && !empty($job_link) && !empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('job_type', $jobtype)->where('created_by', $created_by)->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		}
		else if(empty($upwork_id) && empty($jobtype) && !empty($job_link) && !empty($created_by))
		{
        $allUser = Upbm::orderBy('id', 'desc')->where('created_by', $created_by)->where('job_link','like','%'.$job_link.'%')->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();
		} else{ 
		$allUser = Upbm::orderBy('id', 'desc')->where('team',Auth::user()->userrole)->where('status','Bid Placed')->whereBetween('created_at', [$datefrom, $dateto])->get();	
		}

		
		$heading_title='All Upbm';
        return view('manager.pages.view_upbms', compact('allUser','upwork_id','jobtype','job_link','created_by','datefromfilter','datetofilter','heading_title'));
    }
    
    
}