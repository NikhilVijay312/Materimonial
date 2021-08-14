<?php 
if(empty($_POST['name'])||empty($_POST['mob'])||empty($_POST['dob'])||empty($_POST['religion'])||empty($_POST['caste'])||empty($_POST['education'])||strlen($_POST['status'])==0||empty($_POST['occupation'])||empty($_POST['state'])||empty($_POST['city'])){
    header("location:edit_profile.php?err=1");
}else{ 
    $email=$_COOKIE['user'];
    include 'connection.php';
    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $status=$_POST['status'];
    $religion=$_POST['religion'];
    $lang=$_POST['lang'];
    $education=$_POST['education'];
    $occupation=$_POST['occupation'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $caste=$_POST['caste'];
    
   
    if(mysql_query("update matri set name='$name',mob='$mob',dob='$dob',status='$status',religion='$religion',lang='$lang',caste='$caste',education='$education',occupation='$occupation',state='$state',city='$city' where email='$email'")>0){
        header("location:view_profile.php");
        
    }else{
        header("location:edit_profile.php?error=1");
    }   
}
?>