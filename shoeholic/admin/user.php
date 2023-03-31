<?php include('header.php');?>


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
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Name</th>
							<th>User Profile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact No</th>
                           
                            
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
							<td><img src="../Images/<?php echo $row['User_img']?>"height="50" width="50" style="border-radius:50%"></td>
							<td><?php echo $row['Email']?></td>
							<td><?php echo $row['Address']?></td>
							<td><?php echo $row['Contact_no']?></td>
							
							
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
        