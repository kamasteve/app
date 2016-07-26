<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from       = "info@techisoft.co.ke";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "tls://mail.techisoft.co.ke"; // SMTP host
$mail->Port       =  465;                    // set the SMTP port
$mail->Username   = "info@techisoft.co.ke";  // SMTP  username
$mail->Password   = "@kamah4778";  // SMTP password
$mail->SetFrom($from, 'Digital Landlord');
$mail->AddReplyTo($from,'Techisoft Solutions');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();
}
?>