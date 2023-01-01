<?php
$mysql = new mysqli('localhost','root','123','clients');
$name = filter_var(trim($_POST['name12']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname12']),FILTER_SANITIZE_STRING);
$patro = filter_var(trim($_POST['patro12']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email12']),FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone12']),FILTER_SANITIZE_STRING);
$country = filter_var(trim($_POST['country12']),FILTER_SANITIZE_STRING);
$town = filter_var(trim($_POST['town12']),FILTER_SANITIZE_STRING);

$check12 = $_POST['vehicle'];
$days = filter_var(trim($_POST['days12']),FILTER_SANITIZE_STRING);
$value = $_POST['value12'];
$comm = filter_var(trim($_POST['comm12']),FILTER_SANITIZE_STRING);
 
 

     //добавляем в бд
     $mysql = new mysqli('localhost','root','123','clients');
     $mysql->query("INSERT INTO `zakaz2`(`name`, `surname`, `patronymic`, `email`, `phone`, `country`, `town`, `checkl`, `days`, `value`, `comment`) VALUES ('$name','$surname','$patro','$email','$phone','$country','$town','$check21','$days','$value','$comm')");
     $mysql->close();
     header('Location:/lmv/menu.html');