﻿<?php
if(isset($_SESSION['employee']))
{
	echo "<script>
	window.location='dashboard';
	</script>";
}
?>
<!DOCTYPE php>
<php xmlns="http://www.w3.org/1999/xphp">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Employee Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center" style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="" method="post" role="form">
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                            <input type="text" name="emp_name" class="form-control" placeholder="Your Username " />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" name="emp_password" class="form-control"  placeholder="Your Password">
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                     <input type="submit" name="submit" class="btn btn-primary">
                                    
                                    
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</php>
