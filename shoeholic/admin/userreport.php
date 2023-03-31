<?php include('header.php');

require_once('../config/connection.php');
						  $sql="select * from user";
					 $flag=0;	
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				
			
				if(isset($_POST["n1"]) && isset($_POST["n2"]))
				{
					$start = $_POST["n1"];
					$end = $_POST["n2"];
					
					$sql  = $sql . " and Created_date between '".$start."' and '".$end."'";
					$flag=1;
				}
					
			
			}
						  
						 $result=mysqli_query($conn,$sql);

?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>User Table</h4>
                  </div>
                  <div class="card-body">
				  <?php
				   
				if($flag==0)
				{
					$str = "Reports/index6.php";
				}
				else 	
				{
					$str = "Reports/index6.php?d1=$start&d2=$end";
				}
			?>	
			
			<h4 style="text-align:right;"> <a href=<?php echo $str?>>Generate Reports</a> </h4>
              <h4 class="card-title">Reports </h4>
							<form align="center" method="POST">
							<!--Start Date &nbsp&nbsp&nbsp <input type="Date" name="n1">
							End Date &nbsp&nbsp&nbsp <input type="Date" name="n2">
							<input type="submit" name="btn1" value="Submit">
							</form>--> 
				  
			<label>User Name</label>
                      <select class="form-control" name="User_id" value="<?php echo $row['User_id']?>">
					  <?php
                                $sql2="select * from user";
								$result2 = mysqli_query($conn,$sql2);
								while($row2=mysqli_fetch_array($result2))
								{
							 ?>
								<option value="<?php echo $row2['Area_id'];?>"
								<?php if($row2['User_name']==$id){echo 'selected';}?>> 
								<?php echo $row2['User_name'];?>
								</option>
								<?php
								}
								?>
						</select>
						<input type="submit" name="btn1" value="Submit">
							</form>

				  
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact_no</th>
							<th>Created Date</th>
                           
                            
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php
						   require_once('../config/connection.php');
						  $sql="select * from user u Join area a where u.Area_id=a.Area_id";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {
						  ?>
						  <tr>
							<td><?php echo $row['User_name']?></td> 
							<td><?php echo $row['Email']?></td>
							<td><?php echo $row['Address']?></td>
							<td><?php echo $row['Contact_no']?></td>
							<td><?php echo $row['Created_date']?></td>
							
							<?php
						  }
						  ?>

                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
		<?php include('footer.php');?>
        