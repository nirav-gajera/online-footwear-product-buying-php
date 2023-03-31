<?php include('header.php');?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Product Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <a href="productinsert.php">Add record</a>
						<thead>
                          <tr>
                            <th>Product id</th>
                            <th>Product name</th>
                            <th>Product description</th>
							<th>Product price</th>
							<th>Product quantity</th>
							<th>Product image</th>
							<th>Product size</th>
							<th>Product colour</th>
							<th>Sub-category name</th>
							<th>Brand Name</th>
							<th>Delete</th>
							<th>Update</th>
							
                          </tr>
                        </thead>
						
                        <tbody>
                          <?php
						   require_once('../config/connection.php');
						  $sql="select * from product p join `sub-category` s join brand b where p.Sub_C_id=s.Sub_C_id and p.Brand_id=b.Brand_id";
						 $result=mysqli_query($conn,$sql);
						  while ($row=mysqli_fetch_array($result))
						  {
							  $id=$row['P_id'];
							  $name=$row['Sub_C_name'];
							  $bname=$row['Brand_name'];
						  ?>
						  <tr>
						  
							<td><?php echo $row['P_id']?></td> 
							<td><?php echo $row['P_name']?></td>
							<td><?php echo $row['P_des']?></td>
							<td><?php echo $row['P_price']?></td>
							<td><?php echo $row['P_quantity']?></td>
							<td><img src="../Images/<?php echo $row['P_image']?>"height="50" width="50" style="border-radius:50%"></td>
							<td><?php echo $row['P_Size']?></td>
							<td><?php echo $row['P_colour']?></td>
							<td><?php echo $row['Sub_C_name']?></td>
							<td><img src="../Images/<?php echo $row['Brand_logo']?>"height="50" width="50" style="border-radius:50%"></td>
							<td><a href="productdelete.php?id=<?php echo $id?>"><img src="delete.png" height="30"><a></td>
							<td><a href="productupdate.php?id=<?php echo $id?>&name=<?php echo $name?>&bname=<?php echo $bname?>"><img src="update.png" height="30"><a></td>
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