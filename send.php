<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];
$email_sub = $_POST['email_sub'];

  
// Формирование самого письма
$title = "New message Best Tour Plan";
$body = "
<h2>New message</h2>
<b>Name:</b> $name<br>
<b>Phone:</b> $phone<br><br>
<b>Message:</b><br>$message
";
if ($name and $phone and $message and $email ) {
  $title = "New message  Best Tour Plan";
  $body = "
    <h2>New message</h2>
<b>Name:</b> $name<br>
<b>Phone:</b> $phone<br><br>
<b>Phone:</b> $email<br><br>
<b>Message:</b><br>$message
  ";
} elseif ($email_sub) {
  $title = "Subscrib on Best Tour Plan";
  $body = "
    <h2>New subscriber</h2>
    <b>mail:</b> $email_sub<br>
  ";
}

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'en.eredzhep@mail.ru'; // Логин на почте
    $mail->Password   = '79780253621Enver'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('en.eredzhep@mail.ru', 'En Eredzhep'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('eredzhepov.enver@yandex.ua');  
   

    
  // Отправка сообщения
  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thankyou.html');