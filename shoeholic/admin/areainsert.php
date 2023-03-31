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
                    <h4>Area Insert</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Area Name</label>
                      <input type="text" name="areaname" class="form-control">
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

if($_SERVER["REQUEST_METHOD"]=="POST")
{
		if(isset($_POST['areaname']))
		{
			$areaname = $_POST['areaname'];
			
			
			if($areaname!='')
			{
				$sql = "insert into area(Area_name) values('".$areaname."')";
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
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