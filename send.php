<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные
$name = $_POST[‘name’];
$phone = $_POST[‘phone’];
$message = $_POST[‘message’];


//формирование самого письма
$title = "Новое обращение Best Tour Plan";
$body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";
// Настройки
$mail = new PHPMailer\PHPMailer\PHPMailer();
try{
  $mail->isSMTP();
  $mail->CharSet ="UTF-8";
  $mail->SMTPAuth = true;
  $mail->SMTPDebug = 2;
  $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

  //настройки вашей почты
  $mail->Host        ='smtp.mail.ru';
  $mail->Username    ='m.chornak@mail.ru';
  $mail->Password    ='Mm87655387';
  $mail->SMTPSecure  ='ssl';
  $mail->Port        = 465;
  $mail->setFrom('m.chornak@mail.ru', 'Миша Чорнак');  

  $mail->addAddress('chornak17@gmail.com');

  // Письмо
  $mail->isHTML(true); 
  $mail->Subject = $title; // Заголовок письма
  $mail->Body = $body; // Текст письма


  // Результат
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thankyou.html');
?>


<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные
$email = $_POST[‘email’];



//формирование самого письма
$title = "Новое обращение Best Tour Plan";
$body = "
<h2>Новое письмо</h2>
<b>Имейл:</b> $email<br>

";
// Настройки
$mail = new PHPMailer\PHPMailer\PHPMailer();
try{
  $mail->isSMTP();
  $mail->CharSet ="UTF-8";
  $mail->SMTPAuth = true;
  // $mail->SMTPDebug = 2;
  $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

  //настройки вашей почты
  $mail->Host        ='smtp.mail.ru';
  $mail->Username    ='m.chornak@mail.ru';
  $mail->Password    ='Mm87655387';
  $mail->SMTPSecure  ='ssl';
  $mail->Port        = 465;
  $mail->setFrom('m.chornak@mail.ru', 'Миша Чорнак');  

  $mail->addAddress('chornak17@gmail.com');

  // Письмо
  $mail->isHTML(true); 
  $mail->Subject = $title; // Заголовок письма
  $mail->Body = $body; // Текст письма

  // Результат
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}


header('Location: thankyou.html');
?>



