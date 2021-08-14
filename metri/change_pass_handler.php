<?php 
 if(empty($_POST['cp'])||empty($_POST['np'])||empty($_POST['rp'])){
     header("location:change_pass.php");
 }else{
     $email=$_COOKIE['user'];
     $cp=$_POST['cp'];
     $np=$_POST['np'];
     $rp=$_POST['rp'];
     include 'connection.php';
     $rs=mysql_query("select*from matri where email='$email'");
     if($r=mysql_fetch_array($rs)){
         if($r['pass']==$cp){
             if($np=$rp){
                 if(mysql_query("update matri set pass='$np'")>0){
                     header("location:view_profile.php");
                 }else{
                     
                 }
             }else{
                 header("location:change_pass.php?match=1");
             }
         }else{
             header("location:change_pass.php?cperr=1");
         }
     }else{
         header("location:change_pass.php?email=1");
     }
 }
?>