<?php
    $con = mysqli_connect("localhost","root","","foodcourt");
date_default_timezone_set('Asia/Kolkata');
    $imagename = $_POST['imagename'];
    $mobile = $_POST['mobile'];
    $price = $_POST['price'];
    $title = $_POST['title'];
    $category = $_POST['category'];
	$usermail = $_POST['usermail'];
    $address = $_POST['address'];
	$quantity = $_POST['quantity'];
    $date = date('Y-m-d H:i:s');


     if($address=="")
{
    $address = "*Enter Your Name";
	$IsError=true;
}

if(!$IsError){
	$query = "insert into userreview (imagename, mobile,price,category,address,quantity,title,usermail,c_time) values ('$imagename','$mobile','$price','$category','$address','$quantity','$title','$usermail','$date')";

	if(mysqli_query($con, $query)){
		
		header('Location: my_orders.php');
		echo 'Saved';
	}

}
?>
