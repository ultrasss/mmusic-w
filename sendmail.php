<!-- 
use PHPMailer\PHPMailer\PHPMailer;
 
 /**
  * Настройка SMTP
  *
  * @param PHPMailer $phpmailer объект мэилера
  */
 function mihdan_send_smtp_email( PHPMailer $mail ) {
   
 }
 add_action( 'phpmailer_init', 'mihdan_send_smtp_email' ); -->

<?php
// //От кого письмо
// $phpmailer->setFrom('mmusic.online@mail.ru', 'Егор');
// //Кому отправить
// // $mail->addAddress('evgenii.z.i@yandex.ru', 'Eugene');
// $phpmailer->addAddress('ego_mpx@mail.ru');
// //Тема письма
// $phpmailer->Subject('Привет! Это НИКНЕЙМ');

// Кому отправляем
$to = 'you@yourdomain.com';
   
// Тема письма
$subject = 'Проверка wp_mail';
  
// Само сообщение
$message = 'Это тестовое сообщение';
   
// Загружаем только ядро WordPress
define( 'WP_USE_THEMES', false );
require( 'wp-load.php' );



//Рука (РАЗОБРАТЬСЯ!)
// print_r($_POST); - не было, для диагностики
// exit('exit');
// $man = "Музыкант";
// if($_POST['man'] == "Nomusic"){
//     $man = "НеМузыкант";
// }

//Тело письма
$body = '<h1>Встречайте супер письмо!</h1>';

if(trim(!empty($_POST['name']))){
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].' </p>';
}
if(trim(!empty($_POST['email']))){
    $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
}
if(trim(!empty($_POST['man']))){
    $body.='<p><strong>Кто Вы?</strong> '.$_POST['man'].'</p>';
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
    // if ($phpmailer->send()) {
    //     $message = 'Ошибка';
    // } else {
    //     $message = 'Данные отправлены!'; 
    // }
    



    // Отправляем письмо
    $sent_message = wp_mail( $to, $subject, $message );
      
    if ( $sent_message ) {
        // Если сообщение успешно отправилось
        echo 'Всё чётко настроил, бро!';
    } else {
        // Ошибки при отправке
        echo 'Где-то ты лоханулся знатно!';
    }





    $response = ['message' => $message];
    
    header('Content-type: application/json'); 
    echo json_encode($response);
?>
