<?php 
   function active ($currect_page)
   {
	   $url_array=explode('/', $_server['REQUEST_URI']);
	   $url=end($url_array);
	   if($currect_page == $url)
	   {
		   echo 'active'; //class name in css
	   }
   }
   ?>

<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <title>iDESIGN - Interior Design php Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free php Templates" name="keywords">
    <meta content="Free php Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-10">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">Furniture</span> shop</h1>
                </a>
				
				<?php
				  if(isset($_SESSION['firstname']))
				  {
					  echo " / Welcome.. ". $_SESSION['firstname'];
				  }
				  ?>
				  
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
					
					<li class="nav-item active <?php active('index.php')?>">
                        <a href="index" class="nav-item nav-link active">Home</a>
					</li>
					<li class="nav-item @@about__active <?php active('about.php')?>">
                        <a href="about" class="nav-item nav-link">About</a>
					</li>
                    <li class="nav-item @@service__active <?php active('service.php')?>">    
						<a href="service" class="nav-item nav-link">Service</a>
					</li>
                    <li class="nav-item @@project__active <?php active('project.php')?>">   
					   <a href="project" class="nav-item nav-link">Project</a>
					</li>
                      <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                            <li class="nav-item @@blog__active <?php active('blog.php')?>">
								<a href="blog" class="dropdown-item">Blog Grid</a>
							</li>
							 <li class="nav-item @@single__active <?php active('single.php')?>">
                                <a href="single" class="dropdown-item">Blog Detail</a>
							</li>
                            </div>
                        </div>
					
					<li class="nav-item @@about__active <?php active('contact.php')?>">
                        <a href="contact" class="nav-item nav-link">Contact</a>
					</li>
					
			  
                <?php
				if(isset($_SESSION['customer_id']))
				{	
				?>
                <li class="nav-item">				
				<a href="profile" class="nav-item nav-link">
                  <span>
                    My Account  
                  </span>
                </a>
				</li>
				<li class="nav-item">
				<a href="logout" class="nav-item nav-link">
                  <span>
                   Logout
                  </span>
                </a>
				</li>
				<?php
				}
				else
				{
				?>	
				<li class="nav-item">
				<a href="login" class="nav-item nav-link">
                  <span>
                    Login
                  </span>
                </a>
				</li>
				<?php
				}
				?>
            

					
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Our Office</h5>
                            <p class="m-0">123 Street, New York, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Email Us</h5>
                            <p class="m-0">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Call Us</h5>
                            <p class="m-0">+012 345 6789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->
