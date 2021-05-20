<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$to = "numananees44@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: bsef19a506@pucit.edu.pk" . "\r\n" .
"CC: bsef19a506@pucit.edu.pk";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>