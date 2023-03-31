<?php
require_once("../config/connection.php");
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['User_name']) && !empty($_POST['User_name']))
	{
		
		$User_name = mysqli_real_escape_string($conn,$_POST['User_name']);
		
		$query = "select * from user where email = '".$User_name."'";
		
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) == 1) {
		
			$arr = array();
		
				$to = $row['email'];
				$arr = $row	;
				
			$otp = mt_rand(000000,999999);
			$query1 = "update user set otp = ".$otp.", otpused = 0 where 
			email = '".$to."'";
	
			$result1 = mysqli_query($conn,$query1);
			
			if ($result1) {
				$message = "<h3>Your new OTP is ".$otp.". Please do not share</h3>";
				$subject = "Request For OTP";		
				$mailSent = send_mail($to, $message, $subject);
				if ($mailSent) {
					session_start();
					$_SESSION['id'] = $to;
					echo "<script>
								window.location='resetPassword.php';
					      </script>";
				} else {
					
				}
				$array = array('status' => '200' , 'details' => $arr);
			}	
			
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