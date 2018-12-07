@extends("manager.app")

@section("content")

 <!-- Page Header -->
                <div class="content bg-image" style="background-image: url('{{ URL::asset('manager_assets/img/photos/bg.jpg') }}');">
                    <div class="push-50-t push-15 clearfix">
                        <div class="push-15-r pull-left animated fadeIn">
                            
                            @if(Auth::user()->fileUpload1)
                                 
                                    <img src="{{URL::to(Auth::user()->fileUpload1)}}" alt="Avatar" class="img-avatar img-avatar-thumb">
                            
                            @else
                                
                            <img src="{{ URL::asset('manager_assets/img/avatars/avatar10.jpg') }}" alt="Avatar"  class="img-avatar img-avatar-thumb"/>
                            
                            @endif
                        </div>
                        <h1 class="h2 text-white push-5-t animated zoomIn">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
                        <h2 class="h5 text-white-op animated zoomIn">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}({{ Auth::user()->usertype }})</h2>
                    </div>
                </div>
                <!-- END Page Header -->

                

                <!-- Page Content -->
                <div class="content content-boxed">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                             <!-- Block Tabs Alternative Style -->
                            <div class="block">
                                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                                    <li class="active">
                                        <a href="#btabs-alt-static-profile">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#btabs-alt-static-password">Password</a>
                                    </li>
                                     
                                </ul>
                                <div class="block-content tab-content">
 

                                    <div class="col-lg-8 tab-pane active" id="btabs-alt-static-profile">

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
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            {{ Session::get('flash_message') }}
                                        </div>
                                    @endif

                                        {!! Form::open(array('url' => 'manager/profile','class'=>'form-horizontal padding-15','name'=>'account_form','id'=>'account_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                                        <div class="form-group">
                                            <label for="avatar" class="col-sm-3 control-label">Profile Picture</label>
                                            <div class="col-sm-9">
                                                <div class="media">
                                                    <div class="media-left">
                                                        @if(Auth::user()->fileUpload1)
                                                         
                                                            <img src="{{URL::to(Auth::user()->fileUpload1)}}" width="80" alt="person">
                                                        
                                                        @else
                                                        
                                                            <img src="{{ URL::asset('manager_assets/images/guy.jpg') }}" alt="person" class="img-circle" width="80"/>
                                                    
                                                        @endif
                                                         
                                                                                        
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <input type="file" name="user_icon" class="filestyle">
                                                        <small class="text-muted bold">Size 200x200px</small>
                                                    </div>
                                                </div>
                            
                                            </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="first_name" value="{{ Auth::user()->first_name }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="last_name" value="{{ Auth::user()->last_name }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Mobile</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="mobile" value="{{ isset(Auth::user()->phone_number) ? Auth::user()->phone_number : null }}" class="form-control">
                                            </div>
                                        </div>
                                       
                                        
                                         <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Address</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea name="address" cols="30" rows="5" class="form-control">{{ isset(Auth::user()->address) ? Auth::user()->address : null }}</textarea>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">skype </label>
                                            <div class="col-sm-9">
                                                <input type="text" name="skype" value="{{ isset(Auth::user()->skype) ? Auth::user()->skype : null }}" class="form-control">
                                            </div>
                                        </div>
                                        
                                        
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-md-offset-3 col-sm-9 ">
                                                <button type="submit" class="btn btn-primary">Save Changes <i class="md md-lock-open"></i></button>
                                                 
                                            </div>
                                        </div>

                                    {!! Form::close() !!}
                                    </div>
                                    <div class="col-lg-8 tab-pane" id="btabs-alt-static-password">
                                       {!! Form::open(array('url' => 'manager/profile_pass','class'=>'form-horizontal padding-15','name'=>'pass_form','id'=>'pass_form','role'=>'form')) !!}
                
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">New Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" name="password" value="" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Confirm Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" name="password_confirmation" value="" class="form-control" value="">
                                            </div>
                                        </div>
                                         
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-md-offset-3 col-sm-9 ">
                                                <button type="submit" class="btn btn-primary">Save Changes <i class="md md-lock-open"></i></button>
                                            </div>
                                        </div>

                                    {!! Form::close() !!} 
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- END Block Tabs Alternative Style -->
                        </div>
                        
                    </div>
                </div>
                <!-- END Page Content -->
@endsection