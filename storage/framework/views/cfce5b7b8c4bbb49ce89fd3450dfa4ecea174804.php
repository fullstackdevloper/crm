<?php $__env->startSection("content"); ?>
 <!-- Page Header -->
 
                <div class="content bg-image overflow-hidden" style="background-image: url('<?php echo e(URL::asset('admin_assets/img/photos/bg.jpg')); ?>');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Welcome <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></h2>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Stats -->
                <div class="content content-narrow" >
                   <div class="row">

                      
                       
                       
                        <div class="col-sm-6 col-lg-3 detail-view-part">
                            <a class="block block-link-hover1 text-center fur-cls" href="<?php echo e(URL::to('admin/dashboard')); ?>">
                                <div class="col-md-3 col-xs-3 block-content block-content-full bg-city clas-di">
                                    <i class="fa fa-cog fa-5x text-white"></i>
                                </div>
                                <div class="col-md-9 col-xs-9 block-content block-content-full block-content-mini clas-di2">
                                    Dashboard
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                       
                    </div>
                     
                </div>
                <!-- END Page Content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>