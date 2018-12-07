<?php $__env->startSection("content"); ?>

				 <!-- Page Content -->
                <div class="content">
                      <h1 class="user-head">
                            Approved   Users
                            </h1>
                       <ul class="dash-btn">
                            
                            <li><a class="<?php echo e(classActivePath('adduser')); ?>" href="<?php echo e(URL::to('admin/users/adduser')); ?>" >Add User</a></li>
                            <li><a  href="<?php echo e(URL::to('admin/users/pending')); ?>" >Pending Users</a></li>
                            <li class="active"><a  href="<?php echo e(URL::to('admin/users/approved')); ?>" >Approved Users</a></li>
                            <li><a  href="<?php echo e(URL::to('admin/users')); ?>" >All Users</a></li>
                            </ul>
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header">                            
                        </div>
                        <div class="block-content">
                            <?php if(Session::has('flash_message')): ?>
                                <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?php echo e(Session::get('flash_message')); ?>

                                </div>
                            <?php endif; ?>
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="table table-bordered table-striped users-dataTable-full">
                                <thead>
                                    <tr>

                                       <th>Username</th>
                                        <th>Name</th>
						           
						                <th>Email</th>
                                                               
                                         <th>Gender</th>
						                <th>DOB</th> 	
                                        <th>Approval</th> 
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php foreach($allusers as $i => $users): ?>
                                    <tr>
                                       <td><?php echo e($users->username); ?></td>
                                        <td><?php echo e($users->first_name); ?> <?php echo e($users->last_name); ?></td>
                                        <td><?php echo e($users->email); ?></td>
                                        
                                        <td><?php echo e($users->gender); ?></td>
                                        <td><?php echo e($users->dob); ?></td>
                                          <td class="font-w600"> 
                                            <?php if($users->status=='approved'): ?>
                                            <a href="javascript:void(0)" data-toggle="tooltip"  class="text-success">Approved</a>
                                            <?php else: ?>
                                            <a href="<?php echo e(URL::to('admin/user/status/'.$users->id.'/approved')); ?>" data-toggle="tooltip" title="approved" class="text-danger">Pending</a>
                                            <?php endif; ?>
                                        </td>                       
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="<?php echo e(url('admin/users/adduser/'.$users->id)); ?>" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="<?php echo e(url('admin/users/delete/'.$users->id)); ?>" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
                                            </div>
                                        
                                    </td>
                                        
                                    </tr>
                                   <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->

                    
                </div>
                <!-- END Page Content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>