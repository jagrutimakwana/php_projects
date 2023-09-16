<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Feedback</h1>
                 
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Feedback
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Feedback_id</th>
                                            <th>Customer_id</th>
                                            <th>Feedback_name</th>
                                            <th>Feedback_comments</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                           if(!empty($data_feedbacks))
                                           {
                                            foreach($data_feedbacks as $d)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $d->feedback_id;?></td>
													<td><?php echo $d->customer_id;?></td>
                                                    <td><?php echo $d->feedback_name;?></td>
                                                    <td><?php echo $d->feedback_comments;?></td>
													
                                                    <td>
                                                       
                                                       
                                                        <a href="delete?delfeedback_id=<?php echo $d->feedback_id;?>" class="btn btn-primary me-1">Delete</a>
														
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