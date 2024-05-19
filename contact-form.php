<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$to = "info@mrfixauto.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Phone = " . $phone . "\r\n  Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: Mr. Fix Auto Ltd.";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:index.html");
}
header("Location:index.html");
?>