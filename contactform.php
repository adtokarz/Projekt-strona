<?php

if (isset($_POST['submit'])){
    $name = $_POST[name];
    $subject = $_POST[subject];
    $mail = $_POST[mail];
    $message = $_POST[message];

    $email_from = 'porabani';
    $email_subject = "Tytul"
    $txt = "Otrzymałeś wiadomośc e-mail od:" .$name.".\n\n".$message;

    $to = "atokarz0@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .="Reply-To: $mail \r\n";
    
    mail($to,$email_subject,$txt,$headers);
    header("Location: contact.php");


    
}
?>