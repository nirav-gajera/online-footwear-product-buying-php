<!DOCTYPE html>
<?php include('header.php');
require_once('../config/connection.php');

	$order = "SELECT count(*) as total_order FROM `order`";
	$result = mysqli_query($conn,$order);
	$row = mysqli_fetch_array($result);
	$order_count = $row['total_order'];

	$user = "SELECT count(*) as total_users FROM `user`";
	$result = mysqli_query($conn,$user);
	$row = mysqli_fetch_array($result);
	$user_count = $row['total_users'];
	
	$product = "SELECT count(*) as total_product FROM product";
	$result = mysqli_query($conn,$product);
	$row = mysqli_fetch_array($result);
	$product_count = $row['total_product'];
	 
	$feedback = "SELECT count(*) as total_feedback FROM feedback";
	$result = mysqli_query($conn,$feedback);
	$row = mysqli_fetch_array($result);
	$feedback_count = $row['total_feedback'];
	
	
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Order</h5>
                          <h2 class="mb-3 font-18" ><?php echo $order_count;?></h2>
                         
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/2.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Users</h5>
                          <h2 class="mb-3 font-18"><?php echo $user_count;?></h2>
                          
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Product</h5>
                          <h2 class="mb-3 font-18"><?php echo $product_count;?></h2>
                          
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Feedback</h5>
                          <h2 class="mb-3 font-18"><?php echo $feedback_count;?></h2>
                          
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4> Order Table</h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th class="text-center">
                          <div class="custom-checkbox custom-checkbox-table custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                              class="custom-control-input" id="checkbox-all">
                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                          </div>
                        </th>
                        <th>Order id</th>
                        <th>Order Description</th>
                        <th>Order Date</th>
                        <th>Payment Status</th>
                        <th>User id</th>
                        <th>Order Status</th>
                        <th>Action</th>
 					  
					   <?php
						   require_once('../config/connection.php');
						  $sql="select * from `order` o join user u where o.User_id=u.User_id and o.Order_status=0";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {			
										$id=$row['Order_id'];
										$uid=$row['User_id'];
						  
						  ?>
							
						 <tr>
							<td></td>
							<td><?php echo $row['Order_id']?></td> 
							<td><?php echo $row['Order_des']?></td>
							<td><?php echo $row['Order_date']?></td>
							<td><?php echo $row['Payment_status']?></td>
							<td><?php echo $row['User_name']?></td>
							<td><?php echo $row['Order_status']?></td>
							<td>  </a> 
								<br/> 
							<?php	
								if($row['Order_status']==0)
								{		
							?>
									<a href="order_accept.php?id=<?php echo $id?>&uid=<?php echo $uid?>" style="color:#18F70D;cursor:pointer" > ACCEPT </a> &nbsp; 
									<a href="order_reject.php?id=<?php echo $id?>&uid=<?php echo $uid?>" style="color:red;cursor:pointer"> REJECT </a> 
									
							<?php
								}
								else if($row['Order_status']==1)
								{
									echo "<h6 style='color:#18F70D'>ACCEPTED</h6>";
								}
								else if($row['booking_status']==2)
								{
									echo "<h6 style='color:red'>REJECTED</h6>";
								}
							?>
								</td>
                          </tr>
                          
							<?php }?>
					  
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 14:19:57 GMT -->
</html>