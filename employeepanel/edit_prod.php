<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Products</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Edit Products
                        </div>
                        <div class="panel-body">
						<form action="" method="post" enctype="multipart/form-data" role="form">
                            <div class="form-group">
                                            <label>Product_name</label>
                                            <input class="form-control" type="text" name="product_name">
											</div>
							
						    <div class="form-group">
                                            <label>Product_image</label>
                                            <input class="form-control" type="file" name="file">
											<img src="../upload/products/<?php echo $fetch->file;?>" alt="" width="40px">
											</div>
											
                            <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" type="text" name="description">
											</div>
						    <div class="form-group">
                                            <label>Main_price</label>
                                            <input class="form-control" type="text" name="main_price">
											</div>
						    <div class="form-group">
                                            <label>Discount_price</label>
                                            <input class="form-control" type="text" name="dis_price">
											</div>
                            
                            
                             <div class="form-group">
							    <button class="btn btn-primary py-3 px-5" type="submit" name="submit">Save</button>
							</div>  
                            </form>							
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
