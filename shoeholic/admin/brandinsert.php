<?php include('header.php');?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <form enctype="multipart/form-data" method="post">
				<div class="card">
                  <div class="card-header">
                    <h4>Brand Insert</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Brand Name</label>
                      <input type="text" name="Brand_name" class="form-control">
                    </div>
					
		<div class="form-group">
                        <label for="colorpicker-rgb" class="col-sm-4 control-label">Brand Logo</label>
                        <div class="col-sm-8">
						
			<span class="btn btn-green fileinput-button">
                              <i class="fa fa-plus"></i>
                              <span> Select Image</span>
                              <input type="file" name="image">
                           </span>
                   
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>
                
                  </div>
                </div>
              </div>
            </form>
            </form>
	</div>
          </div>
        </section>



<?php
require_once("../config/connection.php");


if($_SERVER["REQUEST_METHOD"]=="POST")
{
   if(isset($_POST['Brand_name']) && isset($_FILES['image']))
   {
		
	  $Brand_name = $_POST['Brand_name'];	
      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];
	  
	  
         if(move_uploaded_file($file_tmp,"../Images/".$file_name)==1)
		 {
			 $query="INSERT INTO brand(Brand_name,Brand_logo) 
			 values('".$Brand_name."','".$file_name."')";
	
			 
				echo "Success";
				$result=mysqli_query($conn,$query);
				
				if($result)
				{
					 echo "<meta http-equiv='refresh' content='3;url=brand.php'>";

				}
		 }
      else{
         echo "value not set";
      }
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
