<?php include('header.php');
?>

<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Sub-category Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <a href="sub-categoryinsert.php">Add record</a>
 						<thead>
                          <tr>
                            <th>Sub-category id</th>
                            <th>Sub-category Name</th>
							<th>Sub-category Description</th>
							<th>Category name</th>
							<th>Delete</th>
							<th>Update</th>
                            
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php
						   require_once('../config/connection.php');
						  $sql="select * from `sub-category` s join category c where s.C_id=c.C_id ";
						
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {
							  $id=$row['Sub_C_id'];
							  $name=$row['C_name'];
						  ?>
						  <tr>
							<td><?php echo $row['Sub_C_id']?></td> 
							<td><?php echo $row['Sub_C_name']?></td>
							<td><?php echo $row['Sub_C_des']?></td>
							<td><?php echo $row['C_name']?></td>
							<td><a href="sub-categorydelete.php?id=<?php echo $id?>"><img src="delete.png" height="30"><a></td>
							<td><a href="sub-categoryupdate.php?id=<?php echo $id?>&name=<?php echo $name?>"><img src="update.png" height="30"><a></td>
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
        