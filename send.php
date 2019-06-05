<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);

//echo $name;
//echo "<br>";
//echo $phone;
if (mail("comtehnotorg@gmail.com", "Заявка с сайта", "Имя:  ".$name. " | Телефон:  ".$phone." | p.s. люблю тебя) \r\n"))
 {     header("Location: /thanx.html");
       exit;
} else {
    echo "Возникла ошибка, перезвоните нам, пожалуйста  8 029 316 68 66 ";
}?>
