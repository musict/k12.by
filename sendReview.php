<?php

$message = $_POST['message'];
$message = htmlspecialchars($message);
$message = urldecode($message);
$message = trim($message);

if (mail("comtehnotorg@gmail.com", "Отзыв с сайта", "Сообщение:  ".$message. " "))
 {     echo "Спасибо, мы обязательно учтём Ваши пожелания.";
       exit;
} else {
    echo "Возникла ошибка, перезвоните нам, пожалуйста  8 029 316 68 66 ";
}?>
