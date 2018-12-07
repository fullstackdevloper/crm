@extends("admin.admin_app")

@section("content")

		 
				 <!-- Page Content -->
                <div class="content">
                       <h1 class="user-head">
                               Managers
                            </h1>
                      <ul class="dash-btn">
                           
                            <li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/managers/addnew') }}" >Add New </a></li>
                          
                            <li class="active"><a  href="{{ URL::to('admin/managers') }}" >All managers</a></li>
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
                                        <th>Name </th>
                                        <th>Email </th>
                                        <th>Team </th>
                                        <th>Skype </th>
                                        <th>Phone No </th>
                                        <th>Created By </th>
                                        <th>Status </th>
						           
                                        
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($allUser as $i => $managers)
                                    <tr>
									<td>{{ $i+1}}</td>
                                        <td>{{ $managers->first_name }} {{ $managers->last_name }}</td>
                                        <td>{{ $managers->email }} </td>
                                        <td>{{ $managers->userrole }} </td>
                                        <td>{{ $managers->skype }} </td>
                                        <td>{{ $managers->phone_number }} </td>
                                        <td>{{ username_by_id($managers->created_by) }} </td>
										<td class="font-w600"> 
                                            @if($managers->status==1)
                                            <a href="{{URL::to('admin/managers/status/'.$managers->id.'/0')}}" data-toggle="tooltip" title="de-activate"  class="text-success">Active </a>
                                            @else
                                            <a href="{{URL::to('admin/managers/status/'.$managers->id.'/1')}}" data-toggle="tooltip" title="active" class="text-danger">Pending</a>
                                            @endif
                                        </td> 
                                        
                                                               
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/managers/addnew/'.$managers->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="{{ url('admin/managers/delete/'.$managers->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
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