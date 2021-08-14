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
      $sql=mysql_query("select code from matri where email='$email'");
      if($sq=mysql_fetch_array($sql)){
          $from_code=$sq['code'];
          
          mysql_query("insert into shortlist values('$from_code','$to_code')");
          header("location:search.php");
         // header("location:javascript://history.go(-1)");
      }
   }
}
?>