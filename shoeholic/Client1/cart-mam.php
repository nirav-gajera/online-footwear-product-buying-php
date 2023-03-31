<?php include("header.php");
?>
<?php

$uid = $_SESSION['user_id'];
$sql="select * from cart c join product p  join gallery i where c.Product_id=p.Product_id and p.Product_id=i.Product_id 
and c.user_id = $uid;";
$result=mysqli_query($con,$sql);
?>
<br/> <br/> <br/>
<div class="belly-bredcrumb-section">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
    </div>
</div>


        <!-- Cart Page Start -->
        <div class="cart_area cart-area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">				
                            <!-- Cart Table -->
                            <div class="cart-table table-responsive mb--40">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Image</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									while($row=mysqli_fetch_array($result))
									{
										$cid = $row['Cart_id'];
									?>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img src="imagess/<?php echo $row['image_path']?>" alt="Product"></a></td>
                                            <td class="pro-title"><a href="#"><?php echo $row['Product_name']?></a></td>
                                            <td class="pro-price"><span>₹<?php echo $row['Price']?></span></td>
                                            <td class="pro-quantity"><div class="pro-qty"><div class="count-input-block">
                                                <input type="number" class="form-control text-center" value="<?php echo $row['Quantity']?>">
                                                
                                            </div></div></td>
                                            <td class="pro-subtotal"><span>₹<?php echo $row['Amount']?></span></td>
                                            <td class="pro-remove"><a href="cartdelete.php?id=<?php echo $row['Cart_id']?>"><i class="far fa-trash-alt"></i></a></td>
                                        </tr>
									<?php } ?>
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </form>	
                            
                        <div class="row">

                            <div class="col-lg-6 col-12 mb--15">
                                <!-- Calculate Shipping -->
                                <div class="calculate-shipping">
                                    <h4>Calculate Shipping</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb--25">
                                                <select class="nice-select">
                                                    <option>Bangladesh</option>
                                                    <option>China</option>
                                                    <option>country</option>
                                                    <option>India</option>
                                                    <option>Japan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb--25">
                                                <select class="nice-select">
                                                    <option>Dhaka</option>
                                                    <option>Barisal</option>
                                                    <option>Khulna</option>
                                                    <option>Comilla</option>
                                                    <option>Chittagong</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb--25">
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                            <div class="col-md-6 col-12 mb--25">
                                                <input type="submit" value="Estimate">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Discount Coupon -->
                                <div class="discount-coupon">
                                    <h4>Discount Coupon Code</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb--25">
                                                <input type="text" placeholder="Coupon Code">
                                            </div>
                                            <div class="col-md-6 col-12 mb--25">
                                                <input type="submit" value="Apply Code">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Cart Summary -->
                            <?php
				$uid=$_SESSION['user_id'];
				$sql= "select sum(Amount) as Price from cart where user_id = '".$uid."'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				$amt = $row['Price'];
				?>
							<div class="col-lg-6 col-12 mb--40 d-flex">
                                <div class="cart-summary">
                                    <div class="cart-summary-wrap" data-to=<?php echo $row['Price']?>>
                                        <h4>Cart Summary</h4>
                                        <p>Sub Total <span>₹<?php echo $row['Price']?> </span></p>
                                        <p>Shipping Cost <span>₹00.00</span></p>
                                        <h2>Grand Total <span>₹<?php echo $row['Price']?></span></h2>
                                    </div>
                                    <div class="cart-summary-button">
                                        <a href='checkout2.php?amount=<?php echo $amt?>'><button class="checkout-btn">Checkout</button></a>
                                        <button class="update-btn">Update Cart</button>
                                    </div>
                                </div>
                            </div>
							

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End --> 

          
  <!-- Site Bottom Starts -->
  <?php include("footer.php");
  ?>