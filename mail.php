<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$to = "pranjal04das@gmail.com";
// Get data from form 
$name = $_POST['name'];
$email = $_POST['emailAddress'];
$message = $_POST['message'];
$headers = "From:" . $email;
if(mail($to,$name,$message,$headers)) {
    echo "Message sent successfully.";
} else {
    echo "Message was not sent. Retry after some time";
}
?>