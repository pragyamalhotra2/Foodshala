<?php
include('functions.php');
 
 
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}


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




 $maxRows_Recordset3 = 6;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset3= $_GET['pageNum_Recordset3'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysqli_select_db($test,$db_database);
$query_Recordset3 ="SELECT * from product


";



$query_limit_Recordset3 = sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysqli_query($test,$query_limit_Recordset3) or die(mysqli_error());
$row_Recordset3 = mysqli_fetch_assoc($Recordset3);

if (isset($_GET['totalRows_Recordset3'])) {
  $totalRows_Recordset3 = $_GET['totalRows_Recordset3'];
} else {
  $all_Recordset3 = mysqli_query($test,$query_Recordset3);
  $totalRows_Recordset3 = mysqli_num_rows($all_Recordset3);
}
$totalPages_Recordset3 = ceil($totalRows_Recordset3/$maxRows_Recordset3)-1;

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset3 = 6;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset3 = $_GET['pageNum_Recordset3'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysqli_select_db($test,$db_database);
 $query_Recordset3 = "SELECT * from product";

$colname_Recordset3 = "-1";
if (isset($_GET['ID'])) {
  $colname_Recordset3 = $_GET['ID'];
}
mysqli_select_db($test,$db_database);

$query_Recordset3 ="SELECT * from product



where product_id ='".$_GET['id']."' ";
$Recordset3 = mysqli_query($test,$query_Recordset3) or die(mysql_error());
$row_Recordset3 = mysqli_fetch_assoc( $Recordset3);
$totalRows_Recordset3 = mysqli_num_rows($Recordset3);





$maxRows_Recordset2 = 6;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2= $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysqli_select_db($test,$db_database);
$query_Recordset2 ="SELECT * from  product
 ";



$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysqli_query($test,$query_limit_Recordset2) or die(mysqli_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysqli_query($test,$query_Recordset2);
  $totalRows_Recordset2 = mysqli_num_rows($all_Recordset2);
}
$totalPages_Recordset2 = ceil($totalRows_Recordset2/$maxRows_Recordset2)-1;

$currentPage = $_SERVER["PHP_SELF"];



$maxRows_Recordset2 = 6;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysqli_select_db($test,$db_database);
 $query_Recordset2 = "SELECT *
FROM ((product
LEFT  JOIN detail ON product.product_id = detail.product_id)
LEFT  JOIN cadrequest ON product.product_id = cadrequest.product_id

)";

$colname_Recordset2 = "-1";
if (isset($_GET['ID'])) {
  $colname_Recordset2 = $_GET['ID'];
}
mysqli_select_db($test,$db_database);

$query_Recordset2 ="SELECT *
FROM  product
 



where product.product_id ='".$_GET['id']."' ";
$Recordset2 = mysqli_query($test,$query_Recordset2) or die(mysqli_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);
//// ?>


<html>
<head>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="details.css" rel="stylesheet">
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript"
src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d3544ffea4785dc"></script>

<title>Food Item - Foodshala</title>

</head>
<body>
 <?php include('buyer-header.php'); ?>
<div class="col-sm-12 col-md-12 col-lg-12">
            <!-- product -->
            <div class="product-content product-wrap clearfix product-deatil">
                <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 ">
                            <div class="product-image">
                                <div id="myCarousel-2" class="carousel slide">

                                <div class="carousel-inner">
                                    <!-- Slide 1 -->
                                    <div class="item active" style="padding:20px; border:1px solid #e6e1e166;">

                                        <img src="upload/<?php echo $row_Recordset2['FileName']; ?>" class="img-responsive"  alt="">
                                    </div>
                                    <!-- Slide 2 -->

                                    <!-- Slide 3 -->

                                </div>


                    			</div>
							</div>
						</div>
						<div class="col-md-7 col-sm-12 col-xs-12" style="padding:20px;">
<div class="addthis_inline_share_toolbox" style="float:right;"></div>
						<h3 class="name">
							<?php echo $row_Recordset2['title']; ?>
    						 
                            </a></small>
							 



						</h3>
						<h4 style="color:#666;"><?php echo $row_Recordset2['category']; ?></h4>
						<hr>



						<h3 class="price-container" style="font-size:17px; font-weight:600;color:#525252;">
						 Price : $<?php echo $row_Recordset2['price']; ?>

						</h3>


                        <h3 class="name" style="margin-top:15px; font-size:16px; font-weight:600">Product Details</h3>
                        <h2 class="name" style="margin-top:15px; margin-bottom:15px;  font-size:25px;"></h2>

                         
                         <span style="font-weight:600">Food Type : </span><small><?php echo $row_Recordset2['material']; ?></small>
                        <h2 class="name" style="margin-top:15px; margin-bottom:16px;  font-size:25px;"></h2>

                        
                        <span style="font-weight:600">
						<span style="font-weight:600">Description:</span> <?php echo $row_Recordset2['description']; ?></span> 
                     
						   
						<li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==1 ? 'block':'none' ?>;">	 
                        <h2 class="name" data-toggle="modal" data-target="#myModal" style=" 
						background:red;padding:12px; text-align:center; width:22%;color:white; 
margin-top:20px; margin-bottom:16px; cursor:pointer;  font-size:19px;">ORDER NOW</h2></li>


                         <hr>



         
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#027706;"><?php echo $row_Recordset3['title']; ?>
		  <span style="float:right;color:#525252;">Rs. <?php echo $row_Recordset3['price']; ?></span>
		  </h4>
		   <p> <?php echo $row_Recordset3['description']; ?></p>
        </div>
        <div class="modal-body">
          <div class="col-sm-4">
                <img src="upload/<?php echo $row_Recordset2['FileName']; ?>" class="showimg img-responsive"   name="img" /></div>
                    <div class="col-sm-8">
               <h3>Get delivery fast</h3>




        <form class="comment" action="commentsave.php" method="post" id="toDo" name="toDo">
		<label>Quantity : </label>
		<input type="number" id="quantity" required  name="quantity" min="1" max="20"><br/>
        <input type="hidden" id="usermail" name="usermail" value= "<?php echo ucfirst($_SESSION['user']['username']); ?> "  >
        <input type="hidden" name="imagename" value="<?php echo $row_Recordset2['FileName']; ?>"  >
        <input type="hidden" name="category" value="<?php echo $row_Recordset2['category']; ?>" >
        <input type="hidden" name="price" value="<?php echo $row_Recordset2['price']; ?>" >
        <input type="hidden" name="title" value="<?php echo $row_Recordset2['title']; ?>"  >
		<input type="hidden" name="mobile" value="<?php echo ucfirst($_SESSION['user']['contact']); ?>"  >
        <textarea type="text" required name="address" placeholder=" Write Delivery Address " style="width:100%; height:100px; border-radius:3px;"></textarea>

<button action="index.php"  type="submit"  class="btn btn-success"  class="theButton" style="margin-top:15px;">Order Now</button>
</form>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>

                                
						<div class="description description-tabs">
							 
							<div id="myTabContent" class="tab-content">

								<div class="tab-pane fade active in" id="specifications">
									<br>
									 <form class="comment" action="commentsave.php" method="post" id="toDo" name="toDo">
        <input type="hidden" id="usermail" name="contact" value= "<?php echo ucfirst($_SESSION['user']['username']); ?> "  >
        <input type="hidden" name="imagename" value="<?php echo $row_Recordset2['FileName']; ?>"  >
        <input type="hidden" name="category" value="<?php echo $row_Recordset2['category']; ?>" >
        <input type="hidden" name="price" value="<?php echo $row_Recordset2['price']; ?>" >
        <input type="hidden" name="title" value="<?php echo $row_Recordset2['title']; ?>"  >
		<input type="hidden" name="mobile" value="<?php echo ucfirst($_SESSION['user']['contact']); ?>"  >
        <textarea type="text" required name="address" placeholder=" Write Reviews " style="width:100%; height:60px; border-radius:3px;"></textarea>

<button   type="submit"  class="btn btn-success"  class="theButton" style="margin-top:15px;">Submit Reviews</button>
</form>
								</div>
								 
							</div>
						</div>
						<hr>

						
					

							<div class="col-sm-12  " style="float:right;">
                            <div class="col-sm-6" style="float:left;"> <div class="addthis_inline_share_toolbox"></div></div>
                            <div class="col-sm-6">
                                         <form class="like" action="feedback.php" method="post" id="toDo" name="toDo">
        <input type="hidden" name="imagename" value="<?php echo $row_Recordset2['FileName']; ?>"  >
        <input type="hidden" name="contact" value="<?php echo ucfirst($_SESSION['user']['username']); ?> " >
        <input type="hidden" name="pro_cat" value="1"  >
        <input type="hidden" name="section" value="<?php echo $row_Recordset2['title']; ?>"  >
        <input type="hidden" name="category" value="<?php echo $row_Recordset2['price']; ?>"  >
          <input type="hidden" name="product_id" value="<?php echo $row_Recordset2['product_id']; ?>"  >
        <input type="hidden" name="type" value="like"  >
  
								<div class="btn-group pull-right">


                                 <button    type="submit"  data-toggle="modal"  id="button1"    onclick="onClick(this)"  data-toggle="modal"
                                 class="btn btn-white btn-default"><i class="fa fa-star"></i> Add to wishlist
         </button>
    </form>

		                             
		                        </div>

                                </div>
							</div>
						</div>
					</div>
                    <!-- Recent viwed  -->
                    <div class="well"><h4>Recently Added</h4></div>
                    <div class="row">

                     <?php do { ?>
                    <a href="product-details.php?id=<?php echo $row_Recordset4['product_id']; ?>">
                    <div class="col-sm-2" style="text-align:center;">
                    <img src="upload/<?php echo $row_Recordset4 ['FileName'] ?>"  height="200" width="200" style="border: 2px solid #80808057;
    padding: 4px;">
                    <p style="margin-top:5px;"><strong style="text-transform:uppercase; padding:5px; margin-top:5px;"><?php echo $row_Recordset4 ['title'] ?></strong></p>
                    </div></a>
					<?php } while ($row_Recordset4 = mysqli_fetch_assoc($Recordset4));?>
                    </div>
<hr>
                   <!-- End recent viwed  -->

<hr>
				</div>
			</div>
			<!-- end product -->

</div>
 
  <?php
include('footer2.php'); ?>
</body>
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
       

 <script src="css22/plugins/jquery.js"></script>
     <script src="css22/plugins/bootstrap.min.js"></script>
      <script src="css22/js/script.js"></script>

       <script>
$(document).ready(function(){
    $(".comment").submit(function(){
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url:"commentsave.php",
            data: $(this).serialize(), // serialize only clicked form, not both
        });
        return false;
    });
});
</script>
 <script>
$(document).ready(function(){
    $(".heart").submit(function(){
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url:"feedback.php",
            data: $(this).serialize(), // serialize only clicked form, not both
        });
        return false;
    });
});
</script>
 

</html>
