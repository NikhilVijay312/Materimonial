<?php 
if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['pass'])||empty($_POST['mob'])||empty($_POST['gender'])||strlen($_POST['status'])==0||empty($_POST['dob'])||empty($_POST['caste'])||empty($_POST['education'])||empty($_POST['occupation'])||empty($_POST['state'])||empty($_POST['city'])){
    header("location:register.php?err=1");
}else{
    include 'connection.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $mob=$_POST['mob'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $status=$_POST['status'];
    $religion=$_POST['religion'];
    $lang=$_POST['lang'];
    $caste=$_POST['caste'];
    $education=$_POST['education'];
    $occupation=$_POST['occupation'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    
    $sn=0;
    $rs=mysql_query("select MAX(sn) from matri");
    if($r=mysql_fetch_array($rs)){
        $sn=$r[0];
    }
    $sn++;
    $code="";
    $a=array();
    for($i='A';$i<='Z';$i++){
        array_push($a,$i);
        if($i=='Z')
            break;
    }
    for($i='a';$i<='z';$i++){
        array_push($a,$i);
        if($i=='z')
            break;
    }
    for($i='0';$i<='9';$i++){
        array_push($a,$i);   
    }
    $b=array_rand($a,6);
    for($i=0;$i<sizeof($b);$i++){
        $code=$code.$a[$b[$i]];
    }
    $code=$code."_".$sn;
    //$sql="insert into matri (name,email,pass,mob,gender,dob,religion,caste,education,occupation,state,city) values ('$name','$email','$pass','$mob','$gender','$dob','$religion','$education','$occupation',$state','$city')";
    if(mysql_query("insert into matri values ('$sn','$code','$name','$email','$pass','$mob','$gender','$dob','$religion','$lang','$caste','$status','$education','$occupation','$state','$city')")>0){
        header("location:login.php");
        
    }else{
        header("location:index.php?error=1");
    }
}
?> 
