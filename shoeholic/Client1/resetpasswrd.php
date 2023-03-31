<?php include('header.php');
require_once('../config/conn.php');
	$id=$_SESSION['User_id'];
	
	
	$sql = "select * from user where User_id = '".$id."'";
	//echo $sql;
	//die;                   
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	

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
                                <h1 class="breadcrumb-title">My Account</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        
    
                        <!-- Register Content Start -->
						<center>
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap signup-form">
                                <h2>Reset Password Form</h2>
                                <form method="post">
								<div class="single-input-item">
                                        <input type="text" name="Email" value="<?php echo $row['Email'];?>" placeholder="Email" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="text" name="Current Password" value="<?php echo $row['Password'];?>" placeholder="Current Password" required />
                                    </div>
                                    
									 <div class="single-input-item">
                                        <input type="text" name="New Password" value="<?php echo $row[''];?>" placeholder="New Password" required />
                                    </div>
									 <div class="single-input-item">
                                        <input type="text" name="Conform Password" value="<?php echo $row[''];?>" placeholder="Conform Password" required />
                                    </div>
									<div class="single-input-item">
									
		
									
                                  
										
                                    
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn">Register</button>
                                    </div>
                                </form>
								</div>
                            </div>
                        </div>	
					</center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["Email"]) && isset($_POST["Current Password"]) && isset($_POST["New Password"]) && isset($_POST["Conform Password"]))
		{
			$Email=$_POST["Email"];
		
			$CurrentPassword=$_POST["Current Password"];
			$NewPassword=$_POST["NewPassword"];
		$ConformPassword=$_POST["ConformPassword];
							
			if(($Email!='') && ($CurrentPassword!='') && ($NewPassword!='') && ($ConformPassword!='') )
			{				
				$sql="update user set Email='".$Email."',CurrentPassword='".$CurrentPassword."',NewPassword='".$NewPassword."' ,ConformPassword='".$ConformPassword."' 
				,Password='".$Password."',Area_id='".$Area_id."'  where User_id = '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=acco.php'>";

				}
			}
			else
			{
					echo "Value is null";
			}
		}
		else
		{
				echo "Value not set";
		}
}

?>						
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->
    </main>
    <!-- main wrapper end -->
<?php
   include('footer.php');
   ?>