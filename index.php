
<?php
include('functions.php');
 
 
 


$price="";
 $allreadyEmailExist="";
?>


<?php require_once('connect/rai.php');
 
if (!isset($_SESSION)) {
  session_start();
}
$session = "-1";
if(isset($_SESSION["username"])){
    $session = $_SESSION["username"];
} else {

}

$product_id = "";
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


/////recent viwed
$maxRows_Recordset6 = 6;
$pageNum_Recordset6 = 0;
if (isset($_GET['pageNum_Recordset6'])) {
  $pageNum_Recordset6= $_GET['pageNum_Recordset6'];
}
$startRow_Recordset6 = $pageNum_Recordset6 * $maxRows_Recordset6;

mysqli_select_db($test,$db_database);
$query_Recordset6 ="SELECT * from product where category = 'Thai-food' order by product_id desc

";



$query_limit_Recordset6 = sprintf("%s LIMIT %d, %d", $query_Recordset6, $startRow_Recordset6, $maxRows_Recordset6);
$Recordset6 = mysqli_query($test,$query_limit_Recordset6) or die(mysqli_error());
$row_Recordset6 = mysqli_fetch_assoc($Recordset6);

if (isset($_GET['totalRows_Recordset6'])) {
  $totalRows_Recordset6 = $_GET['totalRows_Recordset6'];
} else {
  $all_Recordset6 = mysqli_query($test,$query_Recordset6);
  $totalRows_Recordset6 = mysqli_num_rows($all_Recordset6);
}
$totalPages_Recordset6 = ceil($totalRows_Recordset6/$maxRows_Recordset6)-1;

$currentPage = $_SERVER["PHP_SELF"];
////
$maxRows_Recordset7 = 6;
$pageNum_Recordset7 = 0;
if (isset($_GET['pageNum_Recordset7'])) {
  $pageNum_Recordset7= $_GET['pageNum_Recordset7'];
}
$startRow_Recordset7 = $pageNum_Recordset7 * $maxRows_Recordset7;

mysqli_select_db($test,$db_database);
$query_Recordset7 ="SELECT * from product where category = 'Desserts' order by product_id desc

";



$query_limit_Recordset7 = sprintf("%s LIMIT %d, %d", $query_Recordset7, $startRow_Recordset7, $maxRows_Recordset7);
$Recordset7 = mysqli_query($test,$query_limit_Recordset7) or die(mysqli_error());
$row_Recordset7 = mysqli_fetch_assoc($Recordset7);


if (isset($_GET['totalRows_Recordset7'])) {
  $totalRows_Recordset7 = $_GET['totalRows_Recordset7'];
} else {
  $all_Recordset7 = mysqli_query($test,$query_Recordset7);
  $totalRows_Recordset7 = mysqli_num_rows($all_Recordset7);
}
$totalPages_Recordset7 = ceil($totalRows_Recordset7/$maxRows_Recordset7)-1;

$currentPage = $_SERVER["PHP_SELF"];

///
$maxRows_Recordset5 = 6;
$pageNum_Recordset5 = 0;
if (isset($_GET['pageNum_Recordset5'])) {
  $pageNum_Recordset5= $_GET['pageNum_Recordset5'];
}
$startRow_Recordset5 = $pageNum_Recordset5 * $maxRows_Recordset5;

mysqli_select_db($test,$db_database);
$query_Recordset5 ="SELECT * from product where category = 'Fast-food' order by product_id desc

";



$query_limit_Recordset5 = sprintf("%s LIMIT %d, %d", $query_Recordset5, $startRow_Recordset5, $maxRows_Recordset5);
$Recordset5 = mysqli_query($test,$query_limit_Recordset5) or die(mysqli_error());
$row_Recordset5 = mysqli_fetch_assoc($Recordset5);

if (isset($_GET['totalRows_Recordset5'])) {
  $totalRows_Recordset5 = $_GET['totalRows_Recordset5'];
} else {
  $all_Recordset5 = mysqli_query($test,$query_Recordset5);
  $totalRows_Recordset5 = mysqli_num_rows($all_Recordset5);
}
$totalPages_Recordset5 = ceil($totalRows_Recordset5/$maxRows_Recordset5)-1;

$currentPage = $_SERVER["PHP_SELF"];
///
 $maxRows_Recordset4 = 6;
$pageNum_Recordset4 = 0;
if (isset($_GET['pageNum_Recordset4'])) {
  $pageNum_Recordset4= $_GET['pageNum_Recordset4'];
}
$startRow_Recordset4 = $pageNum_Recordset4 * $maxRows_Recordset4;

mysqli_select_db($test,$db_database);
$query_Recordset4 ="SELECT * from product order by product_id desc

";



$query_limit_Recordset4 = sprintf("%s LIMIT %d, %d", $query_Recordset4, $startRow_Recordset4, $maxRows_Recordset4);
$Recordset4 = mysqli_query($test,$query_limit_Recordset4) or die(mysqli_error());
$row_Recordset4 = mysqli_fetch_assoc($Recordset4);

if (isset($_GET['totalRows_Recordset4'])) {
  $totalRows_Recordset4 = $_GET['totalRows_Recordset4'];
} else {
  $all_Recordset4 = mysqli_query($test,$query_Recordset4);
  $totalRows_Recordset4 = mysqli_num_rows($all_Recordset4);
}
$totalPages_Recordset4 = ceil($totalRows_Recordset4/$maxRows_Recordset4)-1;

$currentPage = $_SERVER["PHP_SELF"];

?>
<!DOCTYPE html>
<html>
<title>FOODSHALA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="pro/style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  a{
	  color:#008000;
  }
  a:focus, a:hover {
    color: #0c0d0e;
    text-decoration: none;
}
  .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
    color: #000000;
    text-decoration: none;
    background-color: #f9bc07;
     
}
.navbar-inverse .navbar-brand {
    color: #0000A0;
}
.navbar-brand {
    float: left;
    height: 50px;
    padding: 20px 15px;
    font-size: 30px;
    line-height: 20px;
}
.dropdown-menu>li>a {
     
    padding: 10px 20px;
	
}
  .navbar-inverse .navbar-nav>li>a {
    color: #171111;
    font-family: sans-serif;
}
  .navbar
  {
  margin-bottom:0px;
  }
  
  @media (min-width: 768px)
{.navbar-nav {
    float: right;
    margin: 0;
}}

.navbar-inverse {
    background-color: #fff;
    border-color: #ffffff;
}

.navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover {
    color: #fff;
    background-color: #000000fa;
}
  </style>
  <script>
$(function() {

    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

</script>
  <script>
  /*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
  </script>
  <script>
  
  /*global $,console*/
$(function () {
  "use strict";

  var tab = $(".tab li"),
      btn = $(".nav-bar .btn"),
      infoContent = $(".info-content");
  /*menu toggle*/
  btn.click(function () {
    $(".menu").toggleClass("hidden-xs");
  });
   /*our product information dynamic tab*/
  tab.click(function () {
    //styling active tab
    var that = $(this);
    that.addClass("active").siblings().removeClass("active");
    $(".content").hide();
    $("." + that.data("class")).show();
  });

});</script>
    <title>responsive web design without framework</title>
    <link href="normalize.css" rel="stylesheet"/>
      <link rel="stylesheet" href="css/styles.css">
    <link href="style.css" rel="stylesheet"/>
  </head> 
  
  <style>
  @media (min-width: 992px)
  {.col-md-offset-3 {
    margin-left: 0% !important;
  }}
  </style>
  <body>
  <!--start navBar-->
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#0000A0;"><b> <u> FOODSHALA </u> </b></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
	  <span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="register.php">Register as Customer</a></li>
          <li><a href="restaurant-reg.php">Register as Restaurant</a></li>
          
        </ul>
      </li>
      <li><a   data-toggle="modal" data-target="#myModal" style="cursor:pointer;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
	<ul class="nav navbar-nav">
      <li  ><a href="index.php">Home</a></li>
       
    </ul>
  </div>
</nav>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top:80px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           
		   <p>  </p>
        </div>
        <div class="modal-body">
          		 
			<div class="col-md-12 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login as Customer</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Login as Restaurant</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="#" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												 
												<input type="submit" name="login_btn" id="login-submit" 
												tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">New User? <a href="register.php">Sign Up</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action=" " method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									 
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									 <div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login_btn" id="register-submit" 
												tabindex="4" class="form-control btn btn-register" value="Sign In">
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">New User? <a href="restaurant-reg.php">Sign Up</a>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
                     
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>

    <!--end navBar-->
    <!--start header-->
    <div class="header" style="background-image: url('images/cover.jpg');">
	 
      <div class="overlay">
        <div class="container text-center">
		<div class="heade-heading2">
          <h1 style="color:green;"> <b>GOOD FOOD IS GOOD MOOD. </b> </h1>
		  <p class=" 2float-left" style="color:green;"><b>Eat good, feel good!</b><p style="color:green;"><b>A recipe has no soul so eat and enjoy the way its cooked</b></p></p>
          <a href="food_court.php"><p class="responsive-p plan float-left" style="color:green;"><b>Explore our Dishes</b></p></a>
           </div>
           
        </div>
      </div>
    </div>
    <!--end header-->

    

    <!--start features-->
    <div class="features" style="background-image: url('images/second.jpg');">
      <div class="container responsive-p">
        <h2 class="heading2 text-center"> <b> <i>Discover the variety of food in your area </i> </b> </h2>
		<?php do { ?>
        <div class="col-lg-2">
		<a href="food_court.php"><h2 class="sol-comp"><?php echo $row_Recordset4 ['category'] ?></h2></a>
		<a href="food_court.php"><img  class="responsive-img thumbnail2" src="upload/<?php echo $row_Recordset4 ['FileName'] ?>" alt="person" width="100%"  />
		</a>
          
		  <div class="tab-1">
		    
		   
        </div></div>
		<?php } while ($row_Recordset4 = mysqli_fetch_assoc($Recordset4));?>
		
		 
    </div>
    <!--end features-->
<!--start product-information-->
    <div class="product-information"> 
      <div class="container">
      
        <ul class="classic-list tab">
          <li data-class="about" class="active">Fast Food</li>
          <li data-class="history">Thai Food</li>
          <li data-class="specification">Desserts</li>
           
        </ul>
		  <h2 class="heading2 text-center">Find the dishes you have dreamt of here...</h2>
        <div class="info-content">
          <div class="content about" style="height:270px;">
		  
		
		 <?php do { ?>
        <div class="col-lg-2">
		
		<a href="food_court.php"><img  class="responsive-img thumbnail2" src="upload/<?php echo $row_Recordset5 ['FileName'] ?>" 
		alt="person" width="100%"  /></a>
		
          
		 <h2 class="sol-comp"><?php echo $row_Recordset5 ['title'] ?></h2>
		    
		   
        </div>
		<?php } while ($row_Recordset5 = mysqli_fetch_assoc($Recordset5));?>
         
			
          </div>
          <div class="content history" style="height:270px;">
          <?php do { ?>
        <div class="col-lg-2">
	
		<a href="food_court.php"><img  class="responsive-img thumbnail2" src="upload/<?php echo $row_Recordset6 ['FileName'] ?>" alt="person" width="100%"  />
		</a>
          	<h2 class="sol-comp"><?php echo $row_Recordset6 ['title'] ?></h2>
		  <div class="tab-1">
		    
		   
        </div></div>
		<?php } while ($row_Recordset6= mysqli_fetch_assoc($Recordset6));?>
          </div>
          <div class="content specification" style="height:270px;">
       <?php do { ?>
        <div class="col-lg-2">
		<a href="food_court.php">
		<img  class="responsive-img thumbnail2" src="upload/<?php echo $row_Recordset7 ['FileName'] ?>" 
		alt="person" width="100%"  /></a>
		<h2 class="sol-comp"><?php echo $row_Recordset7 ['title'] ?></h2>
          
		  <div class="tab-1">
		    
		   
        </div></div>
		<?php } while ($row_Recordset7 = mysqli_fetch_assoc($Recordset7));?>
          </div>
           
        </div><hr>
      </div> 
	   
    </div>
    <!--end product-information-->

     

    

    <!--start footer-->
    <div class="footer"  style="position: absolute;width: 100%; bottom: 0;">
      <div class="container">
       <p class="  text-center">For more information about FOODSHALA</p>
	    
        <div class="clearFix"></div>
      </div>
       
    </div>
    <!--end footer-->
    
 <a id="back2Top" title="Back to top" href="#">&#10148;</a>
</body>
</html>
