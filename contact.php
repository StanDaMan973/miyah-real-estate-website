

<?php

$msg = '';
$msgClass = '';

if(filter_has_var(INPUT_POST, 'submit')) {

    htmlspecialchars($name = $_POST['name']);
    htmlspecialchars($email = $_POST['email']);
    htmlspecialchars($phoneNumber = $_POST['phone-number']);
    htmlspecialchars($message = $_POST['message']);

    if(!empty($name) && !empty($phoneNumber) && !empty($email)) {

        if(isset($_POST['bot-smasher']) && !empty($_POST['bot-smasher'])){
            die();
        }

        if(preg_match('/http|www/i',$message)) {
            $msg = 'we do not allow URL';
            $msgClass = 'alert-danger';
          }

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = 'Please fill in a vaild email';
            $msgClass = 'alert-danger';
        } else {

        $mailTo = 'miyahslaysrealestate@gmail.com';
        $headers = "From: ".$email;
        $txt = "you have received an email from ".$name.".\n\n".$phoneNumber.".\n\n".$message;

        if(mail($mailTo, $headers, $txt)) {
            $msg = 'Your email has been sent';
            $msgClass = 'alert-success';
            $_POST = array();
        } else {
            $msg = 'Your email was not sent';
            $msgClass = 'alert-danger';
        }
     }

    } else {
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}


?>



