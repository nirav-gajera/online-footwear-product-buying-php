<!DOCTYPE html>
<?php

require_once("../config/conn.php");
session_start();
$uid=$_SESSION['User_id'];

$cart = "SELECT count(*) as total_cart FROM `cart` c join user u where c.User_id=u.User_id and c.User_id='".$uid."'";
	$result = mysqli_query($conn,$cart);
	$row = mysqli_fetch_array($result);
	$cart_count = $row['total_cart'];

?>

<html class="no-js" lang="zxx">

<!-- Mirrored from demo.hasthemes.com/juan-preview-v1/juan/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2019 08:05:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Shoeholic</title>
    <!--=== All Plugins CSS ===-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="assets/css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Modernizer JS -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body >

    <!-- Start Header Area -->
    <header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top theme-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-message">
                                <p>Welcome to Shoeholic online store</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="header-top-settings">
                                <ul class="nav align-items-center justify-content-end">
                                    <li class="curreny-wrap">
                                        Rs Rupees (IN)
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">Rs INDIA</a></li>
                                      
                                        </ul>
                                    </li>
                                    <li class="language">
                                        
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a><img src="assets/img/banner/ind.png" alt="flag" height="20" width="20"> INDIA </a></li>
                                          
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <!-- start logo area -->
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/shoeholic.png" alt="brand logo">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- main menu area start -->
                        <div class="col-lg-8 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li class="active"><a href="index.php">Home</a>
                                                
                                            </li>
                                            <li class="static"><a href="#">Category <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <?php
														$sql="select * from category";
														$result=mysqli_query($conn,$sql);
										        while($row=mysqli_fetch_array($result))
												{
													$cid=$row['C_id']
													?>
													
													<li class="mega-title"><a href="#"><?php echo $row['C_name']?></a>
                                                <ul>
														<?php
												$sql1="select*from `sub-category` s join category c where s.C_id =c.C_id and s.C_id='3'";
												$result1=mysqli_query($conn,$sql1);
										        while($row1=mysqli_fetch_array($result1))
												{
										    ?><li><a href="products.php?id=<?php echo $row1['Sub_C_id']?>">
											<?php echo $row1['Sub_C_name']?></a></li>
                                                         
														 
														 <?php
												}
														 ?>          
                                            		</ul>
													</li>
												        <?php
												}
														 ?> 
												 
                                                </ul>
                                            </li>
                                            <li><a href="feedback.php">Feedback </i></a>
                                            
                                                   
                                            </li>

                                            <li><a href="contactus.php">Contact us</a></li>
											<?php
										
											if(isset ($_SESSION['User_id']))
												{ ?>
											  <li><a href="myorder.php">My order</i></a></li>
											
											<?php } ?>
											  											
											  <li><a href="aboutus.php">About Us</i></a></li>
                                        
												
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->

                        <!-- mini cart area start -->
                        <div class="col-lg-2">
                            <div class="header-configure-wrapper">
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">
                                        <li>
                                            <a href="#" class="offcanvas-btn">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </li>
									 
                                        <li class="user-hover">
                                            <a href="#">
                                                <i class="ion-ios-gear-outline"></i>
                                            </a>
                                            <ul class="dropdown-list">
											<?php
											if(isset($_SESSION['User_id']))
											{
												?>
												<?php
											}
											else
											{
											?>
                                                <li><a href="login.php">login</a></li>
											<?php
											}
											?>
												<?php
											if(isset($_SESSION['User_id']))
											{
												?>
											<?php
											}
											else
											{
											?>	
											
                                                <li><a href="register.php">register</a></li>
												<?php
											}
											?>
												<?php
											if(isset($_SESSION['User_id']))
											{
										?>
									
												
                                                <li><a href="account.php">my account</a></li>
													<?php
											}
											?>
													<?php
											if(isset($_SESSION['User_id']))
											{
												?>
												 <li><a href="logout.php">logout</a></li>
												 	<?php
											}
											?>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="minicart-btn">
                                                <i class="ion-bag"></i>
												
												<div class="notification"><?php echo $cart_count;?></div>
                                                <!-- <div class="notification"></div> -->
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->
                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="cart.html">
                                        <i class="ion-bag"></i>
                                    </a>
                                </div>
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="ion-navicon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
    <!-- end Header Area -->

    <!-- off-canvas menu start -->
   