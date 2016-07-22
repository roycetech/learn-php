<?php
/* This file is used to test email capability of a server.  Just navigate to this file
and an email should be sent. */

include 'config.php';

$to = EMAIL_TO;
$from = EMAIL_FROM;
$replyto = EMAIL_REPLYTO;

$headers = "From: $from\r\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $replyto";   
if (mail($to,"Test Email", "Test Email Body", $headers)) {?>
	Mail Sent!
<?php } else { ?>
	Error sending mail!
<?php }
?>