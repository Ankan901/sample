<?php
    $name = $_POST['name'];
    $visitor_emial = $_POST['email'];
    $message = $_POST['message'];

    $email_form = 'portfolio@ankan.com';
    $emial_subject = "New Mail From Website";

    $email_body = "User Name: $name.\n";
                    "User Email: $visitor_emial.\n";
                        "User Message: $message.\n";

    $to = "ankan901@gmail.com";
    $headers = "From: $email_from\r\n";                    
    $headers = "Reply-To: $visitor_emial\r\n";
    mail($to,$emial_subject,$email_body, $headers)
    header( "Location: index.html");
?>