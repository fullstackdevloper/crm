<?php
namespace App\Http\Controllers\Admin;
use App\User;
use App\Upbm;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
error_reporting(0);
class AjaxController extends MainAdminController
{

    public function index(Request $request)
    {
         $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);

    }



}