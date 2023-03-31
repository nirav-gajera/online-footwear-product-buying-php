<?php
	session_start();
	
	unset($_SESSION['User_name']);
	session_destroy();
	
	header("Location:login.php");
	exit();

?>