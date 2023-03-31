<?php include('header.php');
 require_once('../config/connection.php');
 


?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
		  <form method="post">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Category Insert</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Category Name</label>
                      <input type="text" name="cname" class="form-control">
					 
                    </div>
					
					<div class="form-group">
                      <label>Description</label>
                      <textarea name="cdes" class="form-control"></textarea>
					 
                    </div>
                   
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>
                
                  </div>
                </div>
              </div>
			  </form>
 <?php


 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {


		if(isset($_POST['cname']) && isset($_POST['cdes']))
		{
			$cname = $_POST['cname'];
			$cdes = $_POST['cdes'];
			
			
			if($cname!='' && $cdes!='')
			{
				echo "value not null";
				$sql = "insert into category(C_name,C_des) values('".$cname."','".$cdes."')";
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;category.php'>";
				}
				else
				{
					echo "<meta http-equiv='refresh' content='0;categoryinsert.php'>";
					
				}
			}
		}
		else
		{
			echo "value not set";
		}
}


?>

  
			</div>
			
          </div>
        </section>
		
		<?php include('footer.php')?>
        
		<style>.error{color:pink:}</style>
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