@extends("admin.admin_app")

@section("content")


                <!-- Page Content -->
                <div class="content content-boxed">
                      <h1 class="user-head">
                               Settings
                            </h1>
                       <ul class="dash-btn">
                           <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                           <li class="active"><a class="link-effect" href="{{ URL::to('admin/settings') }}">Settings</a></li>
                            </ul>
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                             <!-- Block Tabs Alternative Style -->
                            <div class="block">
                                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                                    
                                     <li role="presentation" class="active">
                                        <a href="#general_settings" aria-controls="general_settings" role="tab" data-toggle="tab">General Settings</a>
                                    </li>
									<!--
                                    <li role="presentation">
                                        <a href="#homepage_settings" aria-controls="homepage_settings" role="tab" data-toggle="tab">Home Page Settings</a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#aboutus_settings" aria-controls="aboutus_settings" role="tab" data-toggle="tab">About Page</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#contactus_settings" aria-controls="contactus_settings" role="tab" data-toggle="tab">Contact Page</a>
                                    </li>
                                    

                                    <li role="presentation">
                                        <a href="#other_Settings" aria-controls="other_Settings" role="tab" data-toggle="tab">Other Settings</a>
                                    </li>
									-->
                                     
                                </ul>
                                <div class="block-content tab-content">
 

                                    <div class="col-lg-8 tab-pane active" id="general_settings">

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

                                        {!! Form::open(array('url' => 'admin/settings','class'=>'form-horizontal padding-15','name'=>'account_form','id'=>'account_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                
                                        <div class="form-group">
                                            <label for="avatar" class="col-sm-3 control-label">Logo</label>
                                            <div class="col-sm-9">
                                                <div class="media">
                                                    <div class="media-left">
                                                        @if($settings->site_logo)
                                                         
                                                            <img src="{{ URL::asset('upload/'.$settings->site_logo) }}" width="150" alt="person">
                                                        @endif
                                                                                        
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <input type="file" name="site_logo" class="filestyle">
                                                        <small class="text-muted bold">Size 190x23px</small>
                                                    </div>
                                                </div>
                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="avatar" class="col-sm-3 control-label">Favicon</label>
                                            <div class="col-sm-9">
                                                <div class="media">
                                                    <div class="media-left">
                                                        @if($settings->site_favicon)
                                                         
                                                            <img src="{{ URL::asset('upload/'.$settings->site_favicon) }}" alt="person">
                                                        @endif
                                                                                        
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <input type="file" name="site_favicon" class="filestyle">
                                                        <small class="text-muted bold">Size 16x16px</small>
                                                    </div>
                                                </div>
                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Site Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control" value="">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Site Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="site_email" value="{{ $settings->site_email }}" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Site Description</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" name="site_description" class="form-control" rows="5" placeholder="A few words about site">{{ $settings->site_description }}</textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Google Map API</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="google_map_api" value="{{ $settings->google_map_api }}" class="form-control" value="">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Facebook URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="facebook_url" value="{{ $settings->facebook_url }}" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Twitter URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="twitter_url" value="{{ $settings->twitter_url }}" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Google+ URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="gplus_url" value="{{ $settings->gplus_url }}" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">LinkedIn URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="linkedin_url" value="{{ $settings->linkedin_url }}" class="form-control" value="">
                                            </div>
                                        </div>
										
										  <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Steemit URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="steemit_url" value="{{ $settings->steemit_link }}" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Telegram URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="telegram_url" value="{{ $settings->telegram_url }}" class="form-control" value="">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Copyright Text</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" name="site_copyright" class="form-control" rows="5">{{ $settings->site_copyright }}</textarea>
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
									<!--
                                      <div class="col-lg-8 tab-pane" id="homepage_settings">

                                       {!! Form::open(array('url' => 'admin/homepage_settings','class'=>'form-horizontal padding-15','name'=>'layout_settings_form','id'=>'layout_settings_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                
                                        <div class="form-group">
                                            <label for="avatar" class="col-sm-3 control-label">Home Slide 1</label>
                                            <div class="col-sm-9">
                                                <div class="media">
                                                    <div class="media-left">
                                                        @if($settings->home_slide_image1)
                                                         
                                                            <img src="{{ URL::asset('upload/'.$settings->home_slide_image1) }}" alt="bg image" width="150">
                                                        @endif
                                                                                        
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <input type="file" name="home_slide_image1" class="filestyle">
                                                         <small class="text-muted bold">Size 1400x500px</small>
                                                    </div>
                                                </div>
                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="avatar" class="col-sm-3 control-label">Home Slide 2</label>
                                            <div class="col-sm-9">
                                                <div class="media">
                                                    <div class="media-left">
                                                        @if($settings->home_slide_image2)
                                                         
                                                            <img src="{{ URL::asset('upload/'.$settings->home_slide_image2) }}" alt="bg image" width="150">
                                                        @endif
                                                                                        
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <input type="file" name="home_slide_image2" class="filestyle">
                                                         <small class="text-muted bold">Size 1400x500px</small>
                                                    </div>
                                                </div>
                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="avatar" class="col-sm-3 control-label">Home Slide 3</label>
                                            <div class="col-sm-9">
                                                <div class="media">
                                                    <div class="media-left">
                                                        @if($settings->home_slide_image3)
                                                         
                                                            <img src="{{ URL::asset('upload/'.$settings->home_slide_image3) }}" alt="bg image" width="150">
                                                        @endif
                                                                                        
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <input type="file" name="home_slide_image3" class="filestyle">
                                                         <small class="text-muted bold">Size 1400x500px</small>
                                                    </div>
                                                </div>
                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Slide Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="home_slide_title" value="{{ $settings->home_slide_title }}" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Slide Text</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" name="home_slide_text" class="form-control" rows="5" placeholder="A few words">{{ $settings->home_slide_text }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="avatar" class="col-sm-3 control-label">Page Title Background</label>
                                            <div class="col-sm-9">
                                                <div class="media">
                                                    <div class="media-left">
                                                        @if($settings->page_bg_image)
                                                         
                                                            <img src="{{ URL::asset('upload/'.$settings->page_bg_image) }}" alt="bg image" width="150">
                                                        @endif
                                                                                        
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <input type="file" name="page_bg_image" class="filestyle">
                                                         <small class="text-muted bold">Size 1400x500px</small>
                                                    </div>
                                                </div>
                            
                                            </div>
                                        </div>
 
 
										<div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Total Miners</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="total_miners" value="{{ $settings->total_miners }}" class="form-control" value="">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Total Mined ($)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="total_mined_doller" value="{{ $settings->total_mined_doller }}" class="form-control" value="">
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Mining Since days</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="minings_day" value="{{ $settings->minings_day }}" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Total Payouts</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="total_payout" value="{{ $settings->total_payout }}" class="form-control" value="">
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

                                    <div class="col-lg-8 tab-pane" id="aboutus_settings">

                                              
                                            {!! Form::open(array('url' => 'admin/aboutus_settings','class'=>'form-horizontal padding-15','name'=>'pass_form','id'=>'pass_form','role'=>'form')) !!}
                
                 
                                           <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="about_title" value="{{ $settings->about_title }}" class="form-control" value="">
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">About Us</label>
                                                <div class="col-sm-9">
                                                    <textarea type="text" name="about_description" class="js-summernote" rows="5">{{ $settings->about_description }}</textarea>
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
                               
                                    
                               
                             
                                    
                                    <div class="col-lg-8 tab-pane" id="contactus_settings">

                                              
                                            {!! Form::open(array('url' => 'admin/contactus_settings','class'=>'form-horizontal padding-15','name'=>'contactus_settings_form','id'=>'contactus_settings_form','role'=>'form')) !!}
                
                 
                                           <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="contact_title" value="{{ $settings->contact_title }}" class="form-control" value="">
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                    <textarea type="text" name="contact_address" class="form-control" rows="5">{{ $settings->contact_address }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Contact Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="contact_email" value="{{ $settings->contact_email }}" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Second Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="second_email" value="{{ $settings->second_email }}" class="form-control" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Map Latitude and Longitude</label>
                                                <div class="col-sm-9">
                                                    <div class="col-sm-6">
                                                        <input type="text" name="contact_lat" value="{{ $settings->contact_lat }}" class="form-control" placeholder="Latitude">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="contact_long" value="{{ $settings->contact_long }}" class="form-control" placeholder="Longitude">
                                                    </div>
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
 

                                   
                                    
                                    
                                    <div class="col-lg-8 tab-pane" id="other_Settings">

                                              
                                            {!! Form::open(array('url' => 'admin/headfootupdate','class'=>'form-horizontal padding-15','name'=>'pass_form','id'=>'pass_form','role'=>'form')) !!}
                
                 
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Header Code</label>
                                                <div class="col-sm-9">
                                                    <textarea type="text" name="site_header_code" class="form-control" rows="5" placeholder="You may want to add some html/css/js code to header. ">{{ $settings->site_header_code }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-3 control-label">Footer Code</label>
                                                <div class="col-sm-9">
                                                    <textarea type="text" name="site_footer_code" class="form-control" rows="5" placeholder="You may want to add some html/css/js code to footer. ">{{ $settings->site_footer_code }}</textarea>
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
							-->
                                </div>
                            </div>
                            <!-- END Block Tabs Alternative Style -->
                        </div>
                        
                    </div>
                </div>
                <!-- END Page Content -->
@endsection