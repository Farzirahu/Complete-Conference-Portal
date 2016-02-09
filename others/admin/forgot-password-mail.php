<?php
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
$mail->setFrom('reg.biosangam@mnnit.ac.in', 'Biosangam 2016 OTP ');

//Set an alternative reply-to address
$mail->addReplyTo('reg.biosangam@mnnit.ac.in', 'Registrations Biosangam');

//Set who the message is to be sent to
$mail->addAddress($email , $fulname );

//Set the subject line
$mail->Subject = 'Biosangam 2016 OTP is here';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

$mail->msgHTML($messageHTML);

//Replace the plain text body with one created manually
$mail->AltBody = 'Your One Time Password(OTP) is given here.';

//Attach an image file
//$mail->addAttachment();

//send the message, check for errors
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    //echo "<script>alert('Message not sent! !!!')</script>";
} else {
   // echo "Message sent!";
  
    //echo "<script>alert('Message sent! !!!')</script>";
}
?>