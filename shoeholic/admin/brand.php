<?php include('header.php');?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Brand Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
			<div class="dt-buttons btn-group">        
					
             
</div>
		 <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <a href="brandinsert.php">Add record</a>
						<thead>
                          <tr>
                            <th>Brand id</th>
                            <th>Brand Name</th>
                            <th>Brand Logo</th>
							<th>Delete</th>
							
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php
						   require_once('../config/connection.php');
						  $sql="select * from brand";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {
							  $id=$row['Brand_id'];
						  ?>
						  <tr>
							<td><?php echo $row['Brand_id']?></td> 
							<td><?php echo $row['Brand_name']?></td>
							<td><img src="../Images/<?php echo $row['Brand_logo']?>"height="50" width="50" style="border-radius:50%"></td>
							<td><a href="branddelete.php?id=<?php echo $id?>"><img src="delete.png" height="30"><a></td>
							
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
  
