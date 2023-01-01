<?php
$mysql = new mysqli('localhost','root','123','clients');
$id = filter_var(trim($_POST['id12']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name12']),FILTER_SANITIZE_STRING);
$value = filter_var(trim($_POST['daysoutput']),FILTER_SANITIZE_STRING);
$text = filter_var(trim($_POST['text12']),FILTER_SANITIZE_STRING);

     //добавляем в бд
     $mysql = new mysqli('localhost','root','123','clients');
     $mysql->query("INSERT INTO `reviews`(`id_re`, `name`, `value`, `text`) VALUES ('$id','$name','$value','$text')");
     $mysql->close();
     header('Location:/lmv/menu.html');

