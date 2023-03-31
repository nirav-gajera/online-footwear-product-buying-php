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
                    <h4>Wishlist Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                       
					   <thead>
                          <tr>
                            <th>Wishlist id</th>
                            <th>User id</th>
                            <th>Product name</th>
							
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php
						   require_once('../config/connection.php');
						  $sql="select * from wishlist w join product p join user u where w.Wishlist_id=p.P_id and w.User_id=u.User_id";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {
							  
						  ?>
						  <tr>
							<td><?php echo $row['Wishlist_id']?></td> 
							<td><?php echo $row['User_name']?></td>
							<td><?php echo $row['P_name']?></td>
					
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
       