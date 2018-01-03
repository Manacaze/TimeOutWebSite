
<?php
$from    = $_POST['email'];
$to      = 'contact@timeout.co.mz';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: '.$from . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
