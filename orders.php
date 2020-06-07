<?php
-
include('connect/config.php');
include('functions.php');
require_once('connect/rai.php');

 if (!isAdmin())
{ 
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}

?>
<?php
$currentPage = 'wishlist-user.php';
  ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]--><head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Metas Page details-->
<title>User-Wishlist</title>
<link rel="icon" href="image/favicon.png" type="image/x-icon" />
<meta name="description" content="UX designer and web developer">
<meta name="author" content="">
<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="bootstrap.min.css">

<style>

.img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img 
{
    display: block !important;
    max-width: 50% !important;
    /* height: auto; */
    min-height: 165px !important;
}

.navbar-brand {
  padding: 0px;
}
.navbar-brand>img {
  height: 100%;
  padding: 15px;
  width: auto;
}


@media(max-width:992px){

        .mobile
        {
            display:none;
            }

    }
 @media(max-width:992px){

    .example3 .nav >li >a {
  padding-top: 15px;
  padding-bottom: 15px;
}

    }
.example3 .navbar-brand {
  height: 80px;
}

.example3 .nav >li >a {
  padding-top: 30px;
  padding-bottom: 30px;
  color:#000;
  font-size:16px;
}
.example3 .navbar-toggle {
  padding: 10px;
  margin: 25px 15px 25px 0;
}

.brand-centered {
  display: flex;
  justify-content: center;
  position: absolute;
  width: 100%;
  left: 0;
  top: 0;
}
.brand-centered .navbar-brand {
  display: flex;
  align-items: center;
}
.navbar-toggle {
    z-index: 1;
}
.navbar-alignit .navbar-header {
      -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  height: 50px;
}
.navbar-alignit .navbar-brand {
    top: 50%;
    display: block;
    position: relative;
    height: auto;
    transform: translate(0,-50%);
    margin-right: 15px;
  margin-left: 15px;
}

.navbar-nav>li>.dropdown-menu {
    z-index: 9999;
}

body {
  font-family: "Lato";
}</style>
<!--google font style-->
<link href='css/font-family.css' rel='stylesheet' type='text/css'>
<!--font-family: 'Great Vibes', cursive; -->
<link href='css/font-style.css' rel='stylesheet' type='text/css'>
<!--font-family: 'Open Sans', sans-serif; -->

<!-- font icon css style-->
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body onLoad="load()" onUnload="GUnload()">

<!--wrapper start-->
<?php include('buyer-header.php'); ?>

<div class="wrapper" id="wrapper">
  <!-- Preloader -->
  <div id="preloader">
    <div id="status"></div>
  </div>
  <!--Header start -->

  <!--Header end -->


  <div class="container">
 
      <div class="row">
  <div class="col-lg-12" style="margin-top:25px;">
  <div class="btn-success"  ><h4 style="margin-left:10px; vertical-align:middle; color:#fff; padding-top:10px;">Orders Received</h4></div>
  <div class="col-lg-12"  style="margin:7px 5px; 7px 0;">
  <div class="col-lg-2">



   </div><hr>


  <table style="height: 100px;" class="table table-striped">
  <thead>
    <tr>
<th scope="col">#</th>
      <th scope="col">Product</th>

      <th scope="col">Price</th>
	  <th scope="col">Item Name</th>
	  <th scope="col">Qunatity</th>
	  <th scope="col">Address</th>
	  
      <th scope="col">Date/Time</th>
      <th scope="col">Delete/Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr><?php $query=mysqli_query($con,"SELECT * from userreview order by u_id desc ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
 ?>
       <tr id="<?php echo $row['u_id'] ?>">

      <td><?php echo $cnt;?></td>
     <a href=""> <td   >
       <img src="upload/<?php echo $row['imagename']?>" width="200" height="150" 
	   style="padding:12px; border:1px solid #c3bfbf;" class="img-responsive"></td></a>

        
   
      <td style=" vertical-align: middle;">
      <div class="row" style="max-width:300px; padding:15px;">
      Rs. <?php echo $row['price']?>

       </div></td>
	   <td style=" vertical-align: middle;">
      <div class="row" style="max-width:300px; padding:15px;">
       <?php echo $row['title']?>

       </div></td>
	   
	   <td style=" vertical-align: middle;">
      <div class="row" style="max-width:300px; padding:15px;">
       <?php echo $row['quantity']?>

       </div></td>
	   
	   
	   <td style=" vertical-align: middle;">
      <div class="row" style="max-width:300px; padding:15px;">
       <?php echo $row['address']?>

       </div></td>
       <td style=" vertical-align: middle;">
      <div class="row" style="max-width:300px; padding:15px;">
      <?php echo $row['c_time']?>

       </div></td>
      <td style=" vertical-align: middle;"><button class="btn btn-danger btn-sm remove dlt"  >Remove</button>
       </p></td>
    </tr>
  <?php $cnt=$cnt+1;
} ?>
  </tbody>
  </tr>
</table>

     </div>

    </div>
  </div>
</div>
</div>

   </div>
  </section>
  <!--/Important People -->
  <!--Photo Album start -->

  <!--Photo Album end -->
  <!--Blog section start -->



</div>

   <section class="footer">
   <?php include('footer2.php'); ?>
  </section>
  <!--Footer end -->
</div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--for placeholder jquery-->


 <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'delete-user-wishlist.php',
               type: 'GET',
               data: {ad_id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");
               }
            });
        }
    });


</script>



<!--about jquery-->




</body>


</html>
  

