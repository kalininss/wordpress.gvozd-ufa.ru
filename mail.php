<?php

$frm_name  = "Заявка";
$recepient = "verona71@bk.ru";
$sitename  = "Название Сайта";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$email = trim($_POST["phone"]);
$email = trim($_POST["textar"]);

$message = "
Имя: $name <br>
Телефон: $name <br>
Сообщение: $textar <br>
";

mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
