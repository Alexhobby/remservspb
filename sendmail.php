<?php

require '../PHPMailer.php';
require '../SMTP.php';
require '../Exception.php';


$mail = new PHPMailer(true);
$mail->CharSet='UTF-8';
$mail->setLanguage('ru','phpmailer/language/');
$mail->IsHTML(true);

// от кого письмо
$mail->setFrom('info@remservspb.ru','Ремонт в Северной столице');
// Кому отправить
$mail->addAddress('9331401@gmail.com');
// $mail->addAddress('super.fasad-2010@yandex.ru');
// Тема письма
$mail->Subject ='Заявка с сайта';

//Тело письма
$body = '<h1>Заказ с сайта</h1>';

if(trim(!empty($_POST['name']))){
    $body.='<p><strong>Имя:</strong>'.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['phone']))){
    $body.='<p><strong>Телефон:</strong>'.$_POST['phone'].'</p>';
}
if(trim(!empty($_POST['Email']))){
    $body.='<p><strong>Телефон:</strong>'.$_POST['Email'].'</p>';
}
if(trim(!empty($_POST['comment']))){
    $body.='<p><strong>Телефон:</strong>'.$_POST['comment'].'</p>';
}
$mail->Body = $body;

//Отправляем
if(!$mail->send()){
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены!';
}
$response = ['message' => $message];
header('Content-type: application/json');
echo json_encode($response);