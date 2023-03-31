<?php include('header.php');
require_once('../config/connection.php');

if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['bname']))
{
$id = $_GET['id'];
$name = $_GET['name'];
$bname=$_GET['bname'];


$sql="select * from product where P_id = '".$id."'";
//echo $sql;
//die;
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
                    <h4>Product Update</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Product Name </label>
                      <input type="text" class="form-control" name="P_name" value="<?php echo $row1['P_name'] ?>">
                    </div>
					<div class="form-group">
                      <label>Descirption</label>
                      <input type="text" class="form-control" name="P_des" value="<?php echo $row1['P_des'] ?>"></textarea>
                    </div>
					<div class="form-group">
                      <label>Price </label>
                      <input type="text" class="form-control" name="P_price" value="<?php echo $row1['P_price'] ?>">
                    </div>
					
					<div class="form-group">
                      <label>Quantity</label>
                      <input type="text" class="form-control" name="P_quantity" value="<?php echo $row1['P_quantity'] ?>">
                    </div>
					
					 <div class="section-title"> Image</div>
                    <div class="form-group">
                      <input type="file" class="form-control" id="customFile" name="P_image" value="<?php echo $row1['P_image'] ?>">
                     
                    </div>
					<div class="form-group">
                      <label>Size</label>
                      <input type="text" class="form-control" name="P_size" value="<?php echo $row1['P_Size'] ?>">
                    </div>
					
					<div class="form-group">
                      <label>Colour</label>
                      <input type="text" class="form-control" name="P_colour" value="<?php echo $row1['P_colour'] ?>">
                    </div>
               
					<div class="form-group">
                      <label>Sub-Category Name</label>
                      <select class="form-control" name="Sub_C_id">
                        <?php
                                $sql2="select * from `sub-category`";
								$result2 = mysqli_query($conn,$sql2);
								while($row2=mysqli_fetch_array($result2))
								{
							 ?>
								<option value="<?php echo $row2['Sub_C_id'];?>"
								<?php if($row2['Sub_C_name']==$name){echo 'selected';}?>> 
								<?php echo $row2['Sub_C_name'];?>
								</option>
								<?php
								}
								?>
                      </select>
                    </div>
					
					<div class="form-group">
                      <label>Brand Name</label>
                      <select class="form-control" name="Brand_id">
                        <?php
                                $sql2="select * from brand";
								$result2 = mysqli_query($conn,$sql2);
								while($row2=mysqli_fetch_array($result2))
								{
							 ?>
								<option value="<?php echo $row2['Brand_id'];?>"
								<?php if($row2['Brand_name']==$bname){echo 'selected';}?>> 
								<?php echo $row2['Brand_name'];?>
								</option>
								<?php
								}
								?>
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
        </section>
		<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
		if(isset($_POST['P_name']) && isset($_POST['P_des']) && isset($_POST['P_price']) && isset($_POST['P_image'])
			&& isset($_POST['P_size']) && isset($_POST['P_colour']) && isset($_POST['P_quantity']) && isset($_POST['Brand_id']) && isset($_POST['Sub_C_id']))
		{
			$P_name = $_POST['P_name'];
			$P_des = $_POST['P_des'];
			$P_price = $_POST['P_price'];
			$P_image = $_POST['P_image'];
			$P_size = $_POST['P_size'];
			$P_colour = $_POST['P_colour'];
			$Brand_id = $_POST['Brand_id'];
			$Sub_C_id = $_POST['Sub_C_id'];
			$P_quantity = $_POST['P_quantity'];
			
			
			if($P_name!='' && $P_des!='' && $P_price!='' && $P_image!='' && $P_size!='' && $P_colour!=''
			&& $Brand_id!='' && $Sub_C_id!='' && $P_quantity!='')
			{
				$sql = "update product set P_name='".$P_name."',P_des='".$P_des."',P_price='".$P_price."',P_image='".$P_image."',
						P_size='".$P_size."',P_colour='".$P_colour."',P_quantity='".$P_quantity."',Brand_id='".$Brand_id."',Sub_C_id='".$Sub_C_id."' 
						where P_id='".$id."'";
				
				
				
				$result = mysqli_query($conn,$sql);
				
				if($result)
				{
					echo "<meta http-equiv='refresh' content='0;url=product.php'>";
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