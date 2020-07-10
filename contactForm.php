<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $subject = "UAH_CONTACT_FORM"

    $mailTo = "dhan@neighborhoodbridges.ca"
    //Won't work with gmail address so I will have to forward it from my
    //website hosting email using a new alias

    $headers = "From: ".$mailFrom;
    $txt = "You have received a message from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    // header("Location: index.php?mailsend");
}