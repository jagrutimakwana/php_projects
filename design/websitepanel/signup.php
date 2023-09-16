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
	
	var firstname=document.forms["myform"]["firstname"].value;  
	if(firstname=="" || firstname==null)  // for null condition
	{
		alert('Please Fill Out The User First Name');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var lastname=document.forms["myform"]["lastname"].value;  
	if(lastname=="" || lastname==null)  // for null condition
	{
		alert('Please Fill Out The User Last Name');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
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
	
	var mobile=document.forms["myform"]["mobile"].value;  
	if(mobile=="" || mobile==null)  // for null condition
	{
		alert('Please Fill Out The Contact Number');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var address=document.forms["myform"]["address"].value;  
	if(address=="" || address==null)  // for null condition
	{
		alert('Please Fill Out The Address');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var gen_arr = document.getElementsByName("gender");
    if (gen_arr[0].checked == true) 
	{
                   
    } 
	else if (gen_arr[1].checked == true) 
	{
                  
    } 
	else 
	{
		alert('! Please Select Gender');  // alert msg
        return false;
    }
	
	var languages_arr = document.getElementsByName("languages[]");
    if (languages_arr[0].checked == true) 
	{
                   
    } 
	else if (languages_arr[1].checked == true) 
	{
                  
    } 
	else if (languages_arr[2].checked == true) 
	{
                  
    } 
	else 
	{
		alert('! Please Select Languages');  // alert msg
		return false;
    }
	
	var country_id=document.forms["myform"]["country_id"].value;  
	if(country_id=="" || country_id==null)  // for null condition
	{
		alert('Please Fill Out The Country');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var file=document.forms["myform"]["file"].value;  
	if(file=="" || file==null)  // for null condition
	{
		alert('Please Fill Out The Image');  // alert msg
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
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Signup Here</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- signup Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                </div>    
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
						
                        <form name="myform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
                            <div class="control-group">
							<label><b> Firstname: </b></label>
                                <input type="text" class="form-control p-4" name="firstname" placeholder="Your Firstname" >
                                <p class="help-block text-danger"></p>
                            </div>
							 <div class="control-group">
							 <label><b> Lastname: </b></label>
                                <input type="text" class="form-control p-4" name="lastname" placeholder="Your Lastname" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
							<label><b> Email: </b></label>
                                <input type="email" class="form-control p-4" name="email" placeholder="Your Email" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
							<label><b> Password: </b></label>
                                <input type="password" class="form-control p-4" name="password" placeholder="Your Password" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
							<label><b> Contact no: </b></label>
                                <input type="tel" class="form-control p-4" name="mobile" placeholder="Your Contact No" >
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
							<label><b> Address: </b></label>
                                <textarea class="form-control p-4" name="address" placeholder="Your Address" ></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
							<label><b> Gender: </b></label>
                               Male:<input type="radio" name="gender" value="Male">
							   Female:<input type="radio" name="gender" value="Female">
                               </div>
							  <div class="control-group">
							 <label><b> Language: </b></label>
                               Hindi:<input type="checkbox" name="languages[]" value="Hindi">
							   English:<input type="checkbox" name="languages[]" value="English">
							   Gujrati:<input type="checkbox" name="languages[]" value="Gujrati">
                               </div>
							   
							   <div class="control-group">
                                <label for="inputState"><b>Country</b></label>
                                 <select name="country_id">
                                  <option value="">Select Country</option></label></td>
                                  <?php
                                   if(!empty($countries_arr))
                                     {
                                       foreach($countries_arr as $c)
                                     {
                                     ?>
                                <option value="<?php echo $c->country_id?>"><?php echo $c->country_name?></option>
                                  <?php
					             	   }
					             }
                               ?>
                              </select>
                             </div>
			                <div class="control-group">
                             <label for="exampleInputName1"><b>Image Upload</b></label>
                            <input type="file" name="file" class="form-control" >
                             </div>			
                            <div><br>
							 <a href="login"> If You Already Register Then Click Login</a><br><br>
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submit" id="sendMessageButton">Sign up</button>								
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signup End -->
	<?php
include_once('footer.php');
?>