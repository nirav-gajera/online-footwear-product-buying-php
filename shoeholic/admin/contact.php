<?php include('header.php');?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Contact Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Contact id</th>
                            <th>Contact Name</th>
                            <th>Contact Phone</th>
							<th>Contact Email</th>
							<th>Contact Message</th>
							<th>Contact Subject</th>
                          </tr>
                        </thead>
						
                        <tbody>
						<?php
						   require_once('../config/connection.php');
						  $sql="select * from contact";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {
							    $id=$row['Contact_id'];
						  ?>
                          <tr>
							<td><?php echo $row['Contact_id']?></td> 
							<td><?php echo $row['Contact_name']?></td>
							<td><?php echo $row['Contact_phone']?></td>
							<td><?php echo $row['Contact_email']?></td>
							<td><?php echo $row['Contact_message']?></td>
							<td><?php echo $row['Contact_subject']?></td>
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