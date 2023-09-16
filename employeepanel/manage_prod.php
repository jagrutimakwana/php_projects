<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Products</h1>
                 
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Products
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Product_id</th>
                                            <th>Category_id</th>
                                            <th>Product_name</th>
                                            <th>Product_image</th>
											<th>Main_price</th>
											<th>Dis_price</th>
											<th>Description</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                           if(!empty($data_products))
                                           {
                                            foreach($data_products as $d)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $d->product_id;?></td>
													<td><?php echo $d->category_id;?></td>
                                                    <td><?php echo $d->product_name;?></td>
                                                    <td><img src="../upload/products/<?php echo $d->file;?>" width="50px"></td>
													<td><?php echo $d->main_price;?></td>
													<td><?php echo $d->dis_price;?></td>
                                                    <td><?php echo $d->description;?></td>
                                                    <td>
                                                       
                                                        <a href="edit_prod?editproduct_id=<?php echo $d->product_id;?>" class="btn btn-danger me-1">Edit</a>
                                                        <a href="delete?delproduct_id=<?php echo $d->product_id;?>" class="btn btn-primary me-1">Delete</a>
														
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