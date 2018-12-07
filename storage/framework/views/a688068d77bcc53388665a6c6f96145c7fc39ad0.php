<?php $__env->startSection("content"); ?>

		 
				 <!-- Page Content -->
                <div class="content">
                       <h1 class="user-head">
                               Upbms
                            </h1>
                      <ul class="dash-btn">
                           
                            <li><a class="<?php echo e(classActivePath('adduser')); ?>" href="<?php echo e(URL::to('bidder/upbms/addnew')); ?>" >Add New </a></li>
                          
                            <li class="active"><a  href="<?php echo e(URL::to('bidder/upbms')); ?>" >All upbms</a></li>
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
                                        <th>Team </th>
                                        <th>Upwork Job Link </th>
                                        <th>Job Type </th>
                                        <th>Status </th>
                                        <th>UPBM Date </th>
						           
                                        
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php foreach($allUser as $i => $upbms): ?>
                                    <tr>
									<td><?php echo e($i+1); ?></td>
                                        <td><?php echo e(username_by_id($upbms->created_by)); ?></td>
                                        <td><?php echo e(upworkname_by_id($upbms->upwork_id)); ?> </td>
                                        <td><?php echo e($upbms->job_link); ?> </td>
                                        <td><?php echo e($upbms->team); ?> </td>
                                        <td><?php echo e($upbms->job_type); ?> </td>
                                       
										<td class="font-w600"> 
                                            <?php if($upbms->status=='Bid Placed'): ?>
                                            <a href="<?php echo e(URL::to('bidder/upbms/status/'.$upbms->id.'/Lead')); ?>" data-toggle="tooltip" title="Lead"  class="text-danger">Bid Placed </a>
                                            <?php else: ?>
                                            <a href="<?php echo e(URL::to('bidder/upbms/status/'.$upbms->id.'/Bid Placed')); ?>" data-toggle="tooltip" title="Bid Placed" class="text-success">Lead</a>
                                            <?php endif; ?>
                                        </td> 
                                         <td><?php echo e($upbms->created_at); ?> </td>
                                                               
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="<?php echo e(url('bidder/upbms/addnew/'.$upbms->id)); ?>" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="<?php echo e(url('bidder/upbms/delete/'.$upbms->id)); ?>" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
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
<?php echo $__env->make("bidder.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>