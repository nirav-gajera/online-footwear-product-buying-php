<?php
require_once("../config/conn.php");
if(isset($_GET['id']))
{
 $id=$_GET['id'];
 $sql="DELETE FROM cart WHERE Cart_id='".$id."'";
 $result=mysqli_query($conn,$sql);
}
echo "<meta http-equiv='refresh' content='0;url=cart1.php'>";
?>