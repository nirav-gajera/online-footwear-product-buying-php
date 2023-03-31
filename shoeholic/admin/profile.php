<?php 

include('header.php');



	$id=$_SESSION['User_name'];
	
	if(isset($_GET['id']) && isset($_GET['name']))
	{
		$name=$_GET['id'];
	$sql = "select * from user where User_id = '".$id."'";
	//echo $sql;
	//die;                   
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	}
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
           <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
					<img src="../Images/<?php echo $row['User_img']?>"height="70" width="70" style="border-radius:50%">
                      
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $row['User_name']?></a>
                      </div>
                      
                    </div>
                    <div class="text-center">
                      <div class="author-box-description">
                        <p>
                          
                        </p>
                      </div>
                      <div class="mb-2 mt-3">
                        
                      </div>
                      <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-github">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                      <div class="w-100 d-sm-none"></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Personal Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                      <p class="clearfix">
                        <span class="float-left">
                          Email
                        </span>
                        <span class="float-right text-muted"> <?php echo $row['Email']?>
                          
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Contact no
                        </span>
                        <span class="float-right text-muted"><?php echo $row['Contact_no']?>
                          
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Area Name
                        </span>
                        <span class="float-right text-muted"><?php echo $row['Area_name']?>
                          
                        </span>
                      </p>
                      
                    </div>
                  </div>
                </div>
               
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">Setting</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                          <div class="col-md-3 col-6 b-r">
                            <strong>Full Name</strong>
                            <br>
                            <p class="text-muted">Shoeholic</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Mobile</strong>
                            <br>
                            <p class="text-muted">+917383171393</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Email</strong>
                            <br>
                            <p class="text-muted">shoeholic12911@gmail.com</p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Location</strong>
                            <br>
                            <p class="text-muted">Ahmedabad</p>
                          </div>
                        </div>
                        <p class="m-t-30">
						 Shoeholic is an online and user friendly web application for online shoes shopping. Using the web application,
						 customers can buy different type of shoes online.
						 Our website provides stylish, comfortable and casual footwear  for different category wise like  man’s, woman’s and kid’s
                          </p>
                        
                        <div class="section-title"></div>
                        <ul>
                          
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="post" class="needs-validation">
                          <div class="card-header">
                            <h4>Edit Profile</h4>
                          </div>
                          <div class="card-body">
                            <div class="row">
							<img src="../Images/<?php echo $row['User_img']?>"height="50" width="50" style="border-radius:50%">
							<div class="section-title">Profile Photo</div>
                    <div class="form-group">
                      <input type="file" class="form-control" id="customFile" name="User_img" value="<?php echo $row1['User_img'] ?>">
							
							
                              <div class="form-group col-md-7 col-12">
                                <label>User Name</label>
                                <input type="text" class="form-control" name="User_name" value="<?php echo $row['User_name']?>">
                                <div class="invalid-feedback">
                                  Please Enter User name
                                </div>
                              </div>
							   <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Email</label>
                                <input type="text" class="form-control" name="Email" value="<?php echo $row['Email']?>">
                                <div class="invalid-feedback">
                                  Please Enter Email
                                </div>
                              </div>	
						  
						  <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Address</label>
                                <input type="textarea" class="form-control" name="Address" value="<?php echo $row['Address']?>">
                                <div class="invalid-feedback">
                                  Please Enter Address
                                </div>
                              </div>
							  
						<div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Contact no</label>
                                <input type="text" class="form-control" name="Contact_no" value="<?php echo $row['Contact_no']?>">
                                <div class="invalid-feedback">
                                  Please Enter Contact no
                                </div>
         
		 </div>							  
                               <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Password</label>
                                <input type="text" class="form-control" name="Password" value="<?php echo $row['Password']?>"/>
                                <div class="invalid-feedback">
                                  Please Enter Password
                                </div>
                              </div>

							
							<div class="form-group">
                   
					
                      <label>Area Name</label>
                      <select class="form-control" name="Area_id" value="<?php echo $row['Area_id']?>">
					  <?php
                                $sql2="select * from area";
								$result2 = mysqli_query($conn,$sql2);
								while($row2=mysqli_fetch_array($result2))
								{
							 ?>
								<option value="<?php echo $row2['Area_id'];?>"
								<?php if($row2['Area_name']==$id){echo 'selected';}?>> 
								<?php echo $row2['Area_name'];?>
								</option>
								<?php
								}
								?>
						</select>
						
                            
                            
                          <div class="card-footer text-right">
                            <button class="btn btn-primary">Save Changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["User_name"]) && isset($_POST["User_img"]) && isset($_POST["Email"]) && isset($_POST["Address"]) && isset($_POST["Contact_no"]) && isset($_POST["Password"]) 
			&& isset($_POST["Area_id"]))
		{
			$User_name=$_POST["User_name"];
			$User_img=$_POST["User_img"];
			$Email=$_POST["Email"];
			$Address=$_POST["Address"];
			$Contact_no=$_POST["Contact_no"];
			$Password=$_POST["Password"];
			$Area_id=$_POST["Area_id"];
							
			if(($User_name!='') && ($User_img!='') && ($Email!='') && ($Address!='') && ($Contact_no!='') && ($Password!='') && ($Area_id!=''))
			{				
				$sql="update user set User_name='".$User_name."',User_img='".$User_img."',Email='".$Email."',Address='".$Address."' ,Contact_no='".$Contact_no."' 
				,Password='".$Password."',Area_id='".$Area_id."'  where User_id = '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=user.php'>";

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
      <?php 
	  include('footer.php')?>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/summernote/summernote-bs4.js"></script>
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 14:22:21 GMT -->
</html>
