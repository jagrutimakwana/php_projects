<?php
if(!($_SESSION['user']))
{
	echo "<script>
	window.location='index';
	</script>";
}

  include_once('header.php');
  ?>
 <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Edit User</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Edit User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- edit user Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                </div>    
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="control-group">
							<label><b> Firstname: </b></label>
                                <input type="text" class="form-control p-4" name="firstname" value="<?php echo $fetch->firstname?>" placeholder="Your Firstname" required>
                                <p class="help-block text-danger"></p>
                            </div>
							 <div class="control-group">
							 <label><b> Lastname: </b></label>
                                <input type="text" class="form-control p-4" name="lastname" value="<?php echo $fetch->lastname?>" placeholder="Your Lastname" required>
                                <p class="help-block text-danger"></p>
                            </div>
                           
                            <div class="control-group">
							<label><b> Contact no: </b></label>
                                <input type="tel" class="form-control p-4" name="mobile" value="<?php echo $fetch->mobile?>" placeholder="Your Contact No" required>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
							<label><b> Address: </b></label>
                                <textarea class="form-control p-4" name="address" value="<?php echo $fetch->address?>" placeholder="Your Address" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
							<label><b> Gender: </b></label>
                               Male:<input type="radio" name="gender" value="Male" <?php if($fetch->gender=="Male"){ echo "checked";}?>>
							   Female:<input type="radio" name="gender" value="Female" <?php if($fetch->gender=="Female"){ echo "checked";}?>>
                               </div>
							  <div class="control-group">
							 <label><b> Language: </b></label>
							
				              <?php 
				                $lag=$fetch->languages;
				                $languages_arr=explode(",",$lag);
				                 ?>
                               Hindi:<input type="checkbox" name="languages[]" value="Hindi" <?php if(in_array("Hindi",$languages_arr)){ echo "checked";}?>>
							   English:<input type="checkbox" name="languages[]" value="English" <?php if(in_array("English",$languages_arr)){ echo "checked";}?>>
							   Gujrati:<input type="checkbox" name="languages[]" value="Gujrati" <?php if(in_array("Gujarati",$languages_arr)){ echo "checked";}?>>
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
										 if($c->country_id==$fetch->country_id)
										 {
                                     ?>
                                <option value="<?php echo $c->country_id?>" selected><?php echo $c->country_name?></option>
                                  <?php
					             	   }
									   else
									    {
                                     ?>
                                <option value="<?php echo $c->country_id?>"><?php echo $c->country_name?></option>
                                  <?php
					             	   }
									 }
					             }
                               ?>
                              </select>
                             </div>
			                <div class="control-group">
                             <label for="file"><b>Image Upload</b></label>
                            <input type="file" name="file" class="form-control">
							<img src="../upload/customers/<?php echo $fetch->file;?>" alt="" width="40px">
                             </div>			
                            <div><br>
							
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submit" id="sendMessageButton">Save</button>								
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- edit user End -->
	<?php
include_once('footer.php');
?>