<?php
$to = 'bit4us@gmail.com';

$subject = 'Mail sent from sendmail PHP script';

$from = 'treasurer@brnotoastmasters.com';
$headers = "From: $from \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong>Sendmail in PHP with HTML content. </strong></p>';

if (mail($to, $subject, $message, $headers)) {
    echo 'Mail sent successfully.';
} else {
    echo 'Unable to send mail. Please try again.';
}
?>