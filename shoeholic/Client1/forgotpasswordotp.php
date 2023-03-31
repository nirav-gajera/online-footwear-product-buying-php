<?php 
session_start();
require_once("../config/conn.php");
include('header1.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$id=$_SESSION['id'];
	$otp = $_POST['otp'];
	$nPass = $_POST['newpassword'];
	$cPass = $_POST['cpassword'];
	
	if ($nPass != $cPass) {
		echo "password must be same";
		exit;
	}
	
	$query = "update user set otpused = 1, 
	Password = '".$nPass."' where Email='".$id."' and 
	otp = '".$otp."'";
	
	//echo $query;
	//die;
	
	$result = mysqli_query($conn, $query);
	if ($result) {
		
		echo "		<script>
						alert('Password Sucessfully Reset !');
						window.location='login.php';
					</script>";
	
		}
	
	
}
?>


<center>
<div style="margin-top:150px;">
<div class="col-6">
                            <div class="login-reg-form-wrap" >
                                <h2>Forgot Password OTP</h2>
 <form action="#" method="post" >
 
                                    <div class="single-input-item">
                                        <input type="text"  name="otp" placeholder="Enter your OTP" required />
                                    </div>
									
                                    <div class="single-input-item">
                                        <input type="Password"  name="newpassword" placeholder="Enter New Password" required />
                                    </div>
									
                                    <div class="single-input-item">
                                        <input type="Password"  name="cpassword" placeholder="Enter Confirm New Password" required />
                                    </div>
									
									<div class="single-input-item">
                                        <input type="submit" value="login" class="btn"></button>
                                    </div>
									</div>
									</div>
	</form>	
