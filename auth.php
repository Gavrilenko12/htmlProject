<?php
session_start();
 require_once 'connect.php';
 $login =$_POST['email'];
 $password = $_POST['psw'];
 $check_user = mysqli_query($connect, query:"SELECT * FROM users WHERE email = '$login' AND password = '$password'");
if(mysqli_num_rows($check_user)>0){
  $user = mysqli_fetch_assoc($check_user);
$_SESSION['user']=[
  "id"=>$user['id'],
  "email"=>$user['email']];
setcookie('email',$user['login'],time()+3600,"/");

header('Location:/lmv/menu.html');


}else{
  $_SESSION['message']='not correct';

  header('Location:/lmv/login.php');
}








 ?>
