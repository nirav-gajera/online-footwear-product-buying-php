<?php include('header.php');
						    require_once('../config/connection.php');
						  $sql="select * from `order` o join user u where o.User_id=u.User_id ";
					 $flag=0;	
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				
			
				if(isset($_POST["n1"]) && isset($_POST["n2"]))
				{
					$start = $_POST["n1"];
					$end = $_POST["n2"];
					
					$sql  = $sql . " and Order_date between '".$start."' and '".$end."'";
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
                    <h4>Order Table</h4>
                  </div>
                  <div class="card-body">
				  <?php
				   
				if($flag==0)
				{
					$str = "Reports/index5.php";
				}
				else
				{
					$str = "Reports/index5.php?d1=$start&d2=$end";
				}
			?>	
			
			<h4 style="text-align:right;"> <a href=<?php echo $str?>>Generate Reports</a> </h4>
              <h4 class="card-title">Reports </h4>
							<form align="center" method="POST">
							Start Date &nbsp&nbsp&nbsp <input type="Date" name="n1">
							End Date &nbsp&nbsp&nbsp <input type="Date" name="n2">
							<input type="submit" name="btn1" value="Submit">
							</form>
							
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        
						<thead>
                          <tr>
                            <th>Order id</th>
                            <th>Description</th>
                            <th>Order date</th>
							<th>Payment status</th>
							<th>User name</th>
							<th>Order Status</th>
							
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php

						  while ($row=mysqli_fetch_array($result))
						  {			
										$id=$row['Order_id'];
										$uid=$row['User_id'];
						  
						  
						  ?>
						  <tr>
							<td><?php echo $row['Order_id']?></td> 
							<td><?php echo $row['Order_des']?></td>
							<td><?php echo $row['Order_date']?></td>
							<td><?php echo $row['Payment_status']?></td>
							<td><?php echo $row['User_name']?></td>
							<td><?php echo $row['Order_status']?></td>
							<td>  </a> 
								<br/> 
							
								</td>
                          </tr>
                          
							<?php }?>
							
						
                        
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