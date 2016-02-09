<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	include("include/connection.php");
	$query = mysql_query("SELECT * FROM registrations order by 1 DESC");
    $count = mysql_num_rows($query);
    //echo $count;
    //echo "rahul";
    $jgf=0;
    $message = mysql_real_escape_string($_POST['message']);
	
for ($jgf=1; $jgf <= $count ; $jgf++) { 
	


		$email_user = mysql_real_escape_string($_POST[$jgf]);
		//echo $email_user;
		if ($email_user) {
			
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require './PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "reg.biosangam@mnnit.ac.in";

//Password to use for SMTP authentication
$mail->Password = "biosangam@mnnit";

//Set who the message is to be sent from
$mail->setFrom('reg.biosangam@mnnit.ac.in', 'Biosangam 2016 ');

//Set an alternative reply-to address
$mail->addReplyTo('reg.biosangam@mnnit.ac.in', 'Registrations Biosangam');

//Set who the message is to be sent to
$mail->addAddress($email_user);

//Set the subject line
$mail->Subject = 'Biosangam 2016';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

$mail->msgHTML($message);

//Replace the plain text body with one created manually
$mail->AltBody = 'Important notice for you from Biosangam 2016.';

//Attach an image file
//$mail->addAttachment();

//send the message, check for errors
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    //echo "<script>alert('Message not sent! !!!')</script>";
} else {
    //echo "Message sent!";
  
    //echo "<script>alert('Message sent! !!!')</script>";
}


		}
	}
	echo "<script>alert('Message sent successfully !!!')</script>";
	echo "<script>window.top.location.href = 'index?category=notifications';</script>";
}
?>