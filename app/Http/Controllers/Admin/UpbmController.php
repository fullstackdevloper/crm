<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Upbm;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class UpbmController extends MainAdminController
{

    public function add_upbm(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }
        return view('admin.pages.add_edit_upbm');
    }

    public function edit_upbm(Request $request)
    {

        $upbms = Upbm::findOrFail($request->id);

        return view('admin.pages.add_edit_upbm', compact('upbms'));
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
        $Upbm->save();


        \Session::flash('flash_message', 'Upbm added sucessfully');
        return back();

    }
    public function allupbm(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }

$searchQuery = '';
if(isset($_REQUEST['job_link']) && $_REQUEST['job_link'] != ''){
    $searchQuery .= " and job_link = '".$_REQUEST['job_link']."' ) ";
}
if(isset($_REQUEST['upworkid']) && $_REQUEST['upworkid'] != ''){
    $searchQuery .= " and (upwork_id='".$_REQUEST['upworkid']."') ";
}
if(isset($_REQUEST['jobtype']) && $_REQUEST['jobtype'] != ''){
    $searchQuery .= " and (job_type='".$_REQUEST['jobtype']."') ";
}
if(isset($_REQUEST['team']) && $_REQUEST['team'] != ''){
    $searchQuery .= " and (team='".$_REQUEST['team']."') ";
}
   $allUser = DB::select("select * from upbms WHERE status = 'Bid Placed' ".$searchQuery);



/*$users = DB::table('users')
  ->select(DB::raw("name,surname,CASE WHEN (gender = 1) THEN 'M' ELSE 'F' END) as gender_text"));
*/
//}


       // $allUser = Upbm::orderBy('id', 'desc')->where('status','Bid Placed')->get();

        return view('admin.pages.view_upbms', compact('allUser'));
    }

    public function deleteupbm(Request $request)
    {
        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
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

        if (!Auth::check() || Auth::user()->usertype != 'Admin') {
            return redirect('admin');
        }

        $Upbm= Upbm::findOrFail($request->id);
        $Upbm->status = $request->status;
        $Upbm->save();
        \Session::flash('flash_message', 'Status updated successfully.');
        return back();


    }


}