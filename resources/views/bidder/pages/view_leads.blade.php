@extends("bidder.app")

@section("content")

		 
				 <!-- Page Content -->
                <div class="content">
                      
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header">                            
                        </div>
                        <div class="block-content">
                            @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ Session::get('flash_message') }}
                                </div>
                            @endif
							<table class="table table-bordered table-striped">
							{!! Form::open(array('url' => array('bidder/leads'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                                <tr>
                                    <td>
                                        <select class="form-control" name='upworkid'>
                                             <option value="">--Select Upwork Id--</option>
                                            @foreach(\App\Upwork::where('status',1)->get() as $upwork)
                                              <option value="{{$upwork->id}}" <?php if(isset($upwork_id)){if($upwork_id==$upwork->id){ echo 'selected'; }}?>>{{$upwork->upwork_id}}</value>
                                              @endforeach



                                        </select>
                                    </td>
                                     
                                    <td>
                                        <select class="form-control" name='jobtype'>
                                             <option value="">--Select Job Type--</option>
                                            <option value="Fixed" <?php if(isset($jobtype)){if($jobtype=='Fixed'){ echo 'selected'; }}?>>Fixed</option>
                                            <option value="Hourly" <?php if(isset($jobtype)){if($jobtype=='Hourly'){ echo 'selected'; }}?> >Hourly</option>

                                        </select>
                                    </td>
									<td>


                                        <input type='text' name='job_link' class="form-control" id='job_link' placeholder='Enter Upwork Job Link' value="{{ isset($job_link) ? $job_link : null }}">
                                    </td>
                                    </tr>
									<tr>
									<td>


                                        <input type='text' data-date-format="yyyy-mm-dd" name='datefrom' class="form-control" id='datefrom' placeholder='Date From' value="{{ isset($datefromfilter) ? $datefromfilter : null }}">
                                    </td>
									<td>
                                        <input type='text' name='dateto' data-date-format="yyyy-mm-dd" class="form-control" id='dateto' placeholder='Date to' value="{{ isset($datetofilter) ? $datetofilter : null }}">
                                    </td>
                                    <!--<td>
                                        <input type='text' class="form-control" id='upbm' placeholder='Enter UPBM Date'>
                                    </td>-->
                                    <td><input type='submit' class="btn btn-primary" name="search_upbm" value="Search"> &nbsp &nbsp <input type='button' onclick="clear_filters();" class="btn btn-primary" name="clear_filter" value="Clear All"></td>

                                </tr>
								  {!! Form::close() !!} 
                            </table> 
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped users-dataTable-full">
                                <thead>
                                    <tr>
										<th>Sr No</th>
                                        <th>BDE Name </th>
                                        <th>Upwork ID </th>
                                        <th>Upwork Job Link </th>
                                        <th>Job Type </th>
                                        <th>Status </th>
                                        <th>clients ratings </th>
                                        <th>UPBM Date </th>
						           
                                        
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($allUser as $i => $leads)
                                    <tr>
									<td>{{ $i+1}}</td>
                                        <td>{{ username_by_id($leads->created_by) }}</td>
                                        <td>{{ upworkname_by_id($leads->upwork_id) }} </td>
                                        <td>{{ $leads->job_link }} </td>
                                        <td>{{ $leads->job_type }} </td>
                                        <td>{{ $leads->lead_status }} </td>
                                       <td>{{ $leads->clientrating }} </td>
										 
                                         <td>{{ $leads->created_at }} </td>
                                                               
                                        <td class="text-center">
                                            
                                         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal{{$leads->id}}"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </td>
                                        
                                    </tr>
									
									

<!-- Modal -->
<div id="myModal{{$leads->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Leads Details</h4>
      </div>
      <div class="modal-body">
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 BDE Name </label>
			<div class="col-md-7">
			   {{ username_by_id($leads->created_by) }}
			</div>
			</div>
			</div>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Upwork Id</label>
			<div class="col-md-7">
			   {{ upworkname_by_id($leads->upwork_id) }}
			</div>
			</div>
			</div>
			<hr>
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Job link  </label>
			<div class="col-md-7">
			   <span style="word-break: break-all;">{{ $leads->job_link }} </span> 
			</div>
			</div>
			</div>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Job Type  </label>
			<div class="col-md-7">
			   {{ $leads->job_type }}
			</div>
			</div>
			</div>
			<hr>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Lead status  </label>
			<div class="col-md-7">
			   {{ $leads->lead_status }} 
			</div>
			</div>
			</div>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Source  </label>
			<div class="col-md-7">
			   {{ $leads->source }}
			</div>
			</div>
			</div>
			<hr>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Assigned  </label>
			<div class="col-md-7">
			   {{ $leads->assigned }} 
			</div>
			</div>
			</div>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Skype  </label>
			<div class="col-md-7">
			   {{ $leads->skype }}
			</div>
			</div>
			</div>
			<hr>
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Name  </label>
			<div class="col-md-7">
			   {{ $leads->name }} 
			</div>
			</div>
			</div>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Address  </label>
			<div class="col-md-7">
			   {{ $leads->address }}
			</div>
			</div>
			</div>
			<hr>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Website  </label>
			<div class="col-md-7">
			   {{ $leads->website }} 
			</div>
			</div>
			</div>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Position  </label>
			<div class="col-md-7">
			   {{ $leads->position }}
			</div>
			</div>
			</div>
			<hr>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Email  </label>
			<div class="col-md-7">
			   {{ $leads->email }} 
			</div>
			</div>
			</div>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 State  </label>
			<div class="col-md-7">
			   {{ $leads->state }}
			</div>
			</div>
			</div>
			<hr>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Country  </label>
			<div class="col-md-7">
			   {{ $leads->country }} 
			</div>
			</div>
			</div>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Phone  </label>
			<div class="col-md-7">
			   {{ $leads->phone }}
			</div>
			</div>
			</div>
			<hr>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 Zipcode  </label>
			<div class="col-md-7">
			   {{ $leads->zipcode }} 
			</div>
			</div>
			</div>
			
			<div class="col-sm-6 col-lg-6" >
			<div class="form-group">
			<label class="control-label col-md-5">
				 company  </label>
			<div class="col-md-7">
			   {{ $leads->company }}
			</div>
			</div>
			</div>
			<hr>
			<div class="col-sm-12 col-lg-12" >
			<div class="form-group">
			<label class="control-label col-md-2">
				 Description  </label>
			<div class="col-md-10">
			   {{ $leads->description }}
			</div>
			</div>
			</div>
			
			
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                                   @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->

                    
                </div>
                <!-- END Page Content -->
				
				
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>




<script>

$( function() {
    $( "#datefrom" ).datepicker();
  } );
  $( function() {
    $( "#dateto" ).datepicker();
  } );
</script>
<script>
function clear_filters()
{
$('.form-control').val('');
}
</script>

@endsection