<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
	
	if(isset($_SESSION["User_name"]))
	{
		$User_name = $_SESSION['User_name'];
	}		
	else
	{
		
		
		header("location:login.php");
	}
?>
<!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 14:18:27 GMT -->
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.in/templates/admin/otika/source/light/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 14:18:27 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Shoeholic - Admin Dashboard </title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='shoeholic.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            
            
          </ul>
        </div>
        
			   <?php
						   require_once('../config/connection.php');
						   $id=$_SESSION['User_name'];

						  $sql="select * from `user` u join area a where u.Area_id=a.Area_id and u.User_id=$id";
						 $result=mysqli_query($conn,$sql);
						  $row=mysqli_fetch_array($result)
						  ?>
			  
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
<img src="../Images/<?php echo $row['User_img']?>"height="30" width="50" style="border-radius:50%">
			  <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello <?php echo $row['User_name']?></div>
              <a href="profile.php" class="dropdown-item has-icon"> <i class="far fa-user"></i> Profile
             
              <div class="dropdown-divider"></div>
              <a href="login.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
	 
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="shoeholic2.png" height="40" width="180">
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            
            
                  <li>
             <a href="user.php" class="nav-link"><i data-feather="grid"></i><span>User</span></a>
   			  </li>

			  <li>
               <a href="Area.php" class="nav-link"><i data-feather="grid"></i><span>Area</span></a>
              </li>

			  <li>
              <a href="category.php" class=" nav-link"><i data-feather="grid"></i><span>Category</span></a>
              </li>

			  <li>
              <a href="sub-category.php" class=" nav-link"><i data-feather="grid"></i><span>Sub-category</span></a>
              </li>

			  <li>
              <a href="product.php" class=" nav-link"><i data-feather="grid"></i><span>Product</span></a>
              </li>

			  <li>
              <a href="gallery.php" class=" nav-link"><i data-feather="grid"></i><span>Gallery</span></a>
              </li>

			  <li>
              <a href="Brand.php" class=" nav-link"><i data-feather="grid"></i><span>Brand</span></a>
              </li>

			  <li>
              <a href="wishlist.php" class=" nav-link"><i data-feather="grid"></i><span>Wishlist</span></a>
              </li>
			  
			  <li>
              <a href="order.php" class=" nav-link"><i data-feather="grid"></i><span>Order</span></a>
              </li>

			  <li>
              <a href="order detail.php" class="nav-link"><i data-feather="grid"></i><span>Order Details</span></a>
               </li>
			  
			  <li>
              <a href="feedback.php" class=" nav-link"><i data-feather="grid"></i><span>Feedback</span></a>
              </li>
			
			<li>
              <a href="contact.php" class=" nav-link"><i data-feather="grid"></i><span>Contact</span></a>
              </li>
			
	   
	   <li class="dropdown">
              <a href="index.php" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="layout"></i><span>Reports</span></a>
              <ul class="dropdown-menu">
			  
			  <li>
              <a href="orderreport.php" class="nav-link"><i data-feather="grid"></i><span>order Report</span></a>
              </li>
			  
			  <li>
              <a href="userreport.php" class="nav-link"><i data-feather="grid"></i><span>User Report</span></a>
              </li>
			  
			  <li>
              <a href="Reports/user.php" class="nav-link"><i data-feather="grid"></i><span>User Report</span></a>
              </li>
			  
			  <li>
              <a href="Reports/category.php" class="nav-link"><i data-feather="grid"></i><span>Category Report</span></a>
              </li>
				
				<li>
              <a href="Reports/brand.php" class="nav-link"><i data-feather="grid"></i><span>Brand Report</span></a>
              </li>
			  
			  <li>
              <a href="Reports/product.php" class="nav-link"><i data-feather="grid"></i><span>Product Report</span></a>
              </li>
			  <li>
              
			  <a href="Reports/feedback.php" class="nav-link"><i data-feather="grid"></i><span>Feedback Report</span></a>
              </li>
			  
			  
			  </ul>
         </li>
			
          </div>	
	    </aside>
      </div>
	  
	  