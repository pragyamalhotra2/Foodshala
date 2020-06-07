<?php


    if(isset($_POST["Submit"])){





    	$errors = array();

		$extension = array("jpeg","jpg","png","pdf","gif");

		$bytes = 10000;
		$allowedKB = 10000;
		$totalBytes = $allowedKB * $bytes;

		if(isset($_FILES["files"])==false)
		{
			echo "<b>Please, Select the files to upload!!!</b>";
			return;
		}

		$conn = mysqli_connect("localhost","root","","foodcourt");

		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
		{
			$uploadThisFile = true;

			$file_name=$_FILES["files"]["name"][$key];
			$file_tmp=$_FILES["files"]["tmp_name"][$key];

			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			if(!in_array(strtolower($ext),$extension))
			{
				array_push($errors, "File type is invalid. Name:- ".$file_name);
				$uploadThisFile = false;
			}

			if($_FILES["files"]["size"][$key] > $totalBytes){
				array_push($errors, "File size must be less than 10MB. Name:- ".$file_name);
				$uploadThisFile = false;
			}

			if(file_exists("upload/".$_FILES["files"]["name"][$key]))
			{
				array_push($errors, "File is already exist. Name:- ". $file_name);
				$uploadThisFile = false;
			}
			$title = "";
			$category = "";
			$price = "";
			$description = "";
			$material = "";
			 $product_brand = "";
			 $mail = "";
			 
			 
            $Requiredtitle="";
			$Requiredcategory="";
			$Requiredprice="";
			$Requiredmaterial="";
			$Requireddescription="";
			$Requiredproduct_brand="";
			$Requiredmail="";
			
			
	        $title = mysqli_real_escape_string($conn, $_POST['title']);
			$category = mysqli_real_escape_string($conn, $_POST['category']);
			$price = mysqli_real_escape_string($conn, $_POST['price']);
			$material = mysqli_real_escape_string($conn, $_POST['material']);
			$description = mysqli_real_escape_string($conn, $_POST['description']);
			$product_brand = mysqli_real_escape_string($conn, $_POST['product_brand']);
			$mail = mysqli_real_escape_string($conn, $_POST['mail']);
			
			
			if($uploadThisFile){
				$filename=basename($file_name,$ext);
				$newFileName=$filename.$ext;
				move_uploaded_file($_FILES["files"]["tmp_name"][$key],"upload/".$newFileName);

				$query = "INSERT INTO product(product_brand,category,title,material,description,price,mail, FileName) VALUES('$product_brand','$category','$title','$material','$description','$price','$mail','".$newFileName."')";

				mysqli_query($conn, $query);
			}
		}

		mysqli_close($conn);

		$count = count($errors);

		if($count != 0){
			foreach($errors as $error){
				echo $error."<br/>";
			}
		}
	}
?>
