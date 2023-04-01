
<?php
//get data from form  
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$date = $_POST["date"];
$time = $_POST["time"];
$location = $_POST["location"];
$message = $_POST["message"];
$to = "mahinur@austin.edu.my";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: mahinur@austin.edu.my" . "\r\n" .
"CC: mahinur@austin.edu.my";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>