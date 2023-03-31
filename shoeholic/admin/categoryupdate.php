<?php include('header.php');
require_once('../config/connection.php');

if(isset($_GET['id']) )
{
$id = $_GET['id'];
//$name = $_GET['name'];

$sql="select * from category where C_id = '".$id."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
}
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
			
              <div class="col-12 col-md-12 col-lg-12">
			  <form method="post">
                <div class="card">
                  <div class="card-header">
                    <h4>Category Update</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Category Name</label>
                      <input type="text" name="C_name" value="<?php echo $row['C_name'] ?>"class="form-control">
                    </div>
					<div class="form-group">
                      <label>Description</label>
                      <input type="text" name="C_des" value="<?php echo $row['C_des'] ?>"class="form-control">                    </div>
                   
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
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
		if (isset($_POST["C_name"]) && isset($_POST["C_des"]))
		{
			$C_name=$_POST["C_name"];
			$C_des=$_POST["C_des"];
							
			if(($C_name!='') && ($C_des!=''))
			{				
				$sql="update category set C_name='".$C_name."',C_des='".$C_des."' where C_id = '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=category.php'>";

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
        
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/basic-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 14:26:53 GMT -->
</html>