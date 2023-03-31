<?php 

function send_mail($to, $message, $subject){
	
	$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 1;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "dhwanimodi617@gmail.com";                 
$mail->Password = "dsm1996dsm";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

//$mail->From = "@gmail.com";
$mail->FromName = "TEST";

$mail->addAddress($to);

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
     //echo "Mailer Error: " . $mail->ErrorInfo;
	 return false;
} 
else 
{
	
    return true;
}
}

?>