<!--0 Pending
    1 Accepted
    2 Decline
    3 Blocked
-->
<?php

  if(!isset($_COOKIE['user'])){
      header("location:index.php");
  }else{
    if(!isset($_GET['to_code'])){
      header("location:index.php");
    }else{
      $to_code=$_GET['to_code'];
      $email=$_COOKIE['user'];
      include 'connection.php';
      
      $sql=mysql_query("select * from matri where email='$email'");
      if($sq=mysql_fetch_array($sql)){
          $from_code=$sq['code'];
          
           mysql_query("INSERT INTO `matrimonial`.`match` (`from_code`, `to_code`, `status`) VALUES ('$from_code', '$to_code', '1')");
          header("location:javascript://history.go(-1)");
          
          
      }
    }
  }
   


?>