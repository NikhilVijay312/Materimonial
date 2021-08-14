<?php
  
  if(!isset($_COOKIE['user'])){
      header("location:index.php");
  }else{
     if(!isset($_GET['from_code'])){
      header("location:index.php");
      }
      else{
          $from_code=$_GET['from_code'];
          $email=$_COOKIE['user'];
          include 'connection.php';
          $from_code;
          $sql=mysql_query("select * from matri where email='$email'");
          if($r=mysql_fetch_array($sql)){
              $to_code=$r['code'];
              mysql_query("update `match` set status='2' where from_code='$from_code' AND to_code='$to_code'");
          }
      }
      header("location:request.php");
 }
?>