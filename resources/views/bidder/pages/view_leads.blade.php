@extends("bidder.app")

@section("content")

		 
				 <!-- Page Content -->
                <div class="content">
                       <h1 class="user-head">
                               Leads
                            </h1>
                      <ul class="dash-btn">
                           
                            
                          
                            <li class="active"><a  href="{{ URL::to('bidder/leads') }}" >All leads</a></li>
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
                                     @foreach($allUser as $i => $leads)
                                    <tr>
									<td>{{ $i+1}}</td>
                                        <td>{{ username_by_id($leads->created_by) }}</td>
                                        <td>{{ upworkname_by_id($leads->upwork_id) }} </td>
                                        <td>{{ $leads->job_link }} </td>
                                        <td>{{ $leads->job_type }} </td>
                                        <td>{{ $leads->lead_status }} </td>
                                       
										 
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

@endsection