
<?php 
if(!isset($_COOKIE['user'])){
    header("location:index.php");
}else{
    include 'connection.php';
    $email=$_COOKIE['user'];
    $res=mysql_query("SELECT * from matri where email='$email'");

    if($re=mysql_fetch_array($res)){
        $from_code=$re['code'];
        
    }
    
    if(!isset($_GET['id'])){
        $to_code=$_GET['id'];
    }
        
    ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Profile :: w3layouts</title>
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
      <form action="" method="post">
      <div class="form-group">
			     <label for="edit-name">Message <span class="form-required" title="This field is required.">*</span></label>
				 <textarea class="form-control bio" placeholder="" name="mess" rows="3"></textarea>
			  </div>
      <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Send" class="btn_1 submit">
			  </div> 
      </form>
    </div>
    </div>
    
    </body>
</html>
<?php
    if(isset($_POST['op'])){
        if(empty($_POST['mess'])){
          header("location:mail.php?err=1");
        }else{
            $mess=$_POST['mess'];
            $to_code=$_GET['id'];
            
        
            if(mysql_query("insert into message values('$from_code','$mess','$to_code')")>0){
               //header("location:mail.php?succ=1"); 
        
                
            }else{} 
    
        }
    }
    

?>
<?php 
}
?>