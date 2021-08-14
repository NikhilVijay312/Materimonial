<?php
  
  if(!isset($_COOKIE['user'])){
      header("location:index.php");
  }else{
     if(!isset($_GET['to_code'])){
      header("location:index.php");
      }
      else{
          $to_code=$_GET['to_code'];
          $email=$_COOKIE['user'];
          include 'connection.php';
          $from_code;
          $sql=mysql_query("select * from matri where email='$email'");
          if($r=mysql_fetch_array($sql)){
              $from_code=$r['code'];
              mysql_query("delete from `match` where from_code='$from_code' AND to_code='$to_code'");
          }
      }
      header("location:sentRequest.php");
 }
?>