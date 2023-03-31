<?php
	include("header.php");
	require_once('connection.php');
?>
        <!-- Page content -->
        <div id="content" class="col-md-12">
          



          <!-- page header -->
          <div class="pageheader">
            
            <h2><i class="fa fa-thumb-tack" style="line-height: 48px;padding-left: 1px;"></i> Package Insert Page <span>	</span></h2>
          
          </div>
          <!-- /page header -->
          
          




          <!-- content main container -->
          <div class="main">




            <!-- row -->
            <div class="row">

              <!-- col 12 -->
              <div class="col-md-12">



                <!-- tile -->
                <section class="tile color transparent-black">



                  <!-- tile header -->
                  
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <form class="form-horizontal" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">
                      <div class="form-group">
                        <label for="input07" class="col-sm-4 control-label">Area Name</label>
                        <div class="col-sm-8">
                          <select name="txtarea" id="select" class="form-control">
							 <?php
                                $sql="select * from area";
								$result = mysqli_query($conn,$sql);
								while($row=mysqli_fetch_array($result))
								{
							 ?>
								<option value="<?php echo $row['area_id'];?>"> <?php echo $row['area_name'];?>
								<?php
								}
								?>
                              </select>
                        </div>
                      </div>
					   <div class="form-group">
                        <label for="input07" class="col-sm-4 control-label">Category Name</label>
                        <div class="col-sm-8">
                          <select name="txtcategory" id="select" class="form-control">
							 <?php
                                $sql="select * from category";
								$result = mysqli_query($conn,$sql);
								while($row=mysqli_fetch_array($result))
								{
							 ?>
								<option value="<?php echo $row['category_id'];?>"> <?php echo $row['category_name'];?> 
								<?php
								}
								?>
                              </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label for="input01" class="col-sm-4 control-label">Package Name</label>
                        <div class="col-sm-8">
                          <input type="text" name="txtpackagename" class="form-control" id="input01">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="input02" class="col-sm-4 control-label">Package Description</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" name="txtpackagedes" id="input02" rows="6"></textarea>
                        </div>
						</div>
						
						<div class="form-group">
                        <label for="input03" class="col-sm-4 control-label">Price</label>
                        <div class="col-sm-8">
                          <input type="number" name="txtpackageprice" class="form-control" id="input03">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label for="input04" class="col-sm-4 control-label">Months</label>
                        <div class="col-sm-8">
                          <input type="number" name="txtmonths" class="form-control" id="input04">
                        </div>
                      </div>
                      

                      <div class="form-group form-footer">
                        <div class="col-sm-offset-4 col-sm-8">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>

                    </form>
					
					<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
							if (isset($_POST["txtpackagename"]) && isset($_POST["txtpackagedes"]) && isset($_POST["txtpackageprice"]) && isset($_POST["txtarea"]) && isset($_POST["txtcategory"]) && isset($_POST["txtmonths"]))
							{ 
								$packagename=$_POST["txtpackagename"];
								$description=$_POST["txtpackagedes"];
								$packageprice=$_POST["txtpackageprice"];
								$packagecategory=$_POST["txtcategory"];
								$packagearea=$_POST["txtarea"];
								$packagemonths=$_POST["txtmonths"];
						
								if($packagename!='' && $description!='' && $packageprice!='' && $packagecategory!='' && $packagearea!='' && $packagemonths!='')
								{
									echo "value not null";
									$sql = "insert into package(package_name,pac_description,price,category_id,area_id,months)
									values('".$packagename."','".$description."','".$packageprice."','".$packagecategory."','".$packagearea."','".$packagemonths."')";
									

									$result=mysqli_query($conn,$sql);
			
									if($result)
									{
										echo "<meta http-equiv='refresh' content='0;package.php'>";
									}
								}
							}
								else
								{
									echo "value not set";
								}
							}
				  
				  ?>

                  </div>
                  <!-- /tile body -->
                  
                


                </section>
                <!-- /tile -->




              </div>
              <!-- /col 6 -->


              <!-- col 12 -->
              <div class="col-md-6">



                <!-- tile -->
                <section class="tile color transparent-white">



                  
                  <!-- /tile body -->
                


                </section>
                <!-- /tile -->



              </div>
              <!-- /col 12 -->


            </div>
            <!-- /row -->
          


          </div>
          <!-- /content container -->






        </div>
        <!-- Page content end -->
<?php include("footer1.php")?>



       