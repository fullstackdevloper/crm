<?php $__env->startSection("content"); ?>
 
		 
				 <!-- Page Content -->
                <div class="content">
                       <h1 class="user-head">
                               Customers
                            </h1>
                      <ul class="dash-btn">
                           
                        
                          
                            <li class="active"><a  href="<?php echo e(URL::to('admin/customers')); ?>" >All Customers</a></li>
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
                                     <?php foreach($allleads as $i => $leads): ?>
                                    <tr>
									<td><?php echo e($i+1); ?></td>
                                        <td><?php echo e(username_by_id($leads->created_by)); ?></td>
                                        <td><?php echo e(upworkname_by_id($leads->upwork_id)); ?> </td>
                                        <td><?php echo e($leads->job_link); ?> </td>
                                        <td><?php echo e($leads->job_type); ?> </td>
                                        <td><?php echo e($leads->lead_status); ?> </td>
                                       
										
                                         <td><?php echo e($leads->created_at); ?> </td>
                                                               
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="<?php echo e(url('admin/leads/addnew/'.$leads->id)); ?>" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="<?php echo e(url('admin/leads/delete/'.$leads->id)); ?>" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
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