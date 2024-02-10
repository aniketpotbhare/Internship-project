<?php
//getting data from php form
$name = $POST['fname'];
$email= $POST['email'];
$message= $_POST['message'];
$to = "theartistap435@gmail.com";
$subject = "Mail From website";
$txt ="First Name = ". $fname ."\r\n Contact= " . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@kueteleviscm157@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
mail($to,$subject,$txt,$headers);
}
//redirect to thank you page
header("Location:thankyou.html");
?>