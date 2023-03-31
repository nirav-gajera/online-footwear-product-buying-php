<?php 
session_start();
require_once("../config/connection.php");


	$id=$_SESSION['id'];
	$otp = $_POST['otp'];
	$nPass = $_POST['newpassword'];
	$cPass = $_POST['cpassword'];
	
	if ($nPass != $cPass) {
		echo "password must be same";
		exit;
	}
	
	$query = "update user set otpused = 1, 
	password = '".$nPass."' where email='".$id."' and 
	otp = '".$otp."'";
	
	echo $query;
	
	$result = mysqli_query($conn, $query);
	if ($result) {
		
		echo "		<script>
						alert('Password Sucessfully Reset !');
						window.location='login.php';
					</script>";
	
		}
	}
	
}
?>


<!DOCTYPE html>
<html>
  
<!-- Mirrored from tattek.sk/minimal/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:15:50 GMT -->
<head>
    <title>Minimal 1.3 - Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../../maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap/bootstrap-dropdown-multilevel.css">

    <link href="assets/css/minimal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body class="bg-1">
    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Make page fluid -->
      <div class="row">
        <!-- Page content -->
        <div id="content" class="col-md-12 full-page login">


          <div class="inside-block">
            <img src="assets/images/logo-big.png" alt class="logo">
            <h1><strong>Outdoor</strong> Kings</h1>
            

            <form id="form-signin" method="POST" class="form-signin">
              <section>
                <div class="input-group">
                  <input type="text" class="form-control" name="otp" placeholder="Enter OTP">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                </div>
				
				
                <div class="input-group">
                  <input type="password" class="form-control" name="newpassword" placeholder="Enter New Password">
                  <div class="input-group-addon"><i class="fa fa-key"></i></div>
                </div>
				
				
				<div class="input-group">
                  <input type="password" class="form-control" name="cpassword" placeholder="Re-enter New Password">
                  <div class="input-group-addon"><i class="fa fa-key"></i></div>
                </div>
				
				
              </section>  
              <section class="log-in">
                <button class="btn btn-greensea">Reset</button>
              </section>
            </form>
          </div>


        </div>
        <!-- /Page content -->  
      </div>
    </div>
    <!-- Wrap all page content end -->
  </body>

<!-- Mirrored from tattek.sk/minimal/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:15:51 GMT -->
</html>
      