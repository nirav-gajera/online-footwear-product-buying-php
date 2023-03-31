<?php	
				include("header.php");
				require_once('../config/connection.php');
?>



         <div class="main-content">
        <section class="section">
          <div class="section-body">
		  <form method="post">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  </div>
                 <div class="card-header">
                    <h4>Sub Category Insert</h4>
                  </div>
                      <div class="card-body">
                    <div class="form-group">
                      <label>sub Category Name</label> <input type="text" name="subcatname" class="form-control" id="exampleInputPassword1">
                        </div><br>
						<div class="form-group">
                          <label for="exampleInputPassword1"> Description</label> &nbsp;
                          <input type="text" name="subcatdes" class="form-control" id="exampleInputPassword1">
						  <div class="invalid-feedback">
                      Please fill in your Description
                    </div>
                        </div><br>
						<div class="form-group">
                   
					
                      <label>Category Name</label>
                      <select class="form-control" name="category">
                         <?php
                                $sql="select * from category";
								$result = mysqli_query($conn,$sql);
								while($row=mysqli_fetch_array($result))
								{
							 ?>
								<option value="<?php echo $row['C_id']; echo $row['C_name']?>"><?php echo $row['C_name'];?>
								<?php
								}
								?>
                      </select>
                    </div>
                  
						<button type="submit" class="btn btn-primary mr-1">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                      </form>
					  
                    </di v>
                  </div>
                </div>
				
<?php
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if(isset($_POST['subcatname']) && isset($_POST['subcatdes']) && isset($_POST['category']))
		{
			$Sub_c_name = $_POST['subcatname'];
			$Sub_c_des = $_POST['subcatdes'];
			$C_name = $_POST['category'];
			
			
			if($Sub_c_name!='' && $Sub_c_des!='' && $C_name!='')
			{
				$sql = "insert into `sub-category`(Sub_c_name,Sub_c_des,C_id) values('".$Sub_c_name."','".$Sub_c_des."','".$C_name."')";
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=sub-category.php'>";
				}
			}
		}
		else
		{
			echo "value not set";
		}
}


?>
				
			
				
				  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../node_modules/icheck/icheck.min.js"></script>
  <script src="../../node_modules/typeahead.js/dist/typeahead.bundle.min.js"></script>
  <script src="../../node_modules/select2/dist/js/select2.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/iCheck.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
<?php include('footer.php')?>
</body>
 </html>