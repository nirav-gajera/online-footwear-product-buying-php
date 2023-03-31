<?php 
session_start();
require_once("../config/conn.php");

	  if(isset($_SESSION['User_id']))
	  {
	  
	  $d = date("d-m-y");
	  $uid = $_SESSION['User_id'];
	  $pid = $_GET['P_id'];
	  $qty = $_GET['qty'];

	  $sql1 = "select P_price from product where P_id = '".$pid."'";
	 
	  
	  $result1 = mysqli_query($conn,$sql1);
	  $row1=mysqli_fetch_array($result1);
	  
	  $amount = $row1['P_price'];		

	  $total = $amount * $qty;
	  
	  $sql3 = "select * from cart where P_id=$pid and User_id=$uid";	 
	  //echo $sql3;
	  //die;
	  
	  $result3 = mysqli_query($conn,$sql3);
	  
	  if(mysqli_num_rows($result3) == 1)
	  {
		$row3 = mysqli_fetch_array($result3);  
		$q = $row3['Cart_quantity'];
		$amt = $row3['Cart_price'];
		$amt = $amt + $total;
		$nq = $q + $qty;		
		
		$sql = "update cart set Cart_quantity = $nq , Cart_price = $amt where User_id = $uid and P_id=$pid";
	  
	  
	  }
	  else
	  {
	  $sql="insert into cart(Cart_date,User_id,P_id,Cart_quantity,Cart_price)
	  values('".$d."','".$uid."','".$pid."','".$qty."','".$total."')";
	  //echo $sql;
	  //die;
	  
	  }
	  $result=mysqli_query($conn,$sql);
	  
	  if($result)
	  {
		  echo "<meta http-equiv='refresh' content='0;url=cart1.php'>"; 
	  }
	  else
	  {
		  echo "<meta http-equiv='refresh' content='0;url=shop-single.php'>"; 
	  }
	  }
 ?>