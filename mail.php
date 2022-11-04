<?php  
//From code conia website
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "hamelmeriem172002@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:thankyou.html");
?>