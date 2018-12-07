@extends("admin.admin_app")

@section("content")

		 
				 <!-- Page Content -->
                <div class="content">
                       <h1 class="user-head">
                               Writers
                            </h1>
                      <ul class="dash-btn">
                           
                            <li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees/addnew') }}" >Add New </a></li>
                          
                            <li ><a  href="{{ URL::to('admin/employees') }}" >All employees</a></li>
							<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/managers') }}" >Managers </a></li>
							<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/bidders') }}" >Buisness Developers </a></li>
							<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees/developers') }}" >Developers </a></li>
							<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees/designers') }}" >Designers </a></li>
							<li><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees/seo') }}" >Seo </a></li>
							<li class="active"><a class="{{classActivePath('adduser')}}" href="{{ URL::to('admin/employees/writers') }}" >Writers </a></li>
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
                                        <th>Designation </th>
                                        <th>Email </th>
                                        <th>Skype </th>
                                        <th>Phone No </th>
                                        <th>Created By </th>
                                        <th>Status </th>
						           
                                        
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($allUser as $i => $employees)
                                    <tr>
									<td>{{ $i+1}}</td>
                                        <td>{{ $employees->first_name }} {{ $employees->last_name }}</td>
                                        <td>{{ $employees->usertype }} </td>
                                        <td>{{ $employees->email }} </td>
                                        <td>{{ $employees->skype }} </td>
                                        <td>{{ $employees->phone_number }} </td>
                                        <td>{{ username_by_id($employees->created_by) }} </td>
										<td class="font-w600"> 
                                            @if($employees->status==1)
                                            <a href="{{URL::to('admin/employees/status/'.$employees->id.'/0')}}" data-toggle="tooltip" title="de-activate"  class="text-success">Active </a>
                                            @else
                                            <a href="{{URL::to('admin/employees/status/'.$employees->id.'/1')}}" data-toggle="tooltip" title="active" class="text-danger">Pending</a>
                                            @endif
                                        </td> 
                                        
                                                               
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/employees/addnew/'.$employees->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="{{ url('admin/employees/delete/'.$employees->id) }}" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
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