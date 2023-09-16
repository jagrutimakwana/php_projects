<?php
include_once('header.php');
?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">My Profile</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">My Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                  </div>  
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="" method="post">
                             <div class="form-top1">
               <h3 class="title-big text-center mb-2">My Account</h3>
              
               <div class="form-top">

                 <div class="form-top-left">

                   <img src="../upload/customers/<?php echo $fetch->file;?>" alt="" width="200px">
                  <br>
                  <div class="detail-box">
				      <p><b>Customer id :</b><?php echo $fetch->customer_id;?></p>
                      <p><b>Firstname :</b><?php echo $fetch->firstname;?></p>
                      <p><b>Lastname:</b><?php echo $fetch->lastname;?></p>
                      <p><b>Email id :</b><?php echo $fetch->email;?></p>
                      <p><b>Contact no :</b><?php echo $fetch->mobile;?></p>
                      <p><b>Address :</b><?php echo $fetch->address;?></p>
					  <p><b>Gender :</b><?php echo $fetch->gender;?></p>
					  <p><b>Languages :</b><?php echo $fetch->languages;?></p>
                      <div class="d-flex justify-content-center">
                      <a href="edituser?editcustomer_id=<?php echo $fetch->customer_id;?>" class="btn btn-primary">
                       Edit Profile
                      </a>
                      </div>
					  </div>
					  </div>
					  </div>
					  </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
	<?php
include_once('footer.php');
?>