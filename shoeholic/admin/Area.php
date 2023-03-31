<?php include('header.php');?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Area Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                       <a href="areainsert.php">Add record</a>
					   <thead>
                          <tr>
                            <th>Area id</th>
                            <th>Name</th>
							<th>Delete</th>
							<th>Update</th>
						
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php
						   require_once('../config/connection.php');
						  $sql="select * from  area";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {
							  $id=$row['Area_id'];
						  ?>
						  <tr>
							<td><?php echo $row['Area_id']?></td> 
							<td><?php echo $row['Area_name']?></td>
							<td><a href="areadelete.php?id=<?php echo $id?>"><img src="delete.png" height="30"><a>	</td>
							<td><a href="areaupdate.php?id=<?php echo $id?>"><img src="update.png" height="30"><a></td>							
							
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