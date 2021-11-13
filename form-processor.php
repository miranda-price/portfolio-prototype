<?php

$emailTo = "mprice21@u.rochester.edu";
$name = Trim(stripslashes($_POST['name'])); 
$last = Trim(stripslashes($_POST['last'])); 
$email = Trim(stripslashes($_POST['email'])); 
$subject = $_POST['subject'];
$message = Trim(stripslashes($_POST['message']));

$body = "";

$body .= $message;
$body .= "\n\n";

$body .= "From,"
$body .= "\n\n";

$body .= $name;
$body .= $last;

mail($emailTo, $subject, $body, "From: <$email>");

?>