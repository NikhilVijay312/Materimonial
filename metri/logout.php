<?php 
if(!isset($_COOKIE['user'])){
    header("location:login.php");
}else{
    include 'connection.php';
    mysql_query("delete from profile");
    setcookie("user","",time()-1);
    header("location:index.php");
}
?>