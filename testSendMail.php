<?php
$to = 'bit4us@gmail.com';
$name = "Marius"

$subject = 'Mail sent from sendmail PHP script';

$from = 'no-reply-treasurer@brnotoastmasters.com';
$headers = "From: $from \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = "<h3>Reminder to renew your subscription with Brno Toastmasters club</h3>";
$message .= "<p>Dear $name ,</p>";



if (mail($to, $subject, $message, $headers)) {
    echo 'Mail sent successfully.';
} else {
    echo 'Unable to send mail. Please try again.';
}
?>