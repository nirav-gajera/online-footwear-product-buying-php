<?php
session_start();

require_once('../config/connection.php');

if(isset($_GET['id']))
{
	    $uid=$_GET['uid'];
		$id=$_GET["id"];

				
			$sql="update `order` set Order_status='1' where Order_id = '".$id."'";
			
				$result=mysqli_query($conn,$sql);
			
			
	
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=index.php'>";

				}
			}
		
		else
		{
				echo "Value not set";
		}

?>


