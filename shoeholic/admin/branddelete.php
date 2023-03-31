<?php
	require_once('../config/connection.php');
	
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "delete from brand where Brand_id = $id";
		//echo $sql;
		//die;
		$result = mysqli_query($conn,$sql);
		
		if($result)
		{
			header("Location:brand.php?msg=success");
		}
		else
		{
			header("Location:brand.php?msg=failure");
		}
	}
?>