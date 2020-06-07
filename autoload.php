<?php
    include('functions.php');


if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

?><?php

$content_per_page = 40;
$group_no  = strtolower(trim(str_replace("/","",$_REQUEST['group_no'])));
$start = ceil($group_no * $content_per_page);
$sql= "SELECT * FROM product WHERE collection = 'restra' " ;


    if(isset($_GET['price']) && $_GET['price']!="") :
        $price = explode(',',url_clean($_REQUEST['price']));
        $sql.=" AND price IN ('".implode("','",$price)."')";
    endif;
if(isset($_GET['product_brand']) && $_GET['product_brand']!="") :
        $product_brand = explode(',',url_clean($_REQUEST['product_brand']));
        $sql.=" AND product_brand IN ('".implode("','",$product_brand)."')";
    endif;
    if(isset($_GET['category']) && $_GET['category']!="") :
        $category = explode(',',url_clean($_REQUEST['category']));
        $sql.=" AND category IN ('".implode("','",$category)."')";
    endif;
    if(isset($_GET['subcategory']) && $_GET['subcategory']!="") :
        $subcategory = explode(',',url_clean($_REQUEST['subcategory']));
        $sql.=" AND subcategory IN ('".implode("','",$subcategory)."')";
    endif;
     
    $sql.=" order by category asc";
    $sql.=" LIMIT $start, $content_per_page  ";
    $all_product=$db->query($sql);
    $rowcount=mysqli_num_rows($all_product);
    // echo $sql; exit;

    function url_clean($String)
    {
        return str_replace('_',' ',$String);
    }
?>
<html style="overflow-y:scroll;">


<head>
<style>
.hov:hover {
  background-color: #ccdee0;
  padding:5px;
  color: #0c0000;
}
</style>
</head>
<body>

<!-- listing -->
        <?php if(isset($all_product) && count($all_product) && $rowcount > 0) : $i = 0; ?>
            <?php foreach ($all_product as $key => $products) : ?>
                <article class="col-md-4 col-sm-6 ">
                    <div class="thumbnail product"  >

 <input class="box" type="checkbox" id="<?php echo $products['product_id']; ?>" style="position: absolute;
 margin-left: 20px; margin-top: 20px; width:17px; height:17px;"   class="chk"  name="files[]"
 value="<?php echo $products['FileName']; ?>"/>
                        <figure>

                        <form class="like" action="feedback.php" style="text-align: -webkit-center;"
						method="post" id="toDo" name="toDo">
         



       <a href="product-details.php?id=<?php echo $products['product_id']; ?>"> <img  
        src="upload/<?php echo $products['FileName']; ?>" alt="<?php echo $products['FileName']; ?>"
        class="img-responsive" style="padding:12px; max-width:230px;"  ></a>


                            </form>
                        </figure>

                        <div class="grid-container" style="display:block;">

      
     <div class="grid-item">

        <form class="like" action="feedback.php" method="post" id="toDo" name="toDo">
        <input type="hidden" name="imagename" value="<?php echo $products['FileName']; ?>"  >
        <input type="hidden" name="contact" value="<?php echo ucfirst($_SESSION['user']['username']); ?> " >
        <input type="hidden" name="pro_cat" value="1"  >
        <input type="hidden" name="section" value="<?php echo $products['title']; ?>"  >
        <input type="hidden" name="category" value="<?php echo $products['price']; ?>"  >
          <input type="hidden" name="product_id" value="<?php echo $products['product_id']; ?>"  >
        <input type="hidden" name="type" value="like"  >
 <a href="#" data-toggle="tooltip" title="Add to wishlist">
        <button type="submit"  data-toggle="modal"  id="button1"    onclick="onClick(this)"  data-toggle="modal"  class="buttonheart">
       Add to wishlist</button></a>
    </form>

    </div>


                        <div class="caption">

                            <div class="size" style="font-size:15px;color:#bf0909;"><strong>
                           <a class="hov" href="product-details.php?id=<?php echo $products['product_id']; ?>">
                           <?php echo $products['title']; ?></a></strong></div>

                            <h5 style="color:#3c3a3a;">price : <?php echo $products['price']; ?></h5>
                      <h5 style="color:#226484; font-weight:600;font-family:sans-serif;">
					  <?php echo $products['product_brand']; ?></h5>
					  
					  <li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==1 ? 'block':'none' ?>;">
					   <a class="hov" href="product-details.php?id=<?php echo $products['product_id']; ?>">
					   
					   <button type="button" class="btn btn-success">ORDER NOW</button></a></li>
                        </div>
						
						
                    </div>
                </article>
            <?php $i++; endforeach; ?>
        <?php endif; ?>

<!-- /.listing -->

</body>

 
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
 
 
 
<script src="ani/js/jquery-2.2.0.min.js"></script>
 




</html>
