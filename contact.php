


<?php

$msg = ''; 
$msgClass = '';

if(filter_has_var(INPUT_POST, 'submit')) {

    $name = $_POST['Name'];
    $mailFrom = $_POST['Mail'];
    $phoneNumber = $_POST['Phone-Number'];
    $message = $_POST['Message'];

    $mailTo = 'miyahslaysrealestate@gmail.com';
    $headers = "From: ".$mailFrom;
    $txt = "you have received an email from ".$name.".\n\n".$mailFrom.".\n\n".$phoneNumber.".\n\n".$message;


if (!empty($name) && !empty($mailFrom) && !empty($subject)&& !empty($phoneNumber) && !empty($message)) {
    if (filter_var($mailFrom, FILTER_VALIDATE_EMAIL) === false) {
        $msg = "Please fill in a valid email"; 
        $msgClass = "alert-danger";
       } else {
         mail($mailTo, $subject, $txt, $headers);
         exit();
       }
       
        } else {
            $msg = "Please fill in all fields"; 
            $msgClass = "alert-danger";
     }
}



?>