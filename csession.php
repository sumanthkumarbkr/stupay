<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select c_code from college where c_code = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['c_code'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:college_page.php");
   }
?>