@extends("manager.app")

@section("content")


    
<!-- Page Content -->
<div class="content content-boxed">
       <h1 class="user-head">
                         {{ isset($upbms->id) ? 'Edit UPBM' : 'Add UPBM' }}
                            </h1>
                        <ul class="dash-btn">
                           
                            <li class="active"><a  href="{{ URL::to('manager/upbms/addnew') }}" >Add New</a></li>
                          
                            <li ><a class="{{classActivePath('adduser')}}" href="{{ URL::to('manager/upbms') }}" >All upbms</a></li>
                            </ul>
    <div class="row" >
        <div class="col-sm-12 col-lg-12" >
            <div class="block">
                <div class="block-content block-content-narrow"> 
                    
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        {{ Session::get('flash_message') }}
                    </div>
                    @endif    
                    <p class="hidden text-danger msg" style="font-size:16px"></p><p class="hidden text-success msgg" style="font-size:16px"></p>
                    {!! Form::open(array('url' => array('manager/upbms/addnew'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                    <input type="hidden" name="id" value="{{ isset($upbms->id) ? $upbms->id : null }}">
                    <!--                *****************************************************************************************************-->
                    <div class="row" >
                        
                        
                        <br>
                            
                            <div class="clearfix">
                            </div>
                                  
                                        <div class="form-group">
                                            <label class="control-label col-md-2">
                                                Upwork ID<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                
                                               <select name="upwork_id"  class="form-control " >
											   <option>--select--</option>
                                                   
													@foreach(\App\Upwork::where('status',1)->get() as $upwork)
														<option value="{{$upwork->id}}" <?php if(isset($upbms->upwork_id)){if($upbms->upwork_id==$upwork->id){ echo 'selected'; }}?>>{{$upwork->upwork_id}}</value>
													@endforeach
													
                                                </select>                                           
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Upwork Job Link<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="job_link"  class="form-control " value="{{ isset($upbms->job_link) ? $upbms->job_link : null }}" type="text" required="required" >
                                            </div>
                                        </div>
										
										 <div class="form-group">
                                            <label class="control-label col-md-2">
                                               Job Type<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                
                                               <select name="job_type"  class="form-control " >
                                                    <option <?php if(isset($upbms->job_type)){if($upbms->job_type=='Fixed'){ echo 'selected'; }}?>>Fixed</option>
													<option <?php if(isset($upbms->job_type)){if($upbms->job_type=='Hourly'){ echo 'selected'; }}?>>Hourly</option>
                                                </select>                                           
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                               Team<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                
                                               <select name="team"  class="form-control " >
                                                    <option <?php if(isset($upbms->team)){if($upbms->team=='Android'){ echo 'selected'; }}?>>Android</option>
													<option <?php if(isset($upbms->team)){if($upbms->team=='Content Writing'){ echo 'selected'; }}?>>Content Writing</option>
													<option <?php if(isset($upbms->team)){if($upbms->team=='Marketing'){ echo 'selected'; }}?>>Marketing</option>
													<option <?php if(isset($upbms->team)){if($upbms->team=='PHP'){ echo 'selected'; }}?>>PHP</option>
                                                </select>                                           
                                            </div>
                                        </div>
										 <div class="form-group">
                                            <label class="control-label col-md-2">
                                                Status<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                
                                               <select name="status"  class="form-control " >
                                                    <option <?php if(isset($upbms->status)){if($upbms->status=='Bid Placed'){ echo 'selected'; }}?>>Bid Placed</option>
													<option <?php if(isset($upbms->status)){if($upbms->status=='Lead'){ echo 'selected'; }}?>>Lead</option>
                                                </select>                                           
                                            </div>
                                        </div>
                                   
                                 
                             
                                    <div class="col-xs-12 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">
                                            </label>
                                            <div class="col-md-7">
                                                <input  value="Save Changes" type="submit" class="btn btn-primary submitwait">
                                            </div>
                                        </div>
                                    </div>
                    </div>
                    <!--                *****************************************************************************************************-->
                    {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->     
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

@endsection