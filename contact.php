


<?php

if(isset($_POST['submit'])) {

 $name = $_POST['name'];
 $phoneNumber = $_POST['phone-number'];   
 $mailFrom = $_POST['email'];
 $message = $_POST['message'];

 $mailTo = "samiyah@miyahtherealtor.com";
 $headers = "From: ".$mailFrom;
 $txt = "you have received an email from ".$name.".\n\n".$mailFrom.".\n\n".$phoneNumber.".\n\n".$message;

 mail($mailTo, $txt, $headers);
 header("Location: index.php?mailsend");

}


?>