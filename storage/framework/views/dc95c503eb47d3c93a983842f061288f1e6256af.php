<?php $__env->startSection("content"); ?>


    
<!-- Page Content -->
<div class="content content-boxed">
       <h1 class="user-head">
                         <?php echo e(isset($user->id) ? 'Edit User' : 'Add User'); ?>

                            </h1>
                       <ul class="dash-btn">
                            <li class="active"><a class="<?php echo e(classActivePath('adduser')); ?>" href="<?php echo e(URL::to('admin/users/adduser')); ?>" >Add User</a></li>
                            <li><a  href="<?php echo e(URL::to('admin/users/pending')); ?>" >Pending Users</a></li>
                            <li><a  href="<?php echo e(URL::to('admin/users/approved')); ?>" >Approved Users</a></li>
                            <li><a  href="<?php echo e(URL::to('admin/users')); ?>" >All Users</a></li>
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
                    <?php echo Form::open(array('url' => array('admin/users/adduser'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                    <input type="hidden" name="id" value="<?php echo e(isset($user->id) ? $user->id : null); ?>">
                    <!--                *****************************************************************************************************-->
                    <div class="row" >
                        
                        
                        <br>
                        <div id="ContentPlaceHolder1_MainDiv" >
                            <h3 class="page-title">Basic Information
                            </h3>
                            <hr/>
                            <div class="clearfix">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="row normalfont">
                                  
                                    <div class="col-xs-12 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">
                                                 Username<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-7">
                                                <input name="username" placeholder="Username" class="form-control " value="<?php echo e(isset($user->username) ? $user->username : null); ?>" type="text" required="required" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="col-xs-12 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">
                                            First Name<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-7">
                                                <input name="first_name" placeholder="First Name" class="form-control" value="<?php echo e(isset($user->first_name) ? $user->first_name : null); ?>" type="text" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    
                                      <div class="col-xs-12 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">
                                              last Name<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-7">
                                                <input name="last_name" placeholder="last Name" class="form-control" value="<?php echo e(isset($user->last_name) ? $user->last_name : null); ?>" type="text" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">
                                                DOB<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-7">
                                                <input name="dob"  placeholder="DD/MM/YY" class="form-control date-picker" value="<?php echo e(isset($user->txtDob) ? $user->txtDob : null); ?>" type="text" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">
                                                Sex</label>
                                            <div class="col-md-7">
                                                
                                               <select name="ddlSex"  class="form-control " >
                                                    <option <?php if(isset($user->gender)){if($user->gender=='Male'){ echo 'selected'; }}?>>Male</option>
                                                    <option <?php if(isset($user->gender)){if($user->gender=='Female'){ echo 'selected'; }}?>>Female</option>
                                                </select>                                           
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="col-xs-12 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">
                                                Email Id<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-7">
                                                <input name="email" placeholder="Email" class="form-control" value="<?php echo e(isset($user->email) ? $user->email : null); ?>" type="email">
                                            </div>
                                        </div>
                                    </div>
									
									 <?php if(isset($user->id)): ?>
										 
									   <div class="col-xs-12 col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <label class="control-label ">
                                       Profile Image</label>
                                    <input name="fileUpload1"  accept="image/x-png,image/jpeg,image/jpg,image/bmp"  style="width:200px;" type="file"  >
                                        <?php if(isset($user->fileUpload1)): ?>
                                        <img src="<?php echo e(URL::to($user->fileUpload1)); ?>" width="40" alt="Avatar">
                                        <?php else: ?>
                                        <img src="<?php echo e(URL::asset('admin_assets/img/avatars/avatar10.jpg')); ?>" alt="Avatar"  width="40"/>
                                        <?php endif; ?>
                                </div>
                            </div>
                            
                            <?php endif; ?>
									 
									<div class="col-xs-12 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">
                                              Password</label>
                                            <div class="col-md-7">
                                                <input name="password" placeholder="password" class="form-control" value="" type="password" >
                                            </div>
                                        </div>
                                    </div>
                                   
                                 
                             
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
<script>
  $( function() {
    $( ".date-picker" ).datepicker();
  } );
  </script>
  <script>
  
   function fecth_cities(key)
   {
       var key=key.value;
    $.get('/admin/users/fecth_cities',{state_id: key}, function (data){
     
    $("#appendcity").html('');
    $("#appendcity").html(data);
       
    });
   }
   
</script>
<script>
function checkusername(key)
{
    if(key.length>=6){

     $.get('/users/check_username',{username: key}, function (data){
      //alert(data);
     $('.msg').html('');
     $('.msgg').html('');
     if(data=='ok'){
     $('.msgg').html('Congrats Username available for you');
     $('.msg').addClass('hidden');
     $('.msgg').removeClass('hidden');
     $(".submitwait").prop("disabled", false);
     
      }
      if(data=='notok'){
     $('.msg').html('Username does not available please re-enter username');
     $('.msgg').addClass('hidden');
     $('.msg').removeClass('hidden');
     $(".submitwait").prop("disabled", true);
      }
    });
    }
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>