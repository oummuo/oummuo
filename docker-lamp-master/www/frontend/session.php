<?php
   session_start();
   require_once("config.php");

   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['id'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>