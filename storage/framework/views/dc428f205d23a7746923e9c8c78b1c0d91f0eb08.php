<?php $__env->startSection("content"); ?>

		 
				 <!-- Page Content -->
                <div class="content">
                       <h1 class="user-head">
                               Upwork
                            </h1>
                      <ul class="dash-btn">
                           
                            <li><a class="<?php echo e(classActivePath('adduser')); ?>" href="<?php echo e(URL::to('manager/upwork/addnew')); ?>" >Add New ID</a></li>
                          
                            <li class="active"><a  href="<?php echo e(URL::to('manager/upworks')); ?>" >All Upwork ID</a></li>
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
                                        <th>Upwork Id </th>
                                        <th>Status </th>
						           
						                <th>created By</th>
                                        
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php foreach($allUpwork as $i => $Upwork): ?>
                                    <tr>
									<td><?php echo e($i+1); ?></td>
                                        <td><?php echo e($Upwork->upwork_id); ?></td>
										<td class="font-w600"> 
                                            <?php if($Upwork->status==1): ?>
                                            <a href="<?php echo e(URL::to('manager/upwork/status/'.$Upwork->id.'/0')); ?>" data-toggle="tooltip" title="de-activate"  class="text-success">Active </a>
                                            <?php else: ?>
                                            <a href="<?php echo e(URL::to('manager/upwork/status/'.$Upwork->id.'/1')); ?>" data-toggle="tooltip" title="active" class="text-danger">Pending</a>
                                            <?php endif; ?>
                                        </td> 
                                        <td><?php echo e(username_by_id($Upwork->created_by)); ?></td>
                                        
                                                               
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="<?php echo e(url('manager/upwork/addnew/'.$Upwork->id)); ?>" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>

                                                 <a href="<?php echo e(url('manager/upwork/delete/'.$Upwork->id)); ?>" class="btn btn-xs btn-default"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>
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
<?php echo $__env->make("manager.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>