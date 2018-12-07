<?php $__env->startSection("content"); ?>


    
<!-- Page Content -->
<div class="content content-boxed">
       <h1 class="user-head">
                         <?php echo e(isset($bidders->id) ? 'Edit Bidder' : 'Add Bidder'); ?>

                            </h1>
                        <ul class="dash-btn">
                           
                            <li class="active"><a  href="<?php echo e(URL::to('admin/bidders/addnew')); ?>" >Add New</a></li>
                          
                            <li ><a class="<?php echo e(classActivePath('adduser')); ?>" href="<?php echo e(URL::to('admin/bidders')); ?>" >All bidders</a></li>
                            </ul>
    <div class="row" >
        <div class="col-sm-12 col-lg-12" >
            <div class="block">
                <div class="block-content block-content-narrow"> 
                    
                    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                            <?php foreach($errors->all() as $error): ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if(Session::has('flash_message')): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <?php echo e(Session::get('flash_message')); ?>

                    </div>
                    <?php endif; ?>    
                    <p class="hidden text-danger msg" style="font-size:16px"></p><p class="hidden text-success msgg" style="font-size:16px"></p>
                    <?php echo Form::open(array('url' => array('admin/bidders/addnew'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                    <input type="hidden" name="id" value="<?php echo e(isset($bidders->id) ? $bidders->id : null); ?>">
                    <!--                *****************************************************************************************************-->
                    <div class="row" >
                        
                        
                        <br>
                            <h3 class="page-title">Basic Information
                            </h3>
                            <hr/>
                            <div class="clearfix">
                            </div>
                                  
                                        <div class="form-group">
                                            <label class="control-label col-md-2">
                                                 First Name<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="first_name"  class="form-control " value="<?php echo e(isset($bidders->first_name) ? $bidders->first_name : null); ?>" type="text" required="required" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Last Name<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="last_name"  class="form-control " value="<?php echo e(isset($bidders->last_name) ? $bidders->last_name : null); ?>" type="text" required="required" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Email<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="email"  class="form-control " value="<?php echo e(isset($bidders->email) ? $bidders->email : null); ?>" type="text" required="required" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Skype<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="skype"  class="form-control " value="<?php echo e(isset($bidders->skype) ? $bidders->skype : null); ?>" type="text" required="required" >
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Phone No<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="phone_number"  class="form-control " value="<?php echo e(isset($bidders->phone_number) ? $bidders->phone_number : null); ?>" type="text" required="required" >
                                            </div>
                                        </div>
										<?php if(!isset($bidders->id)): ?>
										<div class="form-group">
                                            <label class="control-label col-md-2">
                                                 Password<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-10">
                                                <input name="password"  class="form-control " value="" type="password" required="required" >
                                            </div>
                                        </div>
										<?php endif; ?>
                                   
                                 
                             
                                    <div class="col-xs-12 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">
                                            </label>
                                            <div class="col-md-7">
                                                <input  value="Save Changes" type="submit" class="btn btn-primary submitwait">
                                            </div>
                                        </div>
                                    </div>
                    </div>
                    <!--                *****************************************************************************************************-->
                    <?php echo Form::close(); ?> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->     
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>