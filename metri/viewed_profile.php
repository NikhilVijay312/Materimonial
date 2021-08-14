<?php 
 if(!isset($_COOKIE['user'])){
      header("location:index.php");
  }else{
     $email=$_COOKIE['user'];
      include 'connection.php';
      $sql=mysql_query("select code from matri where email='$email'");
      if($sq=mysql_fetch_array($sql)){
          $p_code=$sq['code'];
          $res=mysql_query("SELECT DISTINCT v_code from visit where p_code='$p_code'");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Who Viewed My Profile </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include 'header.php';?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">who Viewed my Profiles</li>
     </ul>
   </div>

   <div class="col-md-9 profile_left">
     <div class="col_4">
		
<?php
         while($r=mysql_fetch_array($res)){
             $code=$r['v_code'];
             if($re=mysql_fetch_array(mysql_query("select *from matri where code='$code'"))){
             ?>
                    <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="jobs_single.html"><img src="images/a5.jpg" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="show_profile.php?id=<?php
                                echo $r['v_code']; ?>"></a></h6>
							
							<ul class="login_details1">
							  <li><?php echo $re['name'];?></li>
							</ul>
                            <p class="description"><span class="m_1"><?php echo $re['name'];?></span>, 170 Cms | <span class="m_1">Reliogion</span> : <?php echo $re['religion'];?> | <span class="m_1">Education</span> : <?php echo $re['education']; ?> | <span class="m_1">Occupation</span> : <?php echo $re['occupation']; ?>Software Professional<br><a href="show_profile.php?id=<?php echo $r['v_code']; ?>" class="read-more">view full profile</a></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	   <div class="thumb_but"><a href="view_profile.html" class="photo_view">Send Intrest</a></div>
					   	  <div class="clearfix"> </div>
                    
					   </div>
					  </div>
<?php
             }
         } 
                      
 ?>
	                
  </div>
</div>    
</body>
</html>	
<?php
      }
     
 }
?>
