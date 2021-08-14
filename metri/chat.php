
<?php 
/*
if(!isset($_COOKIE['user'])){
    header("location:index.php");
}else{
    include 'connection.php';
    $email=$_COOKIE['user'];
    $res=mysql_query("SELECT * from matri where email='$email'");

    if($re=mysql_fetch_array($res)){
        $from_code=$re['code'];
        
    }
    
   if(isset($_GET['id'])){
        $to_code=$_GET['id'];
    }
    
    $str=mysql_query("select * from message where from_code='$from_code' AND to_code='$to_code'");
            while($s=mysql_fetch_array($str)){
                ?>

                <div>
              <?php  echo $s['message']; ?>
                <div>
                    <?php
            } 
}
*/
?>
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
      <div class="row" style=" border: 1px solid red;">
          <div class="col-sm-3 bg-info"style="height:500px;">
              <?php 
                 $l=mysql_query("select * from matri where code IN(select DISTINCT to_code from message where from_code='$from_code' UNION DISTINCT select from_code from message where to_code='$from_code'
                 )");
                 while($list=mysql_fetch_array($l)){
                     ?>
                  <div class="row">
                      <button class="btn-info"style="width=100%;"id=<?php echo $list['code']; ?>>
                      <h1 style="color:green"> 
                      <?php echo $list['name']; ?>
                      </h1>
                          </button>      
              </div>
              <?php
                 }
              
              ?>
        </div>
          <div id=m class="col-sm-9"style="height: 500px;">
              
          </div>
      </div>
  </div>
</div>
    
</body>
</html>

<?php 
}
?>