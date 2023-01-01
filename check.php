<?php
$mysql = new mysqli('localhost','root','123','clients');
$login = filter_var(trim($_POST['email1']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pswd1']),FILTER_SANITIZE_STRING);
 $res = mysqli_query($mysql,"SELECT * FROM users WHERE email = '$login'");
 $num = mysqli_num_rows($res);
 if(mb_strlen($login)<5||mb_strlen($login)>90){
   echo "Недопустимая длина логина";
   exit;
 }
 else if(mb_strlen($pass)<5||mb_strlen($pass)>90){
   echo "Недопустимая длина пароля";
   exit;
 }
 if($num == 0) {

     //добавляем в бд
     $mysql = new mysqli('localhost','root','123','clients');
     $mysql->query("INSERT INTO `users`(`email`, `password`) VALUES ('$login','$pass')");
     $mysql->close();
     header('Location:/lmv/login.php');

 }
 else { echo "Пользователь с таким email существует! "; }
