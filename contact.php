<?php 
// if "email" variable is filled out, send email
if (isset($_POST['submit'])) {

$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];
$mailTo = "mohamedalaaelnasharedu@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have a message : ".$name".\n\n".$message;

mail($mailTo, $name, $txt,$headers);



}

?>