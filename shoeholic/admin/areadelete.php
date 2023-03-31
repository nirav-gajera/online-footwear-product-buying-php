<?php
	require_once('../config/connection.php');
	
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$sql = "delete from area where Area_id = $id";
		//echo $sql;
		//die;
		$result = mysqli_query($conn,$sql);
		
		if($result)
		{
			header("Location:area.php?msg=success");
		}
		else
		{
			header("Location:area.php?msg=failure");
		}
	}
?>