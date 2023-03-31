 <?php


session_start();
 include("header.php");
?>
<?php
require_once("../config/conn.php");
$uid = $_SESSION['User_id'];
$sql="select * from cart c join product p where c.P_id=p.P_id  and c.User_id='".$uid."'";




$result=mysqli_query($conn,$sql);
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
                                            <th class="pro-price">product Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total amount</th>
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
                                            <td class="pro-thumbnail"><a href=""><img src="assets/img/product/<?php echo $row['P_image']?>" alt="Product"></a></td>    
											<td class="pro-title"><a href="#"><?php echo $row['P_name']?></a></td>
                                            <td class="pro-price"><span>₹<?php echo $row['P_price']?></span></td>
                                            <td class="pro-quantity"><div class="pro-qty"><div class="count-input-block">
                                                <input type="number" class="form-control text-center" value="<?php echo $row['Cart_quantity']?>">
                                                
                                            </div></div></td>
											<td class="pro-price"><span>₹<?php echo $row['Cart_price']?></span></td>
                                            <!--<td class="pro-subtotal"><span></span></td>-->
                                              <td class="pro-remove"><a href="cartdelete.php?id=<?php echo $row ['Cart_id']?>"><i class="fa fa-trash-o"></i></a></td>

                                        </tr>
									<?php } ?>
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </form>	
                            
                       <div class="cart-update-option d-block d-md-flex justify-content-between">
                                <div class="apply-coupon-wrapper">
                                    <form action="#" method="post" class=" d-block d-md-flex">
                                       
                                    </form>
                                </div>
                                <div class="cart-update">
                                    <a href="#" class="btn">Update Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
							 <?php
				$uid=$_SESSION['User_id'];
				$sql= "select sum(Cart_price) as amount from cart where User_id = '".$uid   ."'";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result);
				$amt = $row['amount'];
				?>
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h3>Cart Totals</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                               <td> Sub Total</td>
											   <td><span>Rs.<?php echo $amt;?></span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>Rs.50</td>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
												
                                                <td class="total-amount">Rs.<span><?php echo $amt+50;?></span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <a href='checkout2.php?amt=<?php echo $amt?>' class="btn d-block">Proceed Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
    </main>
        <!-- Cart Page End --> 

          
  <!-- Site Bottom Starts -->
  <?php include("footer.php");
  ?>