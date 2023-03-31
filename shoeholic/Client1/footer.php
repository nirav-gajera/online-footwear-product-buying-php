
    <!-- Start Footer Area Wrapper -->
    <footer class="footer-wrapper">
        <!-- footer main area start -->
        <div class="footer-widget-area section-padding">
            <div class="container">
                <div class="row mtn-40">
                    <!-- footer widget item start -->
                    <div class="col-xl-5 col-lg-3 col-md-6">
                        <div class="widget-item mt-40">
                            <h5 class="widget-title">My Account</h5>
                            <div class="widget-body">
                                <ul class="location-wrap">
                                    <li><i class="ion-ios-location-outline"></i>28,Subhag Society, Opp.Santaram Complex, Nirnaynagar ,Ahemdabad</li>
                                    <li><i class="ion-ios-email-outline"></i>Mail Us: <a href="MailTo:shoeholic12911@gmail.com">shoeholic12911@gmail.com</a></li>
                                    <li><i class="ion-ios-telephone-outline"></i>Phone: <a href="%2b0025425456554">+918758961221</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- footer widget item end -->

                    <!-- footer widget item start -->
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="widget-item mt-40">
                            <h5 class="widget-title">Categories</h5>
                            <div class="widget-body">
                                <ul class="useful-link">
                                   <?php
										$sql="select * from category ";
										$result=mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($result))
										{
											?>
                                    <li><a href="#"></a><?php echo $row['C_name']?></li>
									<?php
										}
										?>
                                </ul>
                            </div>
                        </div>
                    </div>
						
                    <!-- footer widget item end -->

                    <!-- footer widget item start -->
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="widget-item mt-40">
                            <h5 class="widget-title">Information</h5>
                            <div class="widget-body">
                                <ul class="useful-link">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="aboutus.php">About Us</a></li>
                                    <li><a href="contactus.php">Contact Us</a></li>
                                    <li><a href="#">Returns & Exchanges</a></li>
                                    <li><a href="#">Shipping & Delivery</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- footer widget item end -->

                    <!-- footer widget item start -->
                    <div class="col-xl-2 col-lg-3 offset-xl-1 col-md-6">
                        <div class="widget-item mt-40">
                            <h5 class="widget-title">Quick Links</h5>
                            <div class="widget-body">
                                <ul class="useful-link">
                                    <li><a href="#">Store Location</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Orders Tracking</a></li>
                                    <li><a href="#">Size Guide</a></li>
                                    <li><a href="#">Shopping Rates</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- footer widget item end -->
                </div>
            </div>
        </div>
        <!-- footer main area end -->

        <!-- footer bottom area start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1">
                        <div class="copyright-text text-center text-md-left">
                            <p>Copyright 2019 <a href="index.php">Shoeholic</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <div class="footer-social-link text-center text-md-right">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom area end -->

    </footer>
    <!-- End Footer Area Wrapper -->

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
						<h5>Cart Items</h5>
						<br>
						<br>
                        <ul>
						
						<?php
						    $id = $_SESSION['User_id'];
							$sql1="select * from `cart` c join user u join product p where c.user_id= u.user_id and c.P_id=p.P_id and c.user_id='".$id."'";				
							$result1=mysqli_query($conn,$sql1);
							while ($row1=mysqli_fetch_array($result1))
							{
	
						?>
						
                            <li class="minicart-item">
                               
							   <div class="minicart-thumb">
                                    <a href="#">
                                        <img src="assets/img/product/<?php echo $row1['P_image']?>"></a>
                                    </a>
                                </div>
                                <div class="minicart-content">
                                    <h3 class="product-name">
                                        <a href="product details.php"><?php echo $row1['P_name']?></a>
                                    </h3>
                                    <p>
                                        <span class="cart-quantity"><?php echo $row1['Cart_quantity']?> <strong>&times;</strong></span>
                                        <span class="cart-price"><?php echo $row1['Cart_price']?></span>
                                    </p>
                                </div>
</li>
<?php

							}?>

                    <div class="minicart-button">
                        <a href="cart1.php"><i class="fa fa-shopping-cart"></i> view cart</a>
                       
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


<!-- Mirrored from demo.hasthemes.com/juan-preview-v1/juan/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2019 08:05:38 GMT -->
</html>