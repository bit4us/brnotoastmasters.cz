<?php
$to = 'bit4us@gmail.com';
$name = "Marius";

$subject = 'Mail sent from sendmail PHP script';

$from = 'no-reply-treasurer@brnotoastmasters.com';
$headers = "From: $from \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = "<h3>Reminder to renew your subscription with Brno Toastmasters club</h3>";
$message .= "<p>Dear $name ,</p>";
$message .= "<p>We value your activity within our club and we are glad to have you as a member of our club.";
$message .= "<br/>Your input and your progress is really valuable for us and we thank you for being with us so far.";
$message .= "But now it's about time to renew your subscription with our club in order to keep continuing your access ";
$message .= " to all the benefits of membership we are offering you in return.";
$message .= "<br/>We'd like to remind you that before the date of 1st October your renewal should be done ";
$message .= "in order for our collaboration to continue towards your success within the Toastmasters ";
$message .= "International family.";
$message .= "For more details regarding the payments you can check the <a href='https://www.brnotoastmasters.cz'>club's website</a>.";
$message .= "</p><p>Please, if you perform the renewal of your subscription, confirm with the Vice President for Membership ";
$message .= "or with the Treasurer of the club. </p><br/><br/>";
$message .= "<p>Of course, if you'd like to discontinue your subscription, we'll be sorry to see you leave, ";
$message .= "but we're wishing you luck.</p>";
$message .= "<p>Best wishes,</p><h4>Marius</h4><h5>Brno Toastmasters - Club Treasurer</h5>";


if (mail($to, $subject, $message, $headers)) {
    echo 'Mail sent successfully.';
} else {
    echo 'Unable to send mail. Please try again.';
}
?>