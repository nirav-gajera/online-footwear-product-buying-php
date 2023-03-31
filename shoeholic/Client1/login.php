<?php 

	session_start();
include('header1.php');
require_once("../config/conn.php");
if($_SERVER["REQUEST_METHOD"]=="POST");
{
	if(isset($_POST["email"]) && isset($_POST["password"]))
	{
		$email=$_POST["email"];
		$password=$_POST["password"];
		if($email!=''&& $password!='')
		{
			$sql="select User_id,Email,Password,User_name from user where Email='".$email."' and password='".$password."' and Is_admin=0";
	      

		  $result=mysqli_query($conn,$sql);
			 if($row=mysqli_fetch_assoc($result))
			 {
				 $_SESSION['User_id']=$row['User_id'];
				 echo"<meta http-equiv='refresh' content='0;url=index.php'>";
			 }	 
			 else
			 {
				 echo"Invalid Password";
			 }
	    }	
		
	}
}	

?>
    
	
	
	
	
	
	
	<!-- off-canvas menu end -->

    <!-- main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h1 class="breadcrumb-title">Login</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Login</li>
									
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login register wrapper start -->
		<center>
        <div class="login-register-wrapper section-padding">
            <div class="container">
                <div class="member-area-from-wrap">
                    
                        <!-- Login Content Start -->
						
                        <div class="col-lg-6">
						<center>
                            <div class="login-reg-form-wrap">
                                <h2>Log In</h2>
                                <form action="#" method="post">
                                    <div class="single-input-item">
                                        <input type="email"  name="email" placeholder="Email or Username" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password" name="password"  placeholder="Enter your Password" required />
                                    </div>
                                    <div class="single-input-item">
                                        
                                    </div>
                                    <div class="single-input-item">
                                        <input type="submit" value="login" class="btn"></button>
                                    </div>
					
									<div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                          
                                            <a href="forgot_password.php" class="forgot-pwd" >Forgot Password?</a>
                                        </div>
									<div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                          
                                            <a href="register.php" class="forgot-pwd" >Sign Up</a>
                                        </div>
                                </form>
                            </div>
							</center>
                        </div>
                        <!-- Login Content End -->
    
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->
    </main>

    <!-- main wrapper end -->

  