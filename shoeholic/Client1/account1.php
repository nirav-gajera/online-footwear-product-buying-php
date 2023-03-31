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
                                <h2>Edit Profile Form</h2>
                                <form method="post">
								<div class="single-input-item">
                                        <input type="text" name="User_name" value="<?php echo $row['User_name'];?>" placeholder="User name" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" name="Email" value="<?php echo $row['Email'];?>" placeholder="Email" required />
                                    </div>
                                    
									 <div class="single-input-item">
                                        <input type="text" name="Address" value="<?php echo $row['Address'];?>" placeholder="Address" required />
                                    </div>
									 <div class="single-input-item">
                                        <input type="text" name="Contact_no" value="<?php echo $row['Contact_no'];?>" placeholder="Contact-no" required />
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
									
                                  
										
										
                                    
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn">Submit</button>
                                    </div>
                                </form>
								</div>
                            </div>
                        </div>	
					</center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["User_name"]) && isset($_POST["Email"]) && isset($_POST["Address"]) && isset($_POST["Contact_no"]) && isset($_POST["Area_id"]))
		{
			$User_name=$_POST["User_name"];
		
			$Email=$_POST["Email"];
			$Address=$_POST["Address"];
			$Contact_no=$_POST["Contact_no"];
			$Area_id=$_POST["Area_id"];
							
			if(($User_name!='') && ($Email!='') && ($Address!='') && ($Contact_no!='')  && ($Area_id!=''))
			{				
				$sql="update user set User_name='".$User_name."',Email='".$Email."',Address='".$Address."' ,Contact_no='".$Contact_no."' 
				,Area_id='".$Area_id."'  where User_id = '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=account.php'>";

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