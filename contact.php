<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require 'vendor/autoload.php';
$config =  require('config/config.php');

use cybrox\crunchdb\crunchDB as crunchDB;

//======================================================================
// Variables
//======================================================================


//E-mail address. Enter your email
define("__TO__", $config['mail_user']);

//Success message
define('__SUCCESS_MESSAGE__', "Your message has been sent. We will reply soon. Thank you!");

//Error message 
define('__ERROR_MESSAGE__', "Your message hasn't been sent. Please try again.");

//Messege when one or more fields are empty
define('__MESSAGE_EMPTY_FIELDS__', "Please fill out  all fields");


//======================================================================
// Do not change
//======================================================================

//E-mail validation
function check_email($email){
    return true;
    if(!@eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
        return false;
    } else {
        return true;
    }
}

//Send mail
function send_mail($to,$subject,$message,$name, $user, $password){
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->IsHTML(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $user;
    $mail->Password = $password;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('ordersafepet@gmail.com', 'SafePet');
    $mail->addAddress($to, $name);
    $mail->Subject = $subject;
    $mail->Body    = $message;
    if($mail->send()){
        echo json_encode(array('info' => 'success', 'msg' => __SUCCESS_MESSAGE__));
    } else {
        echo json_encode(array('info' => 'error', 'msg' => __ERROR_MESSAGE__));
    }
}

//Get data form and send mail
if(isset($_POST['name']) and isset($_POST['mail']) and isset($_POST['messageForm'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $payWay = $_POST['pay'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $pay = $payWay === 'card' ? 'Карта': 'Наличные';
    $payClient = $payWay === 'card'?'на карту xxxx-xxxx-xxxx-xxxx': 'по счету №ххххххххххх';
    $petName = $_POST['petName'];
    $messageForm = $_POST['messageForm'];

    $colors = array(
        'red'=>'Красный',
        'blue'=>'Синий',
        'green'=>'Зеленый',
        'orange'=>'Оранжевый',
        'yellow'=>'Желтый'
    );
    if($name == '') {
        echo json_encode(array('info' => 'error', 'msg' => "Please enter your name."));
        exit();
    } else if($mail == '' or check_email($mail) == false){
        echo json_encode(array('info' => 'error', 'msg' => "Please enter valid e-mail."));
        exit();
    } else {

        $cdb = new crunchDB('./data/');
        $tables = $cdb->tables();
        end($tables);

        $tableId = key($tables)?key($tables):0;

        if($cdb->table('orders_'.$tableId)->exists()) {
            if ($cdb->table('orders_' . $tableId)->count() >= 1000) {
                $tableId++;
            }
        }
       if(!$cdb->table('orders_'.$tableId)->exists()){
           $cdb->table('orders_'.$tableId)->create();
       }

        $id = ($tableId*1000) + $cdb->table('orders_'.$tableId)->count() + 1;
        $date = new DateTime('now');
        $order = array('id'=>$id, 'name'=>$name, 'phone'=>$phone, 'mail'=>$mail, 'comment'=>$messageForm, 'pet'=>$petName, 'size'=>$size, 'color'=>$color, 'payway'=>$payWay, 'date'=>$date->getTimestamp());

        $cdb->table('orders_'.$tableId)->insert($order);

        $to = __TO__;
        $subject = 'Заказ №'.$id ;
        $subjectClient = 'Ваша заявка №'.$id.' принята!';
        $storeMessage = '
        <html>
        <head>
          <title>Mail from '. $name .'</title>
        </head>
        <body>
          <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
          <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Order Id:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $id .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Name:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $name .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $mail .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Телефон:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $phone .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Имя питомца:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $petName .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Размер:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $size .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Цвет ошейника:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $colors[$color] .'</td>
            </tr>
             <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Способ оплаты:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $pay .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Комментарий:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $messageForm .'</td>
            </tr>
          </table>
        </body>
        </html>
        ';

        $clientMessage = '
        <html>
        <head>
          <title>Mail from SafePet</title>
        </head>
        <body>
        <p>Добрый день, '.$name.'!</p>
        <p> Вы сделали заказ ошейника с именной биркой в магазине SafePet.</p>
        <p>Номер вашего заказа: <b>'.$id.'</b></p>

        <p>Детали заказа:</p>

        <p>Цвет: <span style="font-size: 20px; color:'.$color.'">&#9632;</span>('.$colors[$color].')</p>
        
        <p>Размер: '.$size.'</p>
        
        <p>Имя животного на бирке: '.$petName.'</p>
        
        <p>Контакты хозяина: '.$phone.'</p>
        
        <p>Способ оплаты: Карта Приват, номер ХХХХ-ХХХХ-ХХХХ-ХХХХ</p>
        <p>В назначении платежа укажите номер заказа </p>
        
        <p>Напоминаем, Заказ будет выполнен и отгружен через 3 (три) рабочих дня с момента получения оплаты.</p>
        
        
        <p>Сумма заказа: 299 грн</p>
        <p>Смоимость доставки: 0 грн </p>
        
       <p> Если у вас есть вопросы  или нужно изменить детали заказа, пишите на почту <a href="mailto:ordersafepet@gmail.com">ordersafepet@gmail.com</a>  с указанием номера заказа в теме письма.</p>
        </body>
        </html>
        ';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: ' . $mail . "\r\n";


        send_mail($to,$subject,$storeMessage,$name, $config['mail_user'], $config['mail_password']);
        send_mail($mail,$subjectClient,$clientMessage,$name, $config['mail_user'], $config['mail_password']);
    }
} else {
    echo json_encode(array('info' => 'error', 'msg' => __MESSAGE_EMPTY_FIELDS__));
}
 ?>