<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$to = "teplovaov@mail.ru";
$from = "olga-anonim@mail.ru ";

if (isset($_GET['complain'])) {
    $city = $_GET['city'];
    $city = htmlspecialchars($city);
    $city = urldecode($city);
    $city = trim($city);
    $adress = $_GET['adress'];
    $adress = htmlspecialchars($adress);
    $adress = urldecode($adress);
    $adress = trim($adress);
    $name = $_GET ['name'];
    $name = htmlspecialchars($name);
    $name = urldecode($name);
    $name = trim($name);
    $text = $_GET['text'];
    $text  = htmlspecialchars($text );
    $text  = urldecode($text );
    $text  = trim($text );

    $data = $city . " ".$adress . " ". $name;
    if (isset ($_FILES['file']))
        $data = $data.$_FILES['file'];

    if (mail($to, "complain", $data, "http://localhost:8001 \r\n")) {
        echo "сообщение успешно отправлено";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }
}
