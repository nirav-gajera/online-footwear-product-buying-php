<?php
					session_start();

 include('header1.php');
 require_once("../config/conn.php");
?>
<?php
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['username']) && !empty($_POST['username']))
	{

		$username = mysqli_real_escape_string($conn,$_POST['username']);

		
		$query = "select * from user where Email = '".$username."'";
					
		$result = mysqli_query($conn, $query);
		
		$row=mysqli_fetch_array($result);
		
		if (mysqli_num_rows($result) == 1) {
				//echo"123";
			//die;
			$arr = array();
		
				$to = $row['Email'];
				$arr = $row	;
				
			$otp = mt_rand(000000,999999);
			$query1 = "update user set otp = ".$otp.", otpused = 0 where 
			Email = '".$to."'";
			$result1 = mysqli_query($conn,$query1);
			
			if ($result1) {
				$message = "<h3>Your new OTP is ".$otp.". Please do not share</h3>";
				$subject = "Request For OTP";		
				$mailSent = send_mail($to, $message, $subject);
				if ($mailSent) {
					$_SESSION['id'] = $to;
					echo "<script>
								window.location='forgotpasswordotp.php';
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
 <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h1 class="breadcrumb-title">Forgot password</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">forgot password</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div style="margin-top:100px;">
<div>
<center>
					
<div class="col-lg-6">
                            <div class="login-reg-form-wrap">
                                <h2>Forgot Password</h2>
 <form action="#" method="post">
 
                                     <div class="single-input-item">
                                        <input type="email"  name="username" placeholder="Email or Username" required />
                                    </div>
									
									<div class="single-input-item">
                                        <button type="submit" class="btn"> OTP </button>
                                    </div>
									</form>
									</div>
									</div>
		
		
	</center>
