<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$mailTo = "jordan1adedeji@gmail.com";
$headers = "From: ". $mailFrom;
$txt = "You have recieved an e-mail from ".$name. ".\n\n".$message;


mail($mailTo, $subject, $txt, $headers);
header("Location: index.html?mailsend");
}

?>
