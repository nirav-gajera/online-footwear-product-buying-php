<?php include('header.php');?>


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
							<th>Action<th>
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php
						    require_once('../config/connection.php');
						  $sql="select * from `order` o join user u where o.User_id=u.User_id ";
						 $result=mysqli_query($conn,$sql);
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
							<?php	
								if($row['Order_status']==0)
								{		
							?>
									<a href="order_accept.php?id=<?php echo $id?>&uid=<?php echo $uid?>" style="color:#18F70D;cursor:pointer" > ACCEPT </a> &nbsp; 
									<a href="order_reject.php?id=<?php echo $id?>&uid=<?php echo $uid?>" style="color:red;cursor:pointer"> REJECT </a> 
									
							<?php
								}
								else if($row['Order_status']==1)
								{
									echo "<h6 style='color:#18F70D'>ACCEPTED</h6>";
								}
								else if($row['Order_status']==2)
								{
									echo "<h6 style='color:red'>REJECTED</h6>";
								}
							?>
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