<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
</head>

<body style="margin:0; padding:0; color:#8b8c8c; font-family:'Raleway';">
<div  style="background:url(<?php echo e(URL::asset('upload/newsletter.png')); ?>) no-repeat; width:800px; height:1000px; margin:0 auto; padding:100px 50px 0 50px; box-sizing:border-box;">
    <div style="height:720px; width:440px; margin:40px auto;">
           
            <div style="padding:0 30px; border-bottom:1px solid #0096d6;">
                <p style="font-weight:bold; color:#0096d6;font-size:16px; margin-bottom:20px;">Hi Manager</p>
                <p>Notification For Lead</p>
                <aside style="margin-top:30px; line-height:25px;">
                    <p style="font-weight:bold; color:#0096d6;font-size:16px;"> Lead details:</p>
                    <p><strong>BDE Name:</strong> <?php echo e($first_name); ?> <?php echo e($last_name); ?></p>
                     <p>   <strong>Job link:</strong> <?php echo e($job_link); ?></p>
                      <p>  <strong>Job Type:</strong> <?php echo e($job_type); ?></p>
                       <p> <strong>Upwork id:</strong> <?php echo e($upwork_id); ?></p>
                       <p> <strong>Team:</strong> <?php echo e($team); ?></p>
						
						
                </aside>
            </div>
            
    </div>
</div>
</body>

</html>
