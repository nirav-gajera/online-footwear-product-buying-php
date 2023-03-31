<!DOCTYPE html>
<?php
//session_start();

 include('header.php');
 require_once("../config/conn.php");
?>
<?php 
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$sql="select * from product p join `sub-category` s where p.Sub_C_id=s.Sub_C_id and p.P_id=$id";
		$result = mysqli_query($conn, $sql);
		$row=mysqli_fetch_array($result);
	}
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		$qty = $_POST['quantity'];
		echo "<meta http-equiv='refresh' content='0;url=Cart insert.php?P_id=$id&qty=$qty'>";
		
			
		
	
	}
	
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
                                <h1 class="breadcrumb-title">shop</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- product details wrapper start -->
        <div class="product-details-wrapper section-padding">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider mb-20">
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/<?php echo $row['P_image']?>"  alt=""/>
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/product-details-img2.jpg" alt=""/>
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/product-details-img3.jpg" alt=""/>
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/product-details-img4.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="pro-nav slick-row-5">
                                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img1.jpg" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img2.jpg" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img3.jpg" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img4.jpg" alt="" /></div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
										<form method = "post">
									<div class="product-details-des">
                                        <h3 class="pro-det-title"><?php echo $row['P_name']?></h3>
                                        <div class="pro-review">
                                            <span><a href="#">1 Review(s)</a></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">Rs <?php echo $row['P_price']?></span>
                                         
                                        </div>
                                        <p><?php echo $row['P_des']?></p>
										
										<?php
											if(isset($_SESSION['User_id']))
											{
												?>
											
										
																			
										    
											
                                       <div class="quantity-cart-box d-flex align-items-center mb-20">
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" name= "quantity" value="<?php echo $row['P_quantity']?>"></div>
                                            </div>
                                            <input type="submit" value="Add To Cart" class="btn btn-default"></a>
                                        </div>
										<?php
											}
										?>
									
										
											
                                        <div class="availability mb-20">
                                            <h5 class="cat-title">Availability:</h5>
                                            <span>In Stock</span>
                                        </div>
                                    </div>
										</form>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews section-padding">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_two">information</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_three">reviews</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p></p>
                                                    <div class="review-description">
                                                        <div class="tab-thumb">
                                                            <img src="assets/img/about/services.jpg" alt="">
                                                        </div>
                                                        <div class="tab-des">
                                                            <h3>Product Information :</h3>
                                                            <ul>
                                                                <li><?php echo $row['P_des'];?></li>
                                                                <li><?php echo $row['P_des'];?></li>
                                                                <li><?php echo $row['P_des'];?></li>
                                                                <li><?php echo $row['P_des'];?></li>
                                                                <li><?php echo $row['P_des'];?></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_two">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>color</td>
                                                            <td>black, blue, red</td>
                                                        </tr>
                                                        <tr>
                                                            <td>size</td>
                                                            <td>L, M, S</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="tab_three">
                                                <form action="#" class="review-form" method="POST">
                                                    <h5>1 review for <span>Chaz Kangeroo Hoodies</span></h5>
	  <?php
										$sql1="select * from feedback f join user u join product p where f.User_id=u.User_id and f.P_id=p.P_id and f.P_id='".$id."'";
										
			
										$result1=mysqli_query($conn,$sql1);
										while($row1=mysqli_fetch_array($result1))
										{
											?>                                                  
												  <div class="total-reviews">
                                                        <div class="rev-avatar">
                                                            <img src="assets/img/about/avatar.jpg" alt="">
                                                        </div>
													
                                                        <div class="review-box">
                                                            <div class="ratings">
                                                             
                                                            </div>
															
                                                            <div class="post-author">
                                                                <p><span><?php echo $row1['User_id'];?></span> <?php echo $row['F_date'];?></p>
                                                            </div>
                                                            <p><?php echo $row1['Feedback'];?></p>
                                                        </div>
                                                    </div>
													<?php
										}
										?>				
										 
                                                   
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                                            <textarea class="form-control" name="Message" required></textarea>
                                                            <div class="help-block pt-10"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                       
                                                    </div>
                                                   <input type="submit">
                                                </form> <!-- end of review-form -->
												
												
												<?php
												
if($_SERVER["REQUEST_METHOD"] =="POST")
{
	if(isset($_POST["Message"]))
	{
		$Message=$_POST["Message"];
		$User_id=$_SESSION["User_id"];
		$F_date=date('y-m-d');
		
		
         		
		if(isset($_POST["Message"]))
		{
			$sql="insert into feedback(Feedback,F_date,User_id,P_id)values('".$Message."','".$F_date."','".$User_id."','".$id."')";
			//echo $sql;
			//die;
			
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result);
			if($result)
			{
		
				echo"<meta http-equiv='refresh' content='0;index.php'>";
			}
			else
			{
				echo"Invalid Password";
			}
		}
	}
	}
												?>
												
												
												
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- product details reviews end --> 

                        <!-- featured product area start -->
                        <section class="Related-product">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="section-title text-center">
                                            <h2 class="title">Related Product</h2>
                                            <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product-carousel-4 mbn-50 slick-row-15 slick-arrow-style">
                                            <!-- product single item start -->
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">
                                                        <a href="product-details.html">Leather Mens Slipper</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price-regular">$80.00</span>
                                                        <span class="price-old"><del>$70.00</del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product single item start -->

                                            <!-- product single item start -->
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">
                                                        <a href="product-details.html">Quickiin Mens shoes</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price-regular">$80.00</span>
                                                        <span class="price-old"><del>$70.00</del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product single item start -->

                                            <!-- product single item start -->
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">
                                                        <a href="product-details.html">Rexpo Womens shoes</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price-regular">$80.00</span>
                                                        <span class="price-old"><del>$70.00</del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product single item start -->

                                            <!-- product single item start -->
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">
                                                        <a href="product-details.html">  Mens shoes</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price-regular">$80.00</span>
                                                        <span class="price-old"><del>$70.00</del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product single item start -->

                                            <!-- product single item start -->
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-5.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="product-name">
                                                        <a href="product-details.html">Leather Mens Slipper</a>
                                                    </h5>
                                                    <div class="price-box">
                                                        <span class="price-regular">$80.00</span>
                                                        <span class="price-old"><del>$70.00</del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product single item start -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- featured product area end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- product details wrapper end -->
    </main>
    <!-- main wrapper end -->

    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20">
                                    <div class="pro-large-img img-zoom">
                                        <img src="assets/img/product/product-details-img1.jpg" alt="product thumb" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="assets/img/product/product-details-img2.jpg" alt="product thumb"/>
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="assets/img/product/product-details-img3.jpg" alt="product thumb"/>
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="assets/img/product/product-details-img4.jpg" alt="product thumb"/>
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-5">
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img1.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img2.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img3.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img4.jpg" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="pro-det-title">Primitive Mens Premium Shoes</h3>
                                    <div class="pro-review">
                                        <span><a href="#">1 Review(s)</a></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$80.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
     <?php
											if(isset($_SESSION['User_id']))
											{
												?>
											<?php
											}
											else
											{
											?>	
										 
	  <div class="quantity-cart-box d-flex align-items-center mb-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <a href="cart.html" class="btn btn-default">Add To Cart</a>
                                    </div>
											<?php
											}
											?>
                                    <div class="availability mb-20">
                                        <h5 class="cat-title">Availability:</h5>
                                        <span>In Stock</span>
                                    </div>
                                    <div class="share-icon">
                                        <h5 class="cat-title">Share:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <?php include('footer.php')?>

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


<!-- Mirrored from demo.hasthemes.com/juan-preview-v1/juan/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2019 08:05:54 GMT -->
</html>