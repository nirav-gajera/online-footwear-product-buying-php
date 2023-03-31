  <?php 
session_start();
require_once("../config/connection.php");

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
						alert('Password Sucessfully Reset...!');
						window.location='login.php';
					</script>";
	
		}
	
	
}
?>

<!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 14:22:21 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Shoeholic - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico'/>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
			  
                <h4>OTP </h4>
              </div>
              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">OTP</label>
                    <input id="" type="text"  name="otp" class="form-control" name="" tabindex="1" required>
                    <div class="invalid-feedback">
                      OTP is Required
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">New Password</label>
                      
                    </div>
                    <input id="password" type="password" class="form-control" name="newpassword" tabindex="2" required>
                    <div class="invalid-feedback">
                     Password is Required
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Confirm Password</label>
                      
                    </div>
                    <input id="password" type="password" class="form-control" name="cpassword" tabindex="2" required>
                    <div class="invalid-feedback">
                      Password is Required
                    </div>
                  </div>
				                    
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Submit
                    </button>
                  </div>
                </form>
                
                
             

            
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 14:22:21 GMT -->
</html>