<?php 
if(!isset($_COOKIE['user'])){
    header("location:login.php");
}else{
 $user=$_COOKIE['user'];
include 'connection.php';
$sql=mysql_query("select * from matri");

?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Search :: w3layouts</title>
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
    <?php include 'header.php'; ?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Regular Search</li>
     </ul>
   </div>
   <!--<script type="text/javascript">
    $(function () {
     $('#btnRadio').click(function () {
          var checkedradio = $('[name="gr"]:radio:checked').val();
          $("#sel").html("Selected Value: " + checkedradio);
      });
    });
   </script>-->
<div class="col-md-9 search_left">
  <form action="" method="post">	
   <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Gender : <span class="form-required" title="This field is required.">*</span></label>
	<div class="col-sm-7 form_radios">
		<input type="radio" class="radio_1" value="male" name="gender"/> Male &nbsp;&nbsp;
		<input type="radio" class="radio_1" name="gender" value="female"/> Female
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
     
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Marital Status : </label>
	<div class="col-sm-7 form_radios">
		<input type="checkbox" class="radio_1" value="Single" name="single" /> Single &nbsp;&nbsp;
		<input type="checkbox" class="radio_1"  value="Divorced" name="divorced"/> Divorced &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" value="Widowed" name="widowed" /> Widowed &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" value="Separated" name="seprarated" /> Separated &nbsp;&nbsp;
		
	</div>
	<div class="clearfix"> </div>
</div>
    
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">District / City : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="city">
            <option value="">select city</option>
               <?php
                 $sql=mysql_query("SELECT DISTINCT city from matri");
                 while($res=mysql_fetch_array($sql)){
                   echo "<option value='".$res['city']."'>".$res['city']."</option>"; 
                 }
               ?>
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">State : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="state">
            <option value="">select State</option>
           <?php
                 $sql=mysql_query("SELECT DISTINCT state from matri");
                 while($res=mysql_fetch_array($sql)){
                   echo "<option value='".$res['state']."'>".$res['state']."</option>"; 
                 }
            ?>  
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div> 
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Religion : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="religion">
            <option value="">select religion</option>
             <?php
                 $sql=mysql_query("SELECT DISTINCT religion from matri");
                 while($res=mysql_fetch_array($sql)){
                   echo "<option value='".$res['religion']."'>".$res['religion']."</option>"; 
                 }
            ?>
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Mother Tongue : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="lang">
            <option value="">Select Mother Tongue </option>
            
            <?php
                 $sql=mysql_query("SELECT DISTINCT lang from matri");
                 while($res=mysql_fetch_array($sql)){
                   echo "<option value='".$res['lang']."'>".$res['lang']."</option>"; 
                 }
            ?> 
            
        </select>
          
    <div class="input-group1">
      <input type="submit" name="submit" value="Submit">
      </div>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
      <!--
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Show Profile : </label>
	<div class="col-sm-7 form_radios">
		<input type="checkbox" class="radio_1" /> with Photo &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" checked="checked" /> with Horoscope
	</div>
	<div class="clearfix"> </div>
  </div>
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Don't Show : </label>
	<div class="col-sm-7 form_radios">
		<input type="checkbox" class="radio_1" /> Ignored Profiles &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" checked="checked" /> Profiles already Contacted
	</div>
	<div class="clearfix"> </div>
  </div>  -->
<!--  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Age : </label>
	<div class="col-sm-7 form_radios">
	  <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="28" id="slider-name" placeholder="28" type="text" required="">
      </div>
      <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="40" id="slider-name" placeholder="40" type="text" required="">
      </div>
      <div class="clearfix"> </div>
	</div>
      
	<div class="clearfix"> </div>
  </div> -->
        
 </form>
       
    <?php 
    if(isset($_POST['submit'])){
    include 'connection.php';
    if(isset($_POST['gender'])){
      
        $gender=$_POST['gender'];
        $str="gender="."'$gender'";
        $ptr = "AND";
       if(isset($_POST['single'])){
           
            $status=$_POST['single'];
            $str=$str." ".$ptr." status='$status'";
            $ptr="OR";
        }
        if(isset($_POST['divorced'])){
            $status=$_POST['divorced'];
            $str=$str." ".$ptr." status='$status'";
        
            $ptr="OR";
        }
        if(isset($_POST['widowed'])){
            $status=$_POST['widowed'];
            $str=$str." ".$ptr." status='$status'";
            $ptr="OR";
            
        }
        if(isset($_POST['separated'])){
            $status=$_POST['separated'];
            $str=$str." ".$ptr." status='$status'";
            
        }
        $ptr="AND";    
       // echo strlen($_POST["religion"]);
        if(strlen($_POST['city'])>0){
            $city=$_POST['city'];
            
            $str=$str." ".$ptr." city='$city'";
        }
        if(strlen($_POST['state'])>0){
            $state=$_POST['state'];
            
            $str=$str." ".$ptr." state='$state'";
        }
        if(strlen($_POST['religion'])>0){
            $religion=$_POST['religion'];
            
            $str=$str." ".$ptr." religion='$religion'";
        } 
        
        if(strlen($_POST['lang'])>0){
            $lang=$_POST['lang'];
            
            $str=$str." ".$ptr." lang='$lang'";
        } 
        
        $i=0;
        $rs=mysql_query("select * from matri where $str");
        while($r=mysql_fetch_array($rs)){
          $i++;           
    ?>
<div class="row">
 <div class="col-md-9 profile_left1">
  	       <div class="profile_top"><a href="show_profile.php?id=<?php echo $r['code']; ?>">

      <h2><?php echo $i; ?>&nbsp;&nbsp;<?php echo $r['name']; ?></h2>
	    <div class="col-sm-4 profile_left-top">
	    	<img src="images/p13.jpg" class="img-responsive" alt=""/>
	    </div> 
               </a>
        <!--
	    <div class="col-sm-3">
	      <ul class="login_details1">
			 <li>Last Login : 5 days ago</li>
			 <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
		  </ul>
	    </div>  -->
	    <div class="col-sm-8">
	    	<table class="table_working_hours">
	        	<tbody>
	        		<tr class="opened_1">
						<td class="day_label1">Age / Height :</td>
						<td class="day_value">28, 5ft 5in / 163cm</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Last Login :</td>
						<td class="day_value">4 hours ago</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Religion :</td>
						<td class="day_value"><?php echo $r['religion']; ?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Marital Status :</td>
						<td class="day_value"><?php echo $r['status']; ?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value">India</td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Gender :</td>
						<td class="day_value closed"><span><?php echo $r['gender']; ?></span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span><?php echo $r['education']; ?></span></td>
					</tr>
			    </tbody>
		   </table>
            
		   <a href="mail.php?id=<?php echo $r['code'];?>">
               <input type="button" class="btn btn-primary" name="send_mail" value="Send Mail"></a>
            <a href="shortlist_handler.php?to_code=<?php echo $r['code'];?>">
                <div class="btn btn-primary">Shortlisted</div></a>
           
            <a href="interest.php?to_code=<?php echo $r['code'];?>">
                <div class="btn btn-primary">Send Interest</div></a>
                
		   
	    </div>
	    <div class="clearfix"> </div>
    </div>
      </div> 
        </div>
<?php
        } }
             }
         }   
    ?>
    
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
    </div></div></div>
</body>
</html>	