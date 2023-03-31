<!DOCTYPE html>
<?php include('header.php');
require_once('../config/conn.php');
	$id=$_SESSION['User_id'];
	
	
	$sql = "select * from user where User_id = '".$id."'";
	//echo $sql;
	//die;                   
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	

?>
    <!-- off-canvas menu end -->

    <!-- main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h1 class="breadcrumb-title">My Account</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="account.php">My Account</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- my account wrapper start -->
        <div class="my-account-wrapper section-padding">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="index.php" class="active" ><i class="fa fa-dashboard"></i>
                                            Dashboard</a>

                                        <a href="myorder.php"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                                                              <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                            Method</a>
											
                                                                               <a href="account1.php"><i class="fa fa-user"></i> Account Details</a>
                                        <a href="login.php"><i class="fa fa-sign-out"></i> Logout</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->
        
                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Dashboard</h3>
                                                <div class="welcome">
                                                    <p>Hello, <strong><?php echo $row['User_name']?></strong> 
                                                </div>
                                                <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
        
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Orders</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Aug 22, 2018</td>
                                                                <td>Pending</td>
                                                                <td>$3000</td>
                                                                <td><a href="cart.html" class="btn ">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>July 22, 2018</td>
                                                                <td>Approved</td>
                                                                <td>$200</td>
                                                                <td><a href="cart.html" class="btn ">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>June 12, 2017</td>
                                                                <td>On Hold</td>
                                                                <td>$990</td>
                                                                <td><a href="cart.html" class="btn ">View</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
        
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="download" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Downloads</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Date</th>
                                                            <th>Expire</th>
                                                            <th>Download</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Haven - Free Real Estate PSD Template</td>
                                                                <td>Aug 22, 2018</td>
                                                                <td>Yes</td>
                                                                <td><a href="#" class="btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>HasTech - Profolio Business Template</td>
                                                                <td>Sep 12, 2018</td>
                                                                <td>Never</td>
                                                                <td><a href="#" class="btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
        
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Payment Method</h3>
                                                <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
        
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Billing Address</h3>
                                                <address>
                                                    <p><strong>Alex Tuntuni</strong></p>
                                                    <p>1355 Market St, Suite 900 <br>
                                                        San Francisco, CA 94103</p>
                                                    <p>Mobile: (123) 456-7890</p>
                                                </address>
                                                <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
        
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">


<div class="col-lg-6">
                            <div >
                                <h2>Singup Form</h2>
                                <form method="post">
								<div class="single-input-item">
                                        <input type="text" name="User_name"  value="<?php echo $row['User_name'];?>" placeholder="User name" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" name="Email"  value="<?php echo $row['Email'];?> "placeholder="Email" required />
                                    </div>
                                    
									 <div class="single-input-item">
                                        <input type="text" name="Address"  value="<?php echo $row['Password'];?>" placeholder="Address" required />
                                    </div>
									 <div class="single-input-item">
                                        <input type="text" name="Contact_no"  value="<?php echo $row['Contact_no'];?>" placeholder="Contact-no" required />
                                    </div>
									<div class="single-input-item">
									
 <select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
									
									
									
									<!--<div class="form-group">
									<label></label>
									<select class="form-control" name="Area_id">
									<option readonly selected>Area name</option>
									<?php
									$sql="select * from area";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_array($result))
									{
									?>
									
									<option value="<?php echo $row['Area_id'];?>"
								<?php if($row['Area_name']==$id){echo 'selected';}?>> 
								<?php echo $row['Area_name'];?>
								</option>
								<?php
								}
								?>
									
									</select>
									</div>-->
									</div>
									
                                   <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-input-item">
                                                <input type="password" name="Password"  value="<?php echo $row['Password'];?>" placeholder="Enter your Password" required />
                                            </div>
                                        </div>
                                       
                                        </div>
										
                                    
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn">Register</button>
                                    </div>
                                </form>
								</div>
                            </div>



                                  <!--              <h3>Account Details</h3>
                                                <div class="account-details-form">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="User-name" class="required">User Name</label>
                                                                    <input type="text" id="User-name" name="User_name" value="<?php echo $row['User_name']?>"placeholder="User Name" />
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                       
                                                        <div class="single-input-item">
                                                            <label for="Email" class="required">Email Address</label>
                                                            <input type="Email" id="Email" name="Email" value="<?php echo $row['Email']?>" placeholder="Email Address" />
                                                        </div>
														
														<div class="single-input-item">
                                                            <label for="Contact_no" class="required">Contact no</label>
                                                            <input type="text" id="Contact_no" name="Contact_no" value="<?php echo $row['Contact_no']?>"placeholder="Contact no" />
                                                        </div>
														
														<div class="single-input-item">
                                                            <label for="Address" class="required"> Address</label>
                                                            <input type="textarea" id="address" name="Address" value="<?php echo $row['Address']?>"placeholder=" Address" />
                                                        </div>
														
														<div >
                                                            <label for="Area" class="required"> Area</label>
                                                            
                                                        </div>
														
														<div class="form-group">
									<label></label>
									<select>									
									<option>1</option>
									<option>1</option>
									<option>1</option>
									<option>1</option>
									</select>
									</div>
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                           
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="Password" class="required"> Password</label>
                                                                        <input type="Password" id="Password" name="Password" value="<?php echo $row['Password']?>" placeholder="Password" />
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </fieldset>
                                                        <div class="single-input-item">
                                                            <button class="check-btn sqr-btn ">Save Changes</button>
                                                        </div>-->
                                                    </form>
                                                </div>
                                            </div>
											
											
											
											
											
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- my account wrapper end -->
    </main>
    <!-- main wrapper end -->
	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["User_name"]) && isset($_POST["Email"]) && isset($_POST["Address"]) && isset($_POST["Contact_no"]) && isset($_POST["Password"]) 
			&& isset($_POST["Area_id"]))
		{
			$User_name=$_POST["User_name"];
		
			$Email=$_POST["Email"];
			$Address=$_POST["Address"];
			$Contact_no=$_POST["Contact_no"];
			$Password=$_POST["Password"];
			$Area_id=$_POST["Area_id"];
							
			if(($User_name!='') && ($Email!='') && ($Address!='') && ($Contact_no!='') && ($Password!='') && ($Area_id!=''))
			{				
				$sql="update user set User_name='".$User_name."',Email='".$Email."',Address='".$Address."' ,Contact_no='".$Contact_no."' 
				,Password='".$Password."',Area_id='".$Area_id."'  where User_id = '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=user.php'>";

				}
			}
			else
			{
					echo "Value is null";
			}
		}
		else
		{
				echo "Value not set";
		}
}

?>		
<?php include('footer.php');

?>

    <!-- offcanvas search form start -->
    <div class="offcanvas-search-wrapper">
        <div class="offcanvas-search-inner">
            <div class="offcanvas-close">
                <i class="ion-android-close"></i>
            </div>
            <div class="container">
                <div class="offcanvas-search-box">
                    <form class="d-flex bdr-bottom w-100">
                        <input type="text" placeholder="Search entire storage here...">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i>search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas search form end -->

    <!-- offcanvas mini cart start -->
    <div class="offcanvas-minicart-wrapper">
        <div class="minicart-inner">
            <div class="offcanvas-overlay"></div>
            <div class="minicart-inner-content">
                <div class="minicart-close">
                    <i class="ion-android-close"></i>
                </div>
                <div class="minicart-content-box">
                    <div class="minicart-item-wrapper">
                        <ul>
                            <li class="minicart-item">
                                <div class="minicart-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/cart/cart-1.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="minicart-content">
                                    <h3 class="product-name">
                                        <a href="product-details.html">Flowers bouquet pink for all flower lovers</a>
                                    </h3>
                                    <p>
                                        <span class="cart-quantity">1 <strong>&times;</strong></span>
                                        <span class="cart-price">$100.00</span>
                                    </p>
                                </div>
                                <button class="minicart-remove"><i class="ion-android-close"></i></button>
                            </li>
                            <li class="minicart-item">
                                <div class="minicart-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/cart/cart-2.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="minicart-content">
                                    <h3 class="product-name">
                                        <a href="product-details.html">Jasmine flowers white for all flower lovers</a>
                                    </h3>
                                    <p>
                                        <span class="cart-quantity">1 <strong>&times;</strong></span>
                                        <span class="cart-price">$80.00</span>
                                    </p>
                                </div>
                                <button class="minicart-remove"><i class="ion-android-close"></i></button>
                            </li>
                        </ul>
                    </div>

                    <div class="minicart-pricing-box">
                        <ul>
                            <li>
                                <span>sub-total</span>
                                <span><strong>$300.00</strong></span>
                            </li>
                            <li>
                                <span>Eco Tax (-2.00)</span>
                                <span><strong>$10.00</strong></span>
                            </li>
                            <li>
                                <span>VAT (20%)</span>
                                <span><strong>$60.00</strong></span>
                            </li>
                            <li class="total">
                                <span>total</span>
                                <span><strong>$370.00</strong></span>
                            </li>
                        </ul>
                    </div>

                    <div class="minicart-button">
                        <a href="cart.html"><i class="fa fa-shopping-cart"></i> view cart</a>
                        <a href="cart.html"><i class="fa fa-share"></i> checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas mini cart end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!--=======================Javascript============================-->
    <!--=== All Vendor Js ===-->
    <script src="assets/js/vendor.js"></script>
    <!--=== All Plugins Js ===-->
    <script src="assets/js/plugins.js"></script>
    <!--=== Active Js ===-->
    <script src="assets/js/active.js"></script>
</body>
    

<!-- Mirrored from demo.hasthemes.com/juan-preview-v1/juan/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2019 08:05:55 GMT -->
</html>