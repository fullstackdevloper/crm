@extends("manager.app")

@section("content")

		 
				 <!-- Page Content -->
                <div class="content">
                       <h1 class="user-head">
                               Upbms
                            </h1>
                      <ul class="dash-btn">
                           
                            <li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('manager/upbms/addnew') }}" >Add New </a></li>
                          
                            <li class="active"><a  href="{{ URL::to('manager/upbms') }}" >All upbms</a></li>
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
                                     @foreach($allUser as $i => $upbms)
                                    <tr>
									<td>{{ $i+1}}</td>
                                        <td>{{ username_by_id($upbms->created_by) }}</td>
                                        <td>{{ upworkname_by_id($upbms->upwork_id) }} </td>
                                        <td>{{ $upbms->job_link }} </td>
                                        <td>{{ $upbms->job_type }} </td>
                                       
										<td class="font-w600"> 
                                            @if($upbms->status=='Bid Placed')
                                            <a href="{{URL::to('manager/upbms/status/'.$upbms->id.'/Lead')}}" data-toggle="tooltip" title="Lead"  class="text-danger">Bid Placed </a>
                                            @else
                                            <a href="{{URL::to('manager/upbms/status/'.$upbms->id.'/Bid Placed')}}" data-toggle="tooltip" title="Bid Placed" class="text-success">Lead</a>
                                            @endif
                                        </td> 
                                         <td>{{ $upbms->created_at }} </td>
                                                               
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('manager/upbms/addnew/'.$upbms->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="{{ url('manager/upbms/delete/'.$upbms->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
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

@endsection