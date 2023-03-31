<?php
	require_once('../config/connection.php');
	
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "delete from `sub-category` where Sub_C_id = $id";
		//echo $sql;
		//die;
		$result = mysqli_query($conn,$sql);
		
		if($result)
		{
			header("Location:sub-category.php?msg=success");
		}
		else
		{
			header("Location:sub-category.php?msg=failure");
		}
	}
?>