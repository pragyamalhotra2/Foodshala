<?php
    include('functions.php');


if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>

<?php
//index.php
include('connect/db_connection.php');
?>

<?php
if(isset($_GET['files']))
{
$error = ""; //error holder
if(isset($_GET['createzip']))
{
$post = $_GET;
$file_folder = "images/"; // folder to load files
if(extension_loaded('zip'))
{
// Checking ZIP extension is available
if(isset($post['files']) and count($post['files']) > 0)
{
// Checking files are selected
$zip = new ZipArchive(); // Load zip library
$zip_name = time().".zip"; // Zip name
if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
{
 // Opening zip file to load files
$error .= "* Sorry ZIP creation failed at this time";
}
foreach($post['files'] as $file)
{
$zip->addFile($file_folder.$file); // Adding files into zip
}
$zip->close();
if(file_exists($zip_name))
{
// push to download the zip
header('Content-type: application/zip');
header('Content-Disposition: attachment; filename="'.$zip_name.'"');
readfile($zip_name);
// remove zip file is exists in temp path
unlink($zip_name);
}

}
else
$error .= "* Please select file to zip ";
}
else
$error .= "* You dont have ZIP extension";
}
}
?>


<?php


$all_product_brand=$db->query("SELECT distinct product_brand FROM `product` WHERE collection = 'restra' AND product_status='1'  GROUP BY product_brand");
$all_material=$db->query("SELECT distinct material FROM `product` WHERE collection = 'restra' AND product_status='1'   GROUP BY material");
$all_year=$db->query("SELECT distinct year FROM `product` WHERE collection = 'restra' AND product_status='1' GROUP BY year");
$all_price=$db->query("SELECT distinct price FROM `product` WHERE collection = 'restra' AND product_status='1' GROUP BY price");
$all_category=$db->query("SELECT distinct category FROM `product` WHERE collection = 'restra' AND product_status='1' GROUP BY category");

// Filter query
    $sql= "SELECT * FROM product WHERE collection = 'restra' " ;


    if(isset($_GET['product_brand']) && $_GET['product_brand']!="") :
        $product_brand = $_GET['product_brand'];
        $sql.=" AND product_brand IN ('".implode("','",$product_brand)."')";
    endif;
 if(isset($_GET['category']) && $_GET['category']!="") :
        $category = $_GET['category'];
        $sql.=" AND category IN ('".implode("','",$category)."')";
    endif;
 if(isset($_GET['material']) && $_GET['material']!="") :
        $material = $_GET['material'];
        $sql.=" AND material IN ('".implode("','",$material)."')";
    endif;
  
 if(isset($_GET['price']) && $_GET['price']!="") :
        $price = $_GET['price'];
        $sql.=" AND price IN ('".implode("','",$price)."')";
    endif;


    $all_product=$db->query($sql);
    $content_per_page = 20;
    $rowcount=mysqli_num_rows($all_product);
    $total_data = ceil($rowcount / $content_per_page);
    function data_clean($str)
    {
        return str_replace(' ','_',$str);
    }

?>

<?php
$currentPage = 'index.php';
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content='Karthick muthu' name='author'/>
        <link href=' ' rel='icon' type='image/x-icon'/>
        <title>Foodshala - Resraurant</title>
        <!-- Bootstrap CSS -->

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery -->


        <!-- actual header -->
         <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124586156-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124586156-1');
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trends and Inspirations Gallerie</title>
<meta name="description" content="Latest trends,all pinterest trends images, instagram trends images,view all
new trends and inspirations You'll love our trends and inspirations and our best deals! " />
<meta content='pinterest images trends,instagram trends,all new trends and inspirations,download trends,create wishlist,all trends images
,inspirations images,' name='keywords'/>
<link rel="icon" href="images/favicon.png" type="image/x-icon" />
<script type="text/javascript">
$('#submit').prop("disabled", true);
$("#checkAll").change(function () {
      $("input:checkbox").prop('checked', $(this).prop("checked"));
      $('#submit').prop("disabled", false);
      if ($('.chk').filter(':checked').length < 1){
            $('#submit').attr('disabled',true);}
});

$('input:checkbox').click(function() {
        if ($(this).is(':checked')) {
            $('#submit').prop("disabled", false);
        } else {
        if ($('.chk').filter(':checked').length < 1){
            $('#submit').attr('disabled',true);}
        }
});
</script>


    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
 <style>


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #73a839;
  color: white;
  cursor: pointer;

  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>

<style>

.buttonheart {
  font-family: "Arial", sans-serif;
  background-color: white;
 border:none;
  color: grey;
  font-size: 12px;
  text-align: center;

  cursor:pointer;

  height:30px;
  text-transform:uppercase; 
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
}

.visited{
  background-image:none;
  background-color: white;
  font-size: 16px;

  color: #ca0909;
}



</style>
     <style>


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #73a839;
  color: white;
  cursor: pointer;

  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>

<style>




@media(max-width:992px){

        .mobile
        {
            display:none;
            }

    }






/* CSS Transform Align Navbar Brand Text ... This could also be achieved with table / table-cells */
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

}
</style>

<style>.caret-up {
    width: 0;
    height: 0;
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;

    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}</style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="css/main.css">

<link href="ani/css/animate.css" rel="stylesheet">

    </head>
    <body>
    <form  id="search_form" name="zips" method="get">
    <div class="content"> <!-- content -->
        <header>

      </header>
           <?php include('buyer-header.php'); ?>
        <!-- content -->
         <div class="container-fluid" style="margin-top:-19px;">
<div class="row" style="margin-bottom:22px;">
<img src="images/dd.jpeg" class="img-responsive">

                </div>


                 <div class="row">
                    <div class="panel list">
                      <div class="col-sm-12">
                      <h2 style="text-align:center; margin-top:12px; margin-bottom:12px;color:magenta;">
					  Find the best food as well as drinks in  <span style="color:red;">Our Country...</span></h2>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <!-- sidebar -->
                    <aside class="col-lg-3 col-md-4" >
                        <div class="panel list" >
                            <div class="panel-heading" style="background-color:#FFC107;" >
							<h3 class="panel-title" data-toggle="collapse" data-target="#panelOne" aria-expanded="true" 
							style="color:#fff; font-weight:600;font-size:20px;">Select Restaurant</h3></div>
                            <div class="panel-body collapse in" id="panelOne"  >
                                 <ul class="list-group">
                                <?php foreach ($all_product_brand as $key => $new_product_brand) :
                                    if(isset($_GET['product_brand'])) :
                                        if(in_array(data_clean($new_product_brand['product_brand']),$_GET['product_brand'])) :
                                            $product_brand_check='checked="checked"';
                                        else : $product_brand_check="";
                                        endif;
                                    endif;
                                ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label class="container"><input type="checkbox"
                                        value="<?=data_clean($new_product_brand['product_brand']); ?>"
                                        <?=@$product_brand_check?>  name="product_brand[]" class="sort_rang product_brand"><?=ucfirst($new_product_brand['product_brand']); ?><span class="checkmark"></span></label></div>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="panel list" >
                            <div class="panel-heading" style="background-color:#FFC107;"><h3 class="panel-title" data-toggle="collapse" data-target="#panelTwo" aria-expanded="true" style="color:#fff; font-size:18px;">Choose the Dish</h3></div>
                            <div class="panel-body collapse in" id="panelTwo"  >
                                <ul class="list-group">
                                <?php foreach ($all_category as $key => $new_category) :
                                    if(isset($_GET['category'])) :
                                        if(in_array(data_clean($new_category['category']),$_GET['category'])) :
                                            $category_check='checked="checked"';
                                        else : $category_check="";
                                        endif;
                                    endif;
                                ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label class="container"><input type="checkbox" value="<?=data_clean($new_category['category']); ?>" <?=@$category_check?>
                                        name="category[]" class="sort_rang category"><?=ucfirst($new_category['category']); ?><span class="checkmark"></span></label></div>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                         <div class="panel list">
                            <div class="panel-heading" style="background-color:#FFC107;"><h3 class="panel-title" data-toggle="collapse" data-target="#panelThree" aria-expanded="true" style="color:#fff;font-size:16px;">Select your preference</h3></div>
                            <div class="panel-body collapse in" id="panelThree"  >
                                <ul class="list-group">
                                <?php foreach ($all_material as $key => $new_material) :
                                    if(isset($_GET['material'])) :
                                        if(in_array(data_clean($new_material['material']),$_GET['material'])) :
                                            $material_check='checked="checked"';
                                        else : $material_check="";
                                        endif;
                                    endif;
                                ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label class="container"><input type="checkbox" value="<?=data_clean($new_material['material']); ?>" <?=@$material_check?>  name="material[]" class="sort_rang material"><?=ucfirst($new_material['material']); ?>
                                        <span class="checkmark"></span></label></div>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                         
                         

                        

                    </aside> <!-- /.sidebar -->
                  <section class="col-lg-9 col-md-8">
                        <div class="row">

                            <div id="results"></div>
                        </div>
                    </section>
                </div>

        </div> <!-- /.content -->
        <!-- external -->
    </div>


<button onclick="topFunction()"  id="myBtn" id="submit" name="createzip" title="Go to top">Download Selected Files</button>
   </form>

    </body>

<script type="text/javascript">
$(document).ready(function() {
    var total_record = 0;
    var product_brand=check_box_values('product_brand');
    var price=check_box_values('price');
    var category=check_box_values('category');
    var material=check_box_values('material');
     
    var total_groups = <?php echo $total_data; ?>;
    $('#results').load("autoload.php?group_no="+total_record+"&product_brand="+product_brand+"&material="+material+"&price="+price+"&category="+category,  function() {
        total_record++;
    });
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() == $(document).height())

        {
            if(total_record <= total_groups)
            {
                loading = true;
                $('.loader').show();
                $.get("autoload.php?group_no="+total_record+"&product_brand="+product_brand+"&material="+material+"&price="+price+"&category="+category,
                function(data){
                if (data != "") {
                    $("#results").append(data);
                    $('.loader').hide();
                    total_record++;
                }
                });
            }
                // total_record ++;
        }
    });
    function check_box_values(check_box_class){
        var values = new Array();
            $("."+check_box_class+":checked").each(function() {
               values.push($(this).val());
            });
        return values;
    }
    $('.sort_rang').change(function(){
        $("#search_form").submit();
        return false;
    });
});
</script>
<script>
$(document).ready(function(){
    $(".comment").submit(function(){
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url:"commentsave.php",
            data: $(this).serialize(), 
        });
        return false;
    });
});
</script>
     <script src="css22/plugins/jquery.js"></script>
     <script src="css22/plugins/bootstrap.min.js"></script>
      <script src="css22/js/script.js"></script>



<script src="ani/js/main.js"></script>


<script>
$(document).ready(function(){
    $(".like").submit(function(){
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
<script>

var clicks = 0;
function onClick(event) {
    event.className = "buttonheart visited";
    if (clicks >= 100) {
     alert("WRONG! YOU LOSE! TRY AGAIN!");
     // window.location.href = 'index.html';
    }
     clicks += 1;
     // document.getElementById("clicks").innerHTML = clicks;
};
</script>
</html>
