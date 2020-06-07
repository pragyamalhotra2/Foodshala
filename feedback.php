<?php
    $con = mysqli_connect("localhost","root","","foodcourt");
    date_default_timezone_set('Asia/Kolkata');
$imagename = $_POST['imagename'];
    $contact = $_POST['contact'];
    $pro_cat = $_POST['pro_cat'];
    $type = $_POST['type'];
    $category = $_POST['category'];
    $product_id = $_POST['product_id'];
    $section = $_POST['section'];
    $date = date('Y-m-d H:i:s');
    $query = "insert into admindata (imagename, contact,pro_cat,type,category,product_id,section,c_time) values ('$imagename','$contact','$pro_cat','$type','$category','$product_id','$section','$date')";
    if(mysqli_query($con, $query)){
		header('Location: wishlist-user.php');
	}

 

?>
