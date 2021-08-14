<?php 
if(!isset($_COOKIE['user'])){
    header("location:login.php");
}else{
    $email=$_COOKIE['user'];

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
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
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
    <?php 
      include 'header.php';
    ?>
<div class="grid_3">
  
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">change password</li>
     </ul>
   </div>  
   <div class="services">
   	  <div class="col-sm-6 login_left">
	   <form method="post" action="change_pass_handler.php">
  	    
	    <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">Current  Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" name="cp" size="60" maxlength="128" class="form-text required" required>
	    </div>
           <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">New Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" name="np" size="60" maxlength="128" class="form-text required" required>
	    </div>
           <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">Retype Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" name="rp" size="60" maxlength="128" class="form-text required" required>
	    </div>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Update" class="btn_1 submit">
	    </div>
	   </form>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>

<?php 
    include 'footer.php';
?>
</body>
</html>	
<?php
    
 }

?>