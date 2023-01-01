<?php
$mysql = new mysqli('localhost','root','123','clients');
$name = filter_var(trim($_POST['name12']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname12']),FILTER_SANITIZE_STRING);
$patro = filter_var(trim($_POST['patro12']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email12']),FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone12']),FILTER_SANITIZE_STRING);
$country = filter_var(trim($_POST['country12']),FILTER_SANITIZE_STRING);
$town = filter_var(trim($_POST['town12']),FILTER_SANITIZE_STRING);
$type = filter_var(trim($_POST['vehicle']),FILTER_SANITIZE_STRING);
$date = filter_var(trim($_POST['date12']),FILTER_SANITIZE_STRING);
$time = filter_var(trim($_POST['time12']),FILTER_SANITIZE_STRING);
$comm = filter_var(trim($_POST['comm12']),FILTER_SANITIZE_STRING);
 
 

     //добавляем в бд
     $mysql = new mysqli('localhost','root','123','clients');
     $mysql->query("INSERT INTO `zakaz`(`name`, `surname`, `patronymic`, `email`, `phone`, `country`, `town`, `type`, `date`, `time`, `comment`) VALUES ('$name','$surname','$patro','$email','$phone','$country','$town','$type','$date','$time','$comm')");
     $mysql->close();
     header('Location:/lmv/menu.html');

 
 
