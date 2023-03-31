<?php include('header.php');?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Gallery Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <a href="galleryinsert.php">Add record</a>
						<thead>
                          <tr>
                            <th>Gallery id</th>
                            <th>Gallery Path</th>
                            <th>Gallery Description</th>
							<th>Delete</th>
							
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php
						   require_once('../config/connection.php');
						  $sql="select * from gallery";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {
							 $id=$row['Gallery_id']; 
						  ?>
						  <tr>
							<td><?php echo $row['Gallery_id']?></td> 
							<td><img src="../Images/<?php echo $row['Gallery_path']?>" height="50" width="50" style="border-radius:50%"></td>
							<td><?php echo $row['Gallery_des']?></td>
					        <td><a href="gallerydelete.php?id=<?php echo $id?>"><img src="delete.png" height="30"><a></td>
							
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