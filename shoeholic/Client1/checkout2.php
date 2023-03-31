<?php
session_start();
require_once("../config/conn.php");
$uid=$_SESSION['User_id'];
$sql="select * from cart where User_id='".$uid."'";
$result=mysqli_query($conn,$sql);

$d= date("Y-m-d");
$t=$_GET['amt'];
$sql1="insert into `order`(Order_Date,Payment_Status,User_Id)
values('".$d."',0,'".$uid."')";

$result1=mysqli_query($conn,$sql1);
$oid=mysqli_insert_id($conn);

while($row=mysqli_fetch_array($result))
{
	$pid=$row['P_id'];
	//$paid=$row['PART_ID'];
	$qty=$row['Cart_quantity'];	
    $sql2="insert into `order details`(Quantity,Order_id,P_id,Amount)
	values('".$qty."','".$oid."','".$pid."','".$t."')";
	
	
	$result2=mysqli_query($conn,$sql2);
}
$sql3="delete from cart where User_id='".$uid."'";
$result3=mysqli_query($conn,$sql3);

if($result3)
{
echo "<meta http-equiv='refresh' content='0;url=Checkout.php?id=$oid&amt=$t&qty=$qty'>";
}	
?>
