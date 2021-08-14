<?php 
if(empty($_POST['email'])||empty($_POST['pass'])){
    header("location:login.php");
}else{
    include 'connection.php';
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $rs=mysql_query("select * from matri where email='$email'");
    if($r=mysql_fetch_array($rs)){
        if($r['pass']==$pass){
            
            
            setcookie("user",$email,time()+3600);
            
            header("location:view_profile.php");
        }else{
            header("location:login.php?attempt=1");
        }
    }else{
        header("location:login.php?email=1");
    }
}

?>