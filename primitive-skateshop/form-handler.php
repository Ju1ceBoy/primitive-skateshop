<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@primitiveskateshop.ru';

$email_subject = 'Новая анкета';

$email_body = "Имя пользователя: $name.\n".
                "E-mail пользователя: $visitor_email.\n".
                    "Тема пользователя: $subject.\n".
                    "Сообщение пользователя: $message.\n";

$to = 'dmn170@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>