<?php

if(isset($_POST ['email']) && !empty($_POST ['email'])){

$name = addslashes($_POST ['name']);
$email = addslashes($_POST ['email']);
$message = addslashes($_POST ['message']);

$to = "rodrigoferro27silva@gmail.com";
$subject = "Contact - RF Management";
$body = "Name: " .$name. "\r\n";
        "Email: " .$email."\r\n";
        "Message" .$message;

$header = "From: rodrigoferro27silva@gmail.com" ."\r\n"
           ."Reply-To:".$email."\e\n".
           "X=Mailer:PHP/".phpversion();
if(mail($to,$subject,$body,$header)){
    echo("Email Enviado!");
}else{
    echo("Email Não Enviado!");

}

}
?>