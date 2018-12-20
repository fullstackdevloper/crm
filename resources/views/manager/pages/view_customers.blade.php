@extends("manager.app")

@section("content")

		  
				 <!-- Page Content -->
                <div class="content">
                       <h1 class="user-head">
                               Customers
                            </h1>
                      <ul class="dash-btn">
                           
                          
                            <li class="active"><a  href="{{ URL::to('manager/customers') }}" >All Customers</a></li>
                            </ul>
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
							{!! Form::open(array('url' => array('manager/customers'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
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
                                        <select class="form-control" name='created_by'>
                                             <option value="">--Select BDE--</option>
                                            @foreach(\App\User::where('status',1)->where('usertype','bidder')->get() as $user)
                                              <option value="{{$user->id}}" <?php if(isset($created_by)){if($created_by==$user->id){ echo 'selected'; }}?>>{{ username_by_id($user->id) }}</value>
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


                                        From<input type='text' data-date-format="yyyy-mm-dd" name='datefrom' class="form-control" id='datefrom' placeholder='Date From' value="{{ isset($datefromfilter) ? $datefromfilter : null }}">
                                    </td>
									<td>
                                       To <input type='text' name='dateto' data-date-format="yyyy-mm-dd" class="form-control" id='dateto' placeholder='Date to' value="{{ isset($datetofilter) ? $datetofilter : null }}">
                                    </td>
                                    <!--<td>
                                        <input type='text' class="form-control" id='upbm' placeholder='Enter UPBM Date'>
                                    </td>-->
                                    <td><input type='submit' class="btn btn-primary" name="search_upbm" value="Search"></td>

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
                                        <th>UPBM Date </th>
						           
                                        
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($allleads as $i => $leads)
                                    <tr>
									<td>{{ $i+1}}</td>
                                        <td>{{ username_by_id($leads->created_by) }}</td>
                                        <td>{{ upworkname_by_id($leads->upwork_id) }} </td>
                                        <td>{{ $leads->job_link }} </td>
                                        <td>{{ $leads->job_type }} </td>
                                        <td>{{ $leads->lead_status }} </td>
                                       
										
                                         <td>{{ $leads->created_at }} </td>
                                                               
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('manager/leads/addnew/'.$leads->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="{{ url('manager/leads/delete/'.$leads->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
                                            </div>
                                        
                                    </td>
                                        
                                    </tr>
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
@endsection