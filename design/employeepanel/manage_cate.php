
<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Categories</h1>
                 
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Categories
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Category_id</th>
                                            <th>Category_name</th>
                                            <th>Category_img</th>
                                            <th>Description</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php
                                           if(!empty($data_categories))
                                           {
                                            foreach($data_categories as $d)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $d->category_id;?></td>
                                                    <td><?php echo $d->category_name;?></td>
                                                    <td><img src="../upload/categories/<?php echo $d->file;?>" width="50px"></td>
                                                    <td><?php echo $d->description;?></td>
                                                    <td>
                                                       
                                                        <a href="edit_cate?editcategory_id=<?php echo $d->category_id;?>" class="btn btn-danger me-1">Edit</a>
                                                        <a href="delete?delcategory_id=<?php echo $d->category_id;?>" class="btn btn-primary me-1">Delete</a>
														
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