<?php include('header.php');
require_once('../config/conn.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST["Contact_name"]) && isset ($_POST["Contact_phone"])&& isset ($_POST["Contact_email"])&& isset ($_POST["Contact_subject"])&& isset ($_POST["Contact_message"]))
    {
		 $contactname=$_POST["Contact_name"];
		 	 $contactphone=$_POST["Contact_phone"];
			 $email=$_POST["Contact_email"];
			 $subject=$_POST["Contact_subject"];
			 $contactmessage=$_POST["Contact_message"];
			 
			 if($contactname!='' && $contactphone!='' && $email!='' && $subject!='' && $contactmessage!='')
			 {
				  $sql="insert into contact(Contact_name,Contact_phone,Contact_email,Contact_subject,Contact_message)
							  values('".$contactname."','".$contactphone."','".$email."','".$subject."','".$contactmessage."')";
				  //echo $sql;
				  //die;
				  
				  $result=mysqli_query($conn,$sql);
				  if($result)
				  {
		echo"<meta http-equiv='refresh' content='0;url=index.php'>";

				  }
			 }
			 else 
			 {
               echo "NULL VALUES";
			 }
	}
}
?>	

    <!-- off-canvas menu end -->

    <!-- main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h1 class="breadcrumb-title">Contact Us</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- contact wrapper area start -->
        <div class="contact-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-message">
                            <h2 class="contact-title">Fill Information</h2>
                            <form   method="post" >
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="Contact_name" placeholder="Name *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="Contact_phone" placeholder="Phone *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="Contact_email" placeholder="Email *" type="text" required>
                                    </div>
									<div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="Contact_subject" placeholder="subject *" type="text" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="Contact_message" placeholder="message *" ></textarea>
                                    </div>
                                    <div class="col-12">
                                        
                                        <div class="contact-btn">
                                            <button type="submit" value="Send Message" class="btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info pt-0">
                            <h2 class="contact-title">contact us</h2>
                            <p>Our executive will help solve your problem.</p>
                            <ul>
                                <li><i class="fa fa-fax"></i> Address :28,Subhag Society, Opp.Santaram Complex, Nirnaynagar ,Ahemdabad</li>
                                <li><i class="fa fa-phone"></i>shoeholic12911@gmail.com</li>
                                <li><i class="fa fa-envelope-o"></i> +918758961221</li>
                            </ul>
                            <div class="working-time">
                                <h3>Working Hours</h3>
                                <p class="pb-0"><span>Monday – Saturday:</span>24*7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact wrapper area end -->
    </main>
    <!-- main wrapper end -->

    <!-- Start Footer Area Wrapper -->
   <?php include('footer.php')?>