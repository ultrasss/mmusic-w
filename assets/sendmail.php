<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php'; 
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/'); 
$mail->IsHTML(true);

//От кого письмо
$mail->setFrom('ego_mpx@mail.ru*, ’Егор');
//Кому отправить
$mail->addAddress('ego_mpx@mail.ru');
//Тема письма
$mail->Subject  = 'Привет! Это "Фрилансер по жизни"';

//Рука
$man = "Музыкант";
if(S_POST['man'] == "Nomusic"){
    $man = "НеМузыкант";
}

//Тело письма
$body = '<h1>Встречайте супер письмо!</h1>';

if(trim(!empty($_POST['name']))){
    $body. = '<p><strong>Имя:</strong> '.$_POST['name'].' </p>';
}
if(trim(!empty($_POST['email']))){
    $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
}
if(trim(!empty($_POST['man']))){
    $body.='<p><strong>Кто Вы?</strong> '.$_man['man'].'</p>';
}
if(trim(!empty($_POST['age']))){
    $body.='<p><strong>Возраст:</strong> '.$_POST['age'].'</p>';
}

if(trim(!empty($_POST['message']))){
    $body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
}

//Прикрепить файл
if (!empty($_FILES['image']['tmp_name'])) {
    //путь загрузки файла 
    $filePath = __DIR__	 . "/files/" . $_FILES['image']['name'];
    //грузим файл
    if (copy($_FILES['image']['tmp_name'], $filePath)){
        $fileAttach = $filePath;
        $body.='<p><strong>Фото в npиложении</strong>';
        $mail->addAttachment($fileAttach);
        }
    }
    
    $mail->Body = $body;
    
    //Отправляем
    if (!$mail->send()) {
        $message = 'Ошибка';
    } else {
        $message - 'Данные отправлены!'; 
    }
    
    $response - ['message' => $message];
    
    header('Content-type: application/json'); 
    echo json_encode($response);
?>
