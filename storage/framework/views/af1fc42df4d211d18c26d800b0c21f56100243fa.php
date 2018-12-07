<?php $__env->startSection("content"); ?>


    
<!-- Page Content -->
<div class="content content-boxed">
       <h1 class="user-head">
                         <?php echo e(isset($leads->id) ? 'Edit Lead' : 'Add Lead'); ?>

                            </h1>
                        <ul class="dash-btn">
                           
                            <li class="active"><a  href="<?php echo e(URL::to('manager/leads/addnew')); ?>" >Add New</a></li>
                          
                            <li ><a class="<?php echo e(classActivePath('adduser')); ?>" href="<?php echo e(URL::to('manager/leads')); ?>" >All leads</a></li>
                            </ul>
    <div class="row" >
        <div class="col-sm-12 col-lg-12" >
		 <div class="block">
                                <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                                   <?php if(isset($leads->id)): ?>
                                     <li role="presentation" class="active">
                                        <a href="#edit_lead" aria-controls="edit_lead" role="tab" data-toggle="tab">Edit Lead</a>
                                    </li>
									 <li role="presentation" class="">
                                        <a href="#add_note" aria-controls="add_note" role="tab" data-toggle="tab">Add Note</a>
                                    </li>
								 <?php endif; ?>
									 </ul>
                <div class="block-content tab-content"> 
                    <div class="col-lg-12 tab-pane active" id="edit_lead">
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
                    <?php echo Form::open(array('url' => array('manager/leads/addnew'),'class'=>'form-horizontal padding-15','name'=>'user_form','id'=>'user_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                    <input type="hidden" name="id" value="<?php echo e(isset($leads->id) ? $leads->id : null); ?>">
                    <!--                *****************************************************************************************************-->
                    <div class="row" >
                        
                        
                        <br>
                            
                            <div class="clearfix">
                            </div>
								
								<div class="col-sm-6 col-lg-6" >
										 <div class="form-group">
                                            <label class="control-label col-md-3">
                                                Status<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-9">
                                                
                                               <select name="lead_status"  class="form-control " >
                                                    <option <?php if(isset($leads->lead_status)){if($leads->lead_status=='New'){ echo 'selected'; }}?>>New</option>
													<option <?php if(isset($leads->lead_status)){if($leads->lead_status=='Contacted'){ echo 'selected'; }}?>>Contacted</option>
													<option <?php if(isset($leads->lead_status)){if($leads->lead_status=='Quote Sent'){ echo 'selected'; }}?>>Quote Sent</option>
													<option <?php if(isset($leads->lead_status)){if($leads->lead_status=='Customer'){ echo 'selected'; }}?>>Customer </option>
													
                                                </select>                                           
                                            </div>
                                        </div>
                                        </div>
										<div class="col-sm-6 col-lg-6" >
										 <div class="form-group">
                                            <label class="control-label col-md-3">
                                                Source<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-9">
                                                
                                               <select name="source"  class="form-control " >
                                                    <option <?php if(isset($leads->source)){if($leads->source=='Upwork'){ echo 'selected'; }}?>>Upwork </option>
													<option <?php if(isset($leads->source)){if($leads->source=='LinkedIn '){ echo 'selected'; }}?>>LinkedIn </option>
													<option <?php if(isset($leads->source)){if($leads->source=='Website '){ echo 'selected'; }}?>>Website </option>
													<option <?php if(isset($leads->source)){if($leads->source=='Local Referral '){ echo 'selected'; }}?>>Local Referral </option>
													
                                                </select>                                           
                                            </div>
                                        </div>
                                        </div>
										<div class="col-sm-6 col-lg-6" >
                                        <div class="form-group">
                                            <label class="control-label col-md-3">
                                                Assigned<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-9">
                                                
                                               <select name="assigned"  class="form-control " >
                                                   
													<?php foreach(\App\User::where('status',1)->where('usertype','manager')->orwhere('usertype','Bidder')->get() as $assigned): ?>
														<option value="<?php echo e($assigned->id); ?>" <?php if(isset($leads->upwork_id)){if($leads->upwork_id==$assigned->id){ echo 'selected'; }}?>><?php echo e($assigned->first_name); ?> <?php echo e($assigned->last_name); ?>(<?php echo e($assigned->usertype); ?>)</value>
													<?php endforeach; ?>
													
                                                </select>                                           
                                            </div>
                                        </div>
                                        </div>
										<div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 Skype</label>
                                            <div class="col-md-9">
                                                <input name="skype"  class="form-control " value="<?php echo e(isset($leads->skype) ? $leads->skype : null); ?>" type="text" >
                                            </div>
                                        </div>
                                        </div>
                                  <div class="col-sm-6 col-lg-6" >
                                        <div class="form-group">
                                            <label class="control-label col-md-3">
                                                Upwork ID<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-9">
                                                
                                               <select name="upwork_id"  class="form-control " >
											   <option>--select--</option>
                                                   
													<?php foreach(\App\Upwork::where('status',1)->get() as $upwork): ?>
														<option value="<?php echo e($upwork->id); ?>" <?php if(isset($leads->upwork_id)){if($leads->upwork_id==$upwork->id){ echo 'selected'; }}?>><?php echo e($upwork->upwork_id); ?></value>
													<?php endforeach; ?>
													
                                                </select>                                           
                                            </div>
                                        </div>
                                        </div>
										
										<div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 Upwork Job Link<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-9">
                                                <input name="job_link"  class="form-control " value="<?php echo e(isset($leads->job_link) ? $leads->job_link : null); ?>" type="text" required="required" >
                                            </div>
                                        </div>
                                        </div>
										
										
										<div class="col-sm-6 col-lg-6" >
										 <div class="form-group">
                                            <label class="control-label col-md-3">
                                               Job Type<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-9">
                                                
                                               <select name="job_type"  class="form-control " >
                                                    <option <?php if(isset($leads->job_type)){if($leads->job_type=='Fixed'){ echo 'selected'; }}?>>Fixed</option>
													<option <?php if(isset($leads->job_type)){if($leads->job_type=='Hourly'){ echo 'selected'; }}?>>Hourly</option>
                                                </select>                                           
                                            </div>
                                        </div>
                                        </div>
										<div class="col-sm-6 col-lg-6" >
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                               Team<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-9">
                                                
                                               <select name="team"  class="form-control " >
                                                    <option <?php if(isset($leads->team)){if($leads->team=='Android'){ echo 'selected'; }}?>>Android</option>
													<option <?php if(isset($leads->team)){if($leads->team=='Content Writing'){ echo 'selected'; }}?>>Content Writing</option>
													<option <?php if(isset($leads->team)){if($leads->team=='Marketing'){ echo 'selected'; }}?>>Marketing</option>
													<option <?php if(isset($leads->team)){if($leads->team=='PHP'){ echo 'selected'; }}?>>PHP</option>
                                                </select>                                           
                                            </div>
                                        </div>
                                        </div>
										<div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 Name<span class="error" style="color: red;">*</span></label>
                                            <div class="col-md-9">
                                                <input name="name"  class="form-control " value="<?php echo e(isset($leads->name) ? $leads->name : null); ?>" type="text" required="required" >
                                            </div>
                                        </div>
                                        </div>
                                   <div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Address</label>
                                            <div class="col-sm-9">
                                                
                                                <textarea name="address" cols="30"  class="form-control"><?php echo e(isset($leads->address) ? $leads->address : null); ?></textarea>
                                            </div>
                                        </div>
                                        </div>
                                   
                                 <div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 Position</label>
                                            <div class="col-md-9">
                                                <input name="position"  class="form-control " value="<?php echo e(isset($leads->position) ? $leads->position : null); ?>" type="text"  >
                                            </div>
                                        </div>
                                        </div>
                                   
                                  <div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 Email Address</label>
                                            <div class="col-md-9">
                                                <input name="email"  class="form-control " value="<?php echo e(isset($leads->email) ? $leads->email: null); ?>" type="text"  >
                                            </div>
                                        </div>
                                        </div>
                                   
                                   <div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 State</label>
                                            <div class="col-md-9">
                                                <input name="state"  class="form-control " value="<?php echo e(isset($leads->state) ? $leads->state: null); ?>" type="text"  >
                                            </div>
                                        </div>
                                        </div>
                                   <div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 Website</label>
                                            <div class="col-md-9">
                                                <input name="website"  class="form-control " value="<?php echo e(isset($leads->website) ? $leads->website: null); ?>" type="text"  >
                                            </div>
                                        </div>
                                        </div>
                                    <div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 Country</label>
                                            <div class="col-md-9">
                                                <select name="country"  class="form-control " >
                                                    <option <?php if(isset($leads->country)){if($leads->country=='USA'){ echo 'selected'; }}?>>USA</option>
													
													<option <?php if(isset($leads->country)){if($leads->country=='UK'){ echo 'selected'; }}?>>UK</option>
													<option <?php if(isset($leads->country)){if($leads->country=='AUS'){ echo 'selected'; }}?>>AUS</option>
													<option <?php if(isset($leads->country)){if($leads->country=='IND'){ echo 'selected'; }}?>>IND</option>
													
													
													
                                                </select>  
                                            </div>
                                        </div>
                                        </div>
                                   
                                 <div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 Phone</label>
                                            <div class="col-md-9">
                                                <input name="phone"  class="form-control " value="<?php echo e(isset($leads->phone) ? $leads->phone: null); ?>" type="text"  >
                                            </div>
                                        </div>
                                        </div>
                                   
                                   <div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 Zip Code</label>
                                            <div class="col-md-9">
                                                <input name="zipcode"  class="form-control " value="<?php echo e(isset($leads->zipcode) ? $leads->zipcode: null); ?>" type="text" >
                                            </div>
                                        </div>
                                        </div>
										
                                     <div class="col-sm-6 col-lg-6" >
										
										<div class="form-group">
                                            <label class="control-label col-md-3">
                                                 Company</label>
                                            <div class="col-md-9">
                                                <input name="company"  class="form-control " value="<?php echo e(isset($leads->company) ? $leads->company: null); ?>" type="text"  >
                                            </div>
                                        </div>
                                        </div>
                                   
                                   <div class="col-sm-12 col-lg-12" >
										
										
										
										<div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-10">
                                                
                                                <textarea name="description" cols="30" rows="3"  class="form-control"><?php echo e(isset($leads->description) ? $leads->description : null); ?></textarea>
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
                    <!--                *****************************************************************************************************-->
                    <?php echo Form::close(); ?> 
                </div>
				<div class="col-lg-12 tab-pane " id="add_note">
				<?php echo Form::open(array('url' => array('manager/leads/addnote'),'class'=>'form-horizontal padding-15','name'=>'for_note','id'=>'for_note','role'=>'form','enctype' => 'multipart/form-data')); ?>

				
				 <div class="col-sm-12 col-lg-12" >
										
										
								 <input type="hidden" name="lead_id" value="<?php echo e(isset($leads->id) ? $leads->id : null); ?>">

										<div class="form-group">
                                            <label for="" class="col-sm-1 control-label">Note</label>
                                            <div class="col-sm-8">
                                                
                                                <textarea name="notes" cols="30" rows="5"  class="form-control"></textarea>
                                            </div>
                                        </div>
                                        </div>
										
										 <div class="col-xs-12 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">
                                            </label>
                                            <div class="col-md-7">
                                                <input  value="Add Note" type="submit" class="btn btn-primary submitwait">
                                            </div>
                                        </div>
                                    </div>
				<?php echo Form::close(); ?> 
				<?php if(isset($leads->id)): ?>
				<?php foreach(\App\Note::where('lead_id',$leads->id)->orderBy('id','desc')->get() as $note): ?>
				<div class="col-sm-10 col-lg-10" >
					<p>Note: <?php echo e($note->notes); ?></p>
					<p>Author: <?php echo e(username_by_id($note->created_by)); ?></p>
				<div class="btn-group">
               <a href="<?php echo e(url('manager/notes/delete/'.$note->id)); ?>" class=""  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')">Remove</a>
                 </div>
                </div>
				<?php endforeach; ?>
				<?php endif; ?>
				
				
                </div>
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
<?php echo $__env->make("manager.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>