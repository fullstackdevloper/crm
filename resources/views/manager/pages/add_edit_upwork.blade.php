@extends("manager.app")

@section("content")


    
<!-- Page Content -->
<div class="content content-boxed">
       <h1 class="user-head">
                         {{ isset($upwork->id) ? 'Edit Upwork ID' : 'Add Upwork ID' }}
                            </h1>
                        <ul class="dash-btn">
                           
                            <li class="active"><a  href="{{ URL::to('manager/upwork/addnew') }}" >Add New ID</a></li>
                          
                            <li ><a class="{{classActivePath('adduser')}}" href="{{ URL::to('manager/upworks') }}" >All Upwork ID</a></li>
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
                    {!! Form::open(array('url' => array('manager/upwork/addnew'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                    <input type="hidden" name="id" value="{{ isset($upwork->id) ? $upwork->id : null }}">
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
                                                 Upwork ID<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="upwork_id" placeholder="upwork id" class="form-control " value="{{ isset($upwork->upwork_id) ? $upwork->upwork_id : null }}" type="text" required="required" >
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