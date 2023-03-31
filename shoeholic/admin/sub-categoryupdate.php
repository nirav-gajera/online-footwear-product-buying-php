		<?php include('header.php');
require_once('../config/connection.php');

if(isset($_GET['id']) && isset($_GET['name']))
{
$id = $_GET['id'];
$name = $_GET['name'];

$sql="select * from `sub-category` where Sub_C_id = '".$id."'";
$result=mysqli_query($conn,$sql);
$row1 = mysqli_fetch_array($result);
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
                    <h4>Sub-Category Update</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Sub-Category Name </label>
                      <input type="text" name="Sub_C_name" class="form-control" value="<?php echo $row1['Sub_C_name']?>">
                    </div>
					<div class="form-group">
                      <label> Descirption</label>
                      <input type="text" class="form-control" name="Sub_C_des" value="<?php echo $row1['Sub_C_des']?>">
                    </div>
                    <div class="form-group">
                      <label>Category</label>
					  
					  <select class="form-control" name="C_id">
                        <?php
                                $sql2="select * from category";
								$result2 = mysqli_query($conn,$sql2);
								while($row2=mysqli_fetch_array($result2))
								{
							 ?>
								<option value="<?php echo $row2['C_id'];?>"
								<?php if($row2['C_name']==$name){echo 'selected';}?>> 
								<?php echo $row2['C_name'];?>
								</option>
								<?php
								}
								?>
				   </option>
                        
                      </select>
                    </div>  
              			  
				
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>
                </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["Sub_C_name"]) && isset($_POST["Sub_C_des"]) && isset($_POST["C_id"]))
		{
			$Sub_C_name=$_POST["Sub_C_name"];
			$Sub_C_des=$_POST["Sub_C_des"];
			$C_id=$_POST["C_id"];
							
			if(($Sub_C_name!='') && ($Sub_C_des!='') && ($C_id!=''))
			{				
				$sql="update `sub-category` set Sub_C_name='".$Sub_C_name."',Sub_C_des='".$Sub_C_des."' ,C_id='".$C_id."' where Sub_C_id = '".$id."'";
		
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=sub-category.php'>";

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