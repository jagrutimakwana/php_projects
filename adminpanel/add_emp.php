<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Employee</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Employee
                        </div>
                        <div class="panel-body">
                           <form action="" method="post" enctype="multipart/form-data" role="form">
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input class="form-control" type="text" name="emp_name">
                                        </div> 
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="emp_email">
                                        </div>
										 <div class="form-group">
                                            <label>Phone No</label>
                                            <input class="form-control" type="tel" name="emp_mobileno">
                                        </div>
										 <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" name="emp_address">
                                        </div>
                            <div class="form-group">
							     <input type="submit" name="submit" class="btn btn-primary">
							</div>
                        </div>
                            </div>

        </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
<?php
    include_once('footer.php');
	?>    
