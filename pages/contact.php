<?php

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $MailForm = $_POST['email'];
    $Phone = $_POST['phone'];
    $Message = $_POST['message'];

    $mailTo = "vamsimonohar@gmail.com, vamsimanohar@trackpay.me, vamsimonohar@yahoo.in";
    $headers = "From: ".$mailFrom;
    $txt = "You have a Message ".$name".\n\n".$message;

    mail($mailTo,$name,$txt,$headers);

    header("Location: ContactPage.html$MessageSent");
}


?>