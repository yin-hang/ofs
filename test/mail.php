<?php
require '../lib/PHPMailer/class.phpmailer.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP

$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465; 
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'anemone928';                            // SMTP username
$mail->Password = 'passwd';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'anemone928@gmail.com';
$mail->FromName = 'Mailer';
$mail->AddAddress('zenanyoo@gmail.com', 'ZenAny');  // Add a recipient
$mail->AddAddress('shitou18@126.com');               // Name is optional
$mail->AddReplyTo('zenanyoo@gmail.com', 'Any');
$mail->AddCC('yinhang@rd.netease.com');
//$mail->AddBCC('bcc@example.com');

$mail->WordWrap = 50;
$attachment = 'fileupload.html';                                 // Set word wrap to 50 characters
$mail->AddAttachment($attachment);         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
