<?php
// Файлы phpmailer
require ‘phpmailer/PHPMailer.php’;
require ‘phpmailer/smtp.php’;
require ‘phpmailer/Exception.php’;
// Переменные
$name = $_POST[‘name’];
$phone = $_POST[‘phone’];
$message = $_POST[‘message’];


//формирование самого письма
$title = "новое обращение Best Tour Plan";
$body = "
<h2>Новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br>
<b>Сообщение:</b><br>$post
";
// Настройки
$mail = new PHPMailer\PHPMailer\PHPMailer();
try{
  $mail->isSMTP();
  $mail->CharSet ="UTF-8";
  $mail->SMTPAuth = true;
  $mail->SMTPDebug = 2;
  $mail->Debugoutput = function($str, $level) {$globals['status'][]=$str;};

  //настройки вашей почты
  $mail->Host        ='smtp.gmail.com';
  $mail->Username    ='cornakmisa@gmail.com';
  $mail->Password    ='Mm87655387';
  $mail->SMTPSeecure ='ssl';
  $mail->Port        = 465;
  $mail->setForm('cornakmisa@gmail.com', 'Миша Чорнак');  

  $mail->addAddress('chornak17@gmail.com');

  // Письмо
  $mail->isHTML(true); 
  $mail->Subject = $title; // Заголовок письма
  $mail->Body = $body; // Текст письма
}
  // Результат
if (!$mail->send()) {$resault = "success";} 
else {$resault = "error";} 

} catch(Exception $e) {
  $resault = "error
  $status = Эсообщение не было отправлено. Причина ошибка: {$mail->ErrorInfo};
}
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);

