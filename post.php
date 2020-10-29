<?php
$name = $_POST['name'];
$email= $_POST['E-mail'];
$phonenumber = $_POST['phonenumber'];
$index = $_POST['index'];
$message = $_POST['message'];
$finalmessage = "Имя: $name \n E-mail: $email\nАдрес: $index";
$myemail = "kiritosensey@yandex.ru";
$header = "12344";
$send = mail($myemail,$header,$finalmessage,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true' ) {echo "all righht";}
else {echo "pumpumpum";}
?>
