<?php include('header.php');
require_once('../config/connection.php');
?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Category Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
					
					
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                    <a href="categoryinsert.php">Add record</a>                     
					 <thead>
                          <tr>
                            <th>Category id</th>
                            <th>Category name</th>
                            <th>Category description</th>
							<th>Delete</th>
							<th>Update</th>
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php
						   require_once('../config/connection.php');
						  $sql="select * from category";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {
							    $id=$row['C_id'];
						  ?>
						  <tr>
							<td><?php echo $row['C_id']?></td> 
							<td><?php echo $row['C_name']?></td>
							<td><?php echo $row['C_des']?></td>
							<td><a href="categorydelete.php?id=<?php echo $id?>"><img src="delete.png" height="30"><a></td>
							<td><a href="categoryupdate.php?id=<?php echo $id?>"><img src="update.png" height="30"><a></td>
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