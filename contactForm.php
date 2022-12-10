<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];

    $mailto="bagavathianandhan002@gmail.com";
    $headers = "From: ".$email;
    $txt="You have received an email from ".$name.".\n\n".$comments;
    mail($mailto,$subject,$txt,$headers);
    header("Location:index.html?send_email");

}