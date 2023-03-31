<!DOCTYPE html>
<?php include('header.php')

?>

    <!-- off-canvas menu end -->

    <!-- main wrapper start -->
    <main>
        <!-- hero slider section start -->
        <section class="hero-slider">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                            <!-- single slider item start -->
                            <div class="hero-single-slide">
                                <div class="hero-slider-item bg-img" data-bg="assets/img/banner/banner-2.jpg">
                                    <div class="hero-slider-content slide-1">
                                        <h5 class="slide-subtitle">Top Selling!</h5>
                                        <h2 class="slide-title">New Collection</h2>
                                        <p class="slide-desc">Wide range of Shoes. Choose from heels, loafers, floaters, sports shoes & more. Buy now! Best Deals. </p>
                                        <a href="shop.html" class="btn btn-hero">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single slider item end -->

                            <!-- single slider item start -->
                            <div class="hero-single-slide">
                                <div class="hero-slider-item bg-img" data-bg="assets/img/banner/banner-4.jpg">
                                    <div class="hero-slider-content slide-1">
                                        <h5 class="slide-subtitle">Best Selling!</h5>
                                        <h2 class="slide-title">Top Collection</h2>
                                        <p class="slide-desc">Wide range of Shoes. Choose from heels, loafers, floaters, sports shoes & more. Buy now! Best Deals. </p>
                                        <a href="shop.html" class="btn btn-hero">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single slider item end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero slider section end -->

        <!-- banner statistic area start -->
        <div class="banner-statistics mt-30">
            <div class="container">
                <div class="row mtn-30">
                    <div class="col-md-6">
                        <div class="img-container mt-30">
                            <a href="product-details.html">
                                <img src="assets/img/banner/banner-1.jpg" alt="banner-image">
                            </a>
                            <div class="banner-text">
                                <h5 class="banner-subtitle">sports shoes</h5>
                                <h3 class="banner-title">20% Off<br>For Sports men</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-container mt-30">
                            <a href="product-details.html">
                                <img src="assets/img/banner/banner-2.jpg" alt="banner-image">
                            </a>
                            <div class="banner-text">
                                <h5 class="banner-subtitle">sports shoes</h5>
                                <h3 class="banner-title">20% Off<br>For Sports men</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner statistic area end -->

        <!-- our product area start -->
        <section class="our-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">Our Product</h2>
                            <p class="sub-title">Our Products We are manufacturer and supplier best series of  Casual Shoes, Womens SportsShoes, Canvas Shoes, Mens Ankle Boots and Mens Sandals.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel-4 mbn-50 slick-row-15 slick-arrow-style">
                            <!-- product single item start -->
								<?php
										$sql="select * from product p join `sub-category` s where p.Sub_C_id=s.Sub_C_id";
										$result=mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($result))
										{
											?>
                            <div class="product-item mb-50">
                                <div class="product-thumb">
                               <a href="product details.php">
							    <a href="product details.php?id=<?php echo $row['P_id'];?>">
                                        <img height="200"src="assets/img/product/<?php echo $row['P_image']?>" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">

                                        <a href="product-details.html"><?php echo $row['P_name']?></a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">Rs<?php echo $row['P_price']?></span>
                                        
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
							<?php
										}
							?>
                            <!-- product single item start -->

                            
                            
                            <!-- product single item start -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our product area end -->

 <!-- testimonial section start -->
        <section class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-inner bg-img" data-bg="assets/img/banner/banner-bg.jpg">
                            <h2 class="testimonial-title">Client Say</h2>
                            <div class="testimonial-active slick-dot-style slick-dot-style__style-2">
                                <!-- testimonial item start -->
								<?php
										$sql="select * from feedback f join user u where f.F_id=u.User_id";
										$result=mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($result))
										{
											?>
                                <div class="slider-item">
                                    <div class="testimonial-item">
                                        <div class="testimonial-thumb">
                                            <img src="assets/img/banner/user.png" alt="client thumb">
                                        </div>
                                        <div class="testimonial-content">
											
                                            <h5 class="client"><?php echo $row['User_name']?></h5>
                                            <p><?php echo $row['Feedback']?></p>
										
                                        </div>
										
                                    </div>
                                </div>
								<?php
										}
										?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial section end -->


        <!-- top seller area start -->
        <section class="top-seller-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">top seller</h2>
                            <p class="sub-title">Wide range of Shoes for Men. Choose from loafers, floaters, sports shoes & more.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="product-banner">
                            <a href="#">
                                <img src="assets/img/banner/banner-3.jpg" alt="product banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7">
                        <div class="top-seller-carousel slick-row-15 mtn-30">
                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/pro-small-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Simple Fabric Shoe</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">Rs700.00</span>
                                            <span class="price-old"><del>Rs600.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/pro-small-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">exclusive mens shoe</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">Rs600.00</span>
                                            <span class="price-old"><del>Rs500.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/pro-small-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Quickiin Mens shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">Rs900.00</span>
                                            <span class="price-old"><del>Rs1000.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/pro-small-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Primitive Men shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">Rs800.00</span>
                                            <span class="price-old"><del>Rs900.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/pro-small-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Sports Mens shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">Rs500.00</span>
                                            <span class="price-old"><del>Rs600.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/pro-small-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Quickiin Mens shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$80.00</span>
                                            <span class="price-old"><del>$70.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top seller area end -->

        

        <!-- service features start -->
        <section class="service-policy-area section-padding">
            <div class="container">
                <div class="row mtn-30">
                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-1">
                            <div class="policy-icon">
                                <img src="assets/img/icon/policy-1.png" alt="policy icon">
                            </div>
                            <div class="policy-content">
                                <h5 class="policy-title">FREE SHIPPING</h5>
                                <p class="policy-desc">Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->

                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-2">
                            <div class="policy-icon">
                                <img src="assets/img/icon/policy-2.png" alt="policy icon">
                            </div>
                            <div class="policy-content">
                                <h5 class="policy-title">ONLINE SUPPORT</h5>
                                <p class="policy-desc">Online support 24 hours a day</p>
								</div>
                        </div>
                    </div>
                    <!-- single policy item start -->

                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-3">
                            <div class="policy-icon">
                                <img src="assets/img/icon/policy-3.png" alt="policy icon">
                            </div>
                            <div class="policy-content">
                                <h5 class="policy-title">MONEY RETURN</h5>
                                <p class="policy-desc">Back guarantee under 5 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->
                </div>
            </div>
        </section>
        <!-- service features end -->
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
                                        <span class="regular-price">Rs700</span>
                                        <span class="old-price"><del>Rs800</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mb-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <a href="cart.html" class="btn btn-default">Add To Cart</a>
                                    </div>
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