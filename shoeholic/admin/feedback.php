<?php include('header.php');?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Feedback Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Feedback id</th>
                            <th>Feedback</th>
                            <th>Feedback date</th>
							<th>User name</th>
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php
						   require_once('../config/connection.php');
						  $sql="select * from feedback f join user u where f.User_id=u.User_id";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {
						  ?>
						  <tr>
							<td><?php echo $row['F_id']?></td> 
							<td><?php echo $row['Feedback']?></td>
							<td><?php echo $row['F_date']?></td>
							<td><?php echo $row['User_name']?></td>
							
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
        