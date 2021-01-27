<?php

$message = $_POST['message'];
$message = htmlspecialchars($message);
$message = urldecode($message);
$message = trim($message);

if (mail("vkichigina93@gmail.com", "Отзыв с сайта", "Сообщение:  ".$message. " \r\n p.s. люблю тебя) \r\n "))
 {     echo "Спасибо, мы обязательно учтём Ваши пожелания.";
       exit;
} else {
    echo "Возникла ошибка, перезвоните нам, пожалуйста  8 029 651 75 91 ";
}?>
