<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Customer</h1>
                 
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Customer
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Customer_id</th>
											<th>Customer_image</th>
                                            <th>Firstname</th>
											<th>Lastname</th>
                                            <th>Email</th>
											<th>Phone_no</th>
											<th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                           if(!empty($data_customers))
                                           {
                                            foreach($data_customers as $d)
                                            {
                                                ?>
                                                <tr>
												
                                                    <td><?php echo $d->customer_id;?></td>
													<td><img src="../upload/customers/<?php echo $d->file;?>" width="50px"></td>
													<td><?php echo $d->firstname;?></td>
													<td><?php echo $d->lastname;?></td>
                                                    <td><?php echo $d->email;?></td>
													<td><?php echo $d->mobile;?></td>
													<td><?php echo $d->address;?></td>
                                                    
                                                      <td> 
													  <a href="status?statuscustomer_id=<?php echo $d->customer_id;?>" class="btn btn-danger me-1"><?php echo $d->status;?></a>
                                                      <a href="delete?delcustomer_id=<?php echo $d->customer_id;?>" class="btn btn-primary me-1">Delete</a>
														
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                           }
                                           else
                                           {
                                            ?>
                                            <tr>
                                                <td> DATA NOT FOUND</td>

                                            </tr>
                                            <?php
                                            } 
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
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