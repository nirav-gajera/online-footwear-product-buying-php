<?php
include('header1.php');
require_once("../config/conn.php");

if($_SERVER["REQUEST_METHOD"] =="POST")
{
	if(isset($_POST["Email"])&& isset($_POST["User_name"])  && isset($_POST["Password"]) && isset($_POST["Address"]) && isset($_POST["Contect-no"]))
	{
		$email=$_POST["Email"];
		$User_name=$_POST["User_name"];
		$password=$_POST["Password"];
		$address=$_POST["Address"];
		$contact_no=$_POST["Contect-no"];
		$area=$_POST['Area_id'];
		
		
         		
		if(isset($_POST["Email"]) && isset($_POST["User_name"]) && isset($_POST["Password"])&& isset($_POST["Address"])&& isset($_POST["Contect-no"]))
		{
			$sql="insert into user(Email,User_name,Password,Address,Contact_no,Area_id)values('".$email."','".$U_name."','".$password."','".$address."','".$contact_no."','".$area."')";
			//echo $sql;
			//die;
			
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result);
			if($result)
			{
		
				echo"<meta http-equiv='refresh' content='0;login.php'>";
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
                                <h1 class="breadcrumb-title">Register</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Register</li>
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
                                <h2>Singup Form</h2>
                                <form method="post">
								<div class="single-input-item">
                                        <input type="text" name="User_name" placeholder="User name" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" name="Email" placeholder="Email" required />
                                    </div>
                                    
									 <div class="single-input-item">
                                        <input type="text" name="Address" placeholder="Address" required />
                                    </div>
									 <div class="single-input-item">
                                        <input type="text" name="Contact_no" placeholder="Contact-no" required />
                                    </div>
									<div class="single-input-item">
									
									<div class="form-group">
									<label></label>
									<select class="form-control" name="Area_id">
									<option readonly selected>Area name</option>
									<?php
									$sql="select * from area";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_array($result))
									{
									?>
									
									<option value="<?php echo $row['Area_id'];?>">
									<?php echo $row['Area_name'];?>
									</option>
									<?php
									}
									?>
									
									</select>
									</div>
									</div>
									
                                   <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-input-item">
                                                <input type="password" name="Password" placeholder="Enter your Password" required />
                                            </div>
                                        </div>
                                       
                                        </div>
										
                                    
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
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->
    </main>
    <!-- main wrapper end -->

   