@extends("admin.admin_app")

@section("content")


    
<!-- Page Content -->
<div class="content content-boxed">
       <h1 class="user-head">
                         {{ isset($employees->id) ? 'Edit manager' : 'Add manager' }}
                            </h1>
                       <ul class="dash-btn">
                           
                            <li class="active"><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees/addnew') }}" >Add New </a></li>
                          
                            <li ><a  href="{{ URL::to('admin/employees') }}" >All employees</a></li>
							<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees') }}" >employees </a></li>
							<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/bidders') }}" >Buisness Developers </a></li>
							<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees/developers') }}" >Developers </a></li>
							<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees/designers') }}" >Designers </a></li>
							<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees/seo') }}" >Seo </a></li>
							<li ><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees/writers') }}" >Writers </a></li>
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
                    {!! Form::open(array('url' => array('admin/employees/addnew'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                    <input type="hidden" name="id" value="{{ isset($employees->id) ? $employees->id : null }}">
                    <!--                *****************************************************************************************************-->
                    <div class="row" >
                        
                        
                        <br>
                            <h3 class="page-title">Basic Information
                            </h3>
                            <hr/>
                            <div class="clearfix">
                            </div>
							
									<div class="form-group">
                                            <label class="control-label col-md-2">
                                                Designation<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                
                                               <select name="designation"  class="form-control " >
											   <option <?php if(isset($employees->usertype)){if($employees->usertype=='Manager'){ echo 'selected'; }}?> >Manager</option>
											   <option <?php if(isset($employees->usertype)){if($employees->usertype=='Bidder'){ echo 'selected'; }}?> >Bidder</option>
											   <option <?php if(isset($employees->usertype)){if($employees->usertype=='Developer'){ echo 'selected'; }}?>  >Developer</option>
											   <option <?php if(isset($employees->usertype)){if($employees->usertype=='Designer'){ echo 'selected'; }}?> >Designer</option>
											   <option <?php if(isset($employees->usertype)){if($employees->usertype=='Seo'){ echo 'selected'; }}?>>Seo</option>
											   <option <?php if(isset($employees->usertype)){if($employees->usertype=='Writer'){ echo 'selected'; }}?>>Writer</option>
                                                   
													
													
                                                </select>                                           
                                            </div>
                                        </div>
                                  
                                        <div class="form-group">
                                            <label class="control-label col-md-2">
                                                 First Name<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="first_name"  class="form-control " value="{{ isset($employees->first_name) ? $employees->first_name : null }}" type="text" required="required" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Last Name<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="last_name"  class="form-control " value="{{ isset($employees->last_name) ? $employees->last_name : null }}" type="text" required="required" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Email<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="email"  class="form-control " value="{{ isset($employees->email) ? $employees->email : null }}" type="text" required="required" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Skype<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="skype"  class="form-control " value="{{ isset($employees->skype) ? $employees->skype : null }}" type="text" required="required" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Phone No<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="phone_number"  class="form-control " value="{{ isset($employees->phone_number) ? $employees->phone_number : null }}" type="text" required="required" >
                                            </div>
                                        </div>
										@if(!isset($employees->id))
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Password<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="password"  class="form-control " value="" type="password" required="required" >
                                            </div>
                                        </div>
										@endif
                                 
                             
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