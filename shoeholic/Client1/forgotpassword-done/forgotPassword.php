<?php
require_once("connection.php");
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		 
		echo $query = "select * from user where email = '".$username."'";
	
		$result = mysqli_query($conn, $query);
		$arr = array();
		if (mysqli_num_rows($result) == 1) {
			
			
			$row1=mysqli_fetch_array($result);
			
				$message = "<h3>Your password is   : " . $row1['Password'] . "</h3>";
				$subject = "Password";		
				$mailSent = send_mail($username, $message, $subject);
				if ($mailSent) {
					session_start();
					$_SESSION['id'] = $id;
					echo "<script>
								window.location='../index.php';
					      </script>";
				} else {
					
				}
				$array = array('status' => '200' , 'details' => $arr);

		}	
		
	} else {
		echo "asdasasdad"; die;
	}	 
}

?>


<html>
 <body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
    <input type = "text" name="username" id="uname" />
	<input type="submit" name="submit" />
  </form>
 </body>
</html>