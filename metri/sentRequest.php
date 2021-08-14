<?php
    if(!isset($_COOKIE['user'])){
        header("location:index.php");
        
    }else{
        $user = $_COOKIE['user'];
        
        include 'connection.php';
        $sql=mysql_query("select * from matri where email='$user'");
        if($s=mysql_fetch_array($sql))
            $from_code=$s['code'];
        
        
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Marital | Shortlisted </title>
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
<?php include "header.php" ?>
<!-- ============================  Navigation End ============================ -->


<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">New Matches</li>
     </ul>
   </div>
   <div class="col-md-9 profile_left2">
	 <div class="profile_top">
	  <div class="col-sm-3">
	      
	    </div>
	    <div class="col-sm-3 profile_left-top">
		
	    	<img src="images/a5.jpg" class="img-responsive" alt=""/>
	    </div>
	    
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
	        	<tbody>
				<h2>Krishna Tiwari</h2>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value">India</td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Caste :</td>
						<td class="day_value closed"><span>Pandit</span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span>Engineering</span></td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons">
			   <div class="vertical">Remove Request</div>
			   
			   <div class="vertical">View Profile</div>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
    </div>

<?php
        $s= mysql_query("select * from `matrimonial`.`match` where `from_code`='$from_code'");
       while($sr=mysql_fetch_array($s)){
           $to_code= $sr['to_code'];
           $q=mysql_query("select * from matri where code='$to_code'");
           if($qr=mysql_fetch_array($q)){
            
       
?>
	<div class="profile_top">
	  <div class="col-sm-3">
	      
	    </div>
	    <div class="col-sm-3 profile_left-top">
		
	    	<img src="images/a6.jpg" class="img-responsive" alt=""/>
	    </div>
	    
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
	        	<tbody>
				<h2><?php echo $qr['name'];?></h2>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value">India</td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Caste :</td>
						<td class="day_value closed"><span>Pandit</span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span>Engineering</span></td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons">
               <a href="Remove_Request.php?to_code=<?php echo $qr['code'];?>">
                   <div class="vertical">Remove Request</div></a>
               <a href="show_profile.php?id=<?php echo $qr['code'];?>">
                   <div class="vertical">View Profile</div></a>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
    </div>
<?php 
           }
       }
?>

	<div class="profile_top">
	  <div class="col-sm-3">
	      
	    </div>
	    <div class="col-sm-3 profile_left-top">
		
	    	<img src="images/a7.jpg" class="img-responsive" alt=""/>
	    </div>
	    
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
	        	<tbody>
				<h2>Manvi Rana</h2>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value">India</td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Caste :</td>
						<td class="day_value closed"><span>Pandit</span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span>Engineering</span></td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons">
			   <div class="vertical">Remove Request</div>
			   
			   <div class="vertical">View Profile</div>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
    </div>
  </div>
</div>


</body>
</html>	
<?php
            
        
    }     
?>