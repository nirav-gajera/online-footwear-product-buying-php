<?php 
include('header.php');
require_once('../config/connection.php');
if(isset($_GET['id']) )
{
$id = $_GET['id'];
//$name = $_GET['name'];

$sql="select * from area where Area_id = '".$id."'";
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
                    <h4>Area Update</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Area Name</label>
                      <input type="text"  name="area_name" value="<?php echo $row['Area_name'] ?>" class="form-control">
                    </div>
					
                   
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>
                
                  </div>
                </div>
				</form>
              </div>
            </div>
          </div>
        </section>
		
	<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if(isset($_POST['area_name']))
		{
			$area_name=$_POST['area_name'];
		
			
			
			if($area_name!='')
			{
				$sql="update area set area_name='".$area_name."' where Area_id = $id";
				//echo $sql;
				//die;
				
			
				$result=mysqli_query($conn,$sql);
				
				if( $result)
				{
					echo "<meta http-equiv='refresh' content='0;url=Area.php'>";
				}
			}
		}
		else
		{
			echo "value not set";
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