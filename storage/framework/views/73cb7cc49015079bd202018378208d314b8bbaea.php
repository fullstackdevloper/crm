 

<?php $__env->startSection('content'); ?> 
 <section class="banner_head inner_banner">
         <?php echo Form::open(array('url' => '','class'=>'','id'=>'','method' => 'post','role'=>'form')); ?>

            <div class="container">
               <div class="banner_text">
                  <h1>New Broker Application</h1>
               </div>
            </div>
            </div>
            <img  class="banner_image"src="<?php echo e(URL::asset('front/img/banner_1.jpg')); ?>">
      </section>
      <section class="sign_up_form">
      <div class="container">
      <div class="form_holder_1">
      <h2>Personal Information</h2>
      <div class="personal_form">
      <div class="col-md-6">
      
		  <?php echo e(Form::label('first_name', 'First Name *')); ?>

		
		  <?php echo e(Form::text('first_name')); ?>

      </div>
      <div class="col-md-6">
		  <?php echo e(Form::label('last_name', 'Last Name *')); ?>

		
		  <?php echo e(Form::text('last_name')); ?>

      </div>
      <div class="col-md-12">
		 
		  <?php echo e(Form::label('physical address', 'Physical Address:  *')); ?>

		
		  <?php echo e(Form::textarea('address','',array('placeholder' => 'Address Line One','rows' => 1, 'cols' => 20))); ?>

		  <?php echo e(Form::textarea('address1','',array('placeholder' => 'Address Line Two','rows' => 1, 'cols' => 20))); ?>

      </div>
	 
      <div class="col-md-4">
      
	  <?php echo e(Form::label('city', 'City*')); ?>

	  <?php $city=array('' => ' -- Select -- ',
						'1' => 'USA',
						'2' => 'INDIA',
						'3' => 'Canada');?>
	  <?php echo e(Form::select('city',$city,null, ['class' => 'form-control'])); ?>

      </div>
      <div class="col-md-4">
      <?php echo e(Form::label('state', 'State*')); ?>

	  <?php $state=array('' => ' -- Select -- ',
						'1' => 'Alabama ',
						'2' => 'Alaska',
						'3' => 'Arizona',
						'4' => 'Arkansas');?>
	  <?php echo e(Form::select('state',$state,null, ['class' => 'form-control'])); ?>

      </div>
      <div class="col-md-4">
		  <?php echo e(Form::label('contact_number', 'Contact Number *')); ?>

		
		  <?php echo e(Form::text('contact_number','', array('placeholder' => 'Contact Number'))); ?>

      </div>
	  <div class="col-md-12">
		  <?php echo e(Form::label('fax_number', 'Fax Number *')); ?>

		
		  <?php echo e(Form::text('fax_number','', array('placeholder' => 'Fax Number'))); ?>

      </div>
     
      <div class="row">
	   
      <div class="col-md-4 col-xs-4">
	  <?php echo e(Form::label('doingBusinessAs', ' Business As')); ?>

       <?php echo e(Form::text('doingBusinessAs','', array('placeholder' => 'BusinessAs'))); ?>

      </div>
	 
      <div class="col-md-4 col-xs-4 ">
	   <?php echo e(Form::label('federal_ID', ' Federal ID')); ?>

      <?php echo e(Form::text('federal_ID','', array('placeholder' => 'Federal ID'))); ?>

      </div>
      <div class="col-md-4 col-xs-4">
       <?php echo e(Form::label('employer_id_number', ' Employer ID')); ?>

      <?php echo e(Form::text('employer_id_number','', array('placeholder' => 'Employer ID'))); ?>

      </div>
      </div>
      
      <div class="clearfix"></div>
      </div>
      <h2>Company Information</h2>
      <div class="personal_form">
      <div class="col-md-6">
      <?php echo e(Form::label('website_url', 'Website URL')); ?>

      <?php echo e(Form::text('website_url','', array('placeholder' => 'Website URL'))); ?>

      </div>
      
      <div class="col-md-6">
      <?php echo e(Form::label('email', 'Email')); ?>

      <?php echo e(Form::text('email','', array('placeholder' => 'Email'))); ?>

      </div>
      <div class="col-md-6">
      <?php echo e(Form::label('password', 'Password')); ?>

      <?php echo e(Form::password('password','')); ?>

      </div>
      <div class="col-md-6">
      <?php echo e(Form::label('cpassword', 'Confirm Password')); ?>

      <?php echo e(Form::password('cpassword','')); ?>

      </div>
	  <div class="col-md-6">
      <?php echo e(Form::label('additional_notes', 'Experience and Additional Notes')); ?>

		
	  <?php echo e(Form::textarea('additional_notes','',array('placeholder' => 'Experience and Additional Notes','rows' => 1, 'cols' => 20))); ?>

      </div>
      <div class="clearfix"></div>
      </div>
      <h2>Additional Information Required for the Form W-9</h2>
      <div class="personal_form">
     
	  <div class="col-md-12">
      <?php echo e(Form::label('social_security', 'Social Security')); ?>

      <?php echo e(Form::text('social_security','', array('placeholder' => 'Social Security'))); ?>

      </div>
      
	   <div class="col-md-12">
       <?php echo e(Form::label('employer_id_number', ' Employer ID')); ?>

      <?php echo e(Form::text('employer_id_number','', array('placeholder' => 'Employer ID'))); ?>

      </div>
      <div class="clearfix"></div>
      </div>
      <h2>NetPEO Terms and Conditions for all Brokers</h2>
      <div class="term_cond"><p>NetPEO Web Site
      Terms and Conditions of Use 
      NetPEO, LLC. along with its subsidiaries and affiliates ("NetPEO"), provides the information and services on its World Wide Web site(s) (the "Site") under the following terms and conditions. By accessing and/or using the Site, you indicate your acceptance of these terms and conditions. 
      1. LAWS AND REGULATIONS. Access to and use of this Site are subject to all applicable international, federal, state and local laws and regulations. User agrees not to use the Site in any way which violates such laws or regulations.
      2. COPYRIGHT AND TRADEMARKS. The information available on or through this Site is the property of NetPEO, or its licensors, and is protected by copyright, trademark, and other intellectual property laws. Users may not modify, copy, distribute, transmit, display, publish, sell, license, create derivative works or otherwise use any information available on or through this Site for commercial or public purposes. Users may not use the trademarks, logos and service marks ("Marks") for any purpose including, but not limited to use as "hot links" or meta tags in other pages or sites on the World Wide Web without the written permission of NetPEO or such third party that may own the Mark. Questions concerning trademark ownership, usage, or infringement should be directed to trademarks@NetPEO.net.
      3. TAMPERING. User agrees not to modify, move, add to, delete or otherwise tamper with the information contained in NetPEO's Web site. User also agrees not to decompile, reverse engineer, disassemble or unlawfully use or reproduce any of the software, copyrighted or trademarked material, trade secrets, or other proprietary information contained in the Site.
      4. THIRD PARTY INFORMATION. Although NETPEO monitors the information on the Site, some of the information is supplied by independent third parties. While NETPEO makes every effort to insure the accuracy of all information on the Site, NETPEO makes no warranty as to the accuracy of any such information.
      5. LINKS TO THIRD PARTY SITES. This Site may contain links that will let you access other Web sites that are not under the control of NETPEO. The links are only provided as a convenience and NETPEO does not endorse any of these sites. NETPEO assumes no responsibility or liability for any material that may accessed on other Web sites reached through this Site, nor does NETPEO make any representation regarding the quality of any product or service contained at any such site.
      6. LINKS FROM THIRD PARTY SITES. NETPEO prohibits unauthorized links to the Site and the framing of any information contained on the site or any portion of the Site. NETPEO reserves the right to disable any unauthorized links or frames. NETPEO has no responsibility or liability for any material on other Web sites that may contain links to this Site.
      7. NO WARRANTIES. Information and documents provided on this Site are provided "as is" without warranty of any kind, either express or implied, including without limitation warranties of merchantability, fitness for a particular purpose, and non-infringement. NETPEO uses reasonable efforts to include accurate and up-to-date information on this Site; it does not, however, make any warranties or representations as to its accuracy or completeness. NETPEO periodically adds, changes, improves, or updates the information and documents on this Site without notice. NETPEO assumes no liability or responsibility for any errors or omissions in the content of this Site. Your use of this Site is at your own risk.
      8. LIMITATION OF LIABILITY. UNDER NO CIRCUMSTANCES SHALL NETPEO BE LIABLE FOR ANY DAMAGES SUFFERED BY YOU, INCLUDING ANY INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES (INCLUDING, WITHOUT LIMITATION, ANY LOST PROFITS OR DAMAGES FOR BUSINESS INTERRUPTION, LOSS OF INFORMATION, PROGRAMS OR OTHER DATA) THAT RESULT FROM ACCESS TO, USE OF, OR INABILITY TO USE THIS SITE OR DUE TO ANY BREACH OF SECURITY ASSOCIATED WITH THE TRANSMISSION OF INFORMATION THROUGH THE INTERNET, EVEN IF NETPEO WAS ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.
      9. PRIVACY. Protecting the privacy of our clients and users of our Sites is important to NETPEO. The NetPEO Web Site Privacy Statement describes how we use and protect information you provide to us.
      10. SECURITY. Data transmitted to and from NETPEO client Sites is encrypted for the user's protection. However, the security of information transmitted through the Internet can never be guaranteed. NETPEO is not responsible for any interception or interruption of any communications through the Internet or for changes to or losses of data. User is responsible for maintaining the security of any password, user ID, or other form of authentication involved in obtaining access to password protected or secure areas of NETPEO sites. In order to protect you and your data, NETPEO may suspend your use of a client site, without notice, pending an investigation, if any breach of security is suspected.
      11.	TRANSMISSION OF PERSONAL DATA. User acknowledges and agrees that by providing NETPEO with any personal information through the Site, User consents to the transmission of such personal user information over international borders as necessary for processing in accordance with NETPEO's standard business practices and the NetPEO Web Site Privacy Statement.
      12.	ACCESS TO PASSWORD PROTECTED/SECURE AREAS. Access to and use of password protected and/or secure area of the Site is restricted to authorized users only. Unauthorized access to such areas is prohibited and may lead to criminal prosecution.
      13.	PROCEDURE FOR MAKING CLAIMS OF COPYRIGHT INFRINGEMENT. Pursuant to the Digital Millennium Copyright Act, NetPEO has registered an agent with the U.S. Copyright Office. Notices of claimed copyright infringement on the Site should be directed to: NetPEO, LLC, 292 South Culver Street, Lawrenceville, GA 30045, Attn: Layne Davlin.
      14.	JURISDICTION/GOVERNING LAW. These terms and conditions shall be governed and construed in accordance with the laws of the State of Georgia, USA, and applicable federal laws without regard to conflicts of law principles. User agrees that any and all proceedings relating to this site and the subject matter contained herein shall be maintained in the courts of the state of Georgia or the federal district courts sitting in Georgia, which courts shall have exclusive jurisdiction for such purpose.
      NetPEO Trademarks and Service Marks
      The following are registered trademarks and service marks of NetPEO, LLC., which may appear in NetPEO web sites:
      NetPEO LOGO
      NetPEO 1, Inc.
      NetPEO THE CONSULTING COMPANY
      NetPEO
      Updated 11/24/2005
      ©2003-2005 NetPEO, LLC. All Rights Reserved.</p>
      </div>
      <div class="radio_check">
      <p><span><input type="checkbox"></span><span>I have read and I agree to the above terms and conditions Please select one:</span></p>
      <div class="main_points">
      <p><span><input type="radio" value="1" name="checker"></span><span>Agreement in Personal Name</span></p>
      <p><span><input type="radio" value="2" name="checker"></span><span>Agreement in DBA Name</span></p>
      <p><span><input type="radio" value="3" name="checker"></span><span>Agreement in Registered Company Name</span></p>
      </div>
      </div>
      <div class="submit_button">
      <input type="submit" value="I Agree with Terms And Conditions">
      </div>
      <p class="not_inter"><input type="submit" value=" Sorry, I,m no longer intrested"></p>
      </div>
      </div></form>
      </section>
	    <?php $__env->stopSection(); ?> 
<?php echo $__env->make('front.signin_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>