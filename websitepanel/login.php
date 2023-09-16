<?php

if(isset($_SESSION['user']))
{	
	echo "<script> 
		window.location='index';
	</script>";
}			
include_once('header.php');
?>
<script> 
function validate()  // function name
{
	// take variable now if we take <form name="" than use document.forms["myform"]["ufn"].value;
	
	// if we use <form id="" than we use var img=document.getElementById("img");
	var email=document.forms["myform"]["email"].value;  
	if(email=="" || email==null)  // for null condition
	{
		alert('Please Fill Out The Email');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var password=document.forms["myform"]["password"].value;  
	if(password=="" || password==null)  // for null condition
	{
		alert('Please Fill Out The Password');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
}
// now fore direct validation from above file u take data-bvalidator="" from the file "jquery.bvalidator.js"

// allways take <form id=""  in jquery with #name
</script>

	
	
	
	
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Login Page</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- login Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                   
                </div>
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="myform" action="" method="post" onsubmit="return validate()">
                           
                            <div class="control-group">
							<label><b>Email: </b></label>
                                <input type="email" class="form-control p-4" name="email" placeholder="Your Email" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
							<label><b>Password: </b></label>
                                <input type="password" class="form-control p-4" name="password" placeholder="Your Password" >
                                <p class="help-block text-danger"></p>
                            </div>
							<a href="signup">Not Register Click Here To Signup</a><br><br>
							<a class="forgot" href="#">Forgot Your Password?</a><br><br>
                            
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submit" id="sendMessageButton">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login End -->
	<?php
include_once('footer.php');
?>