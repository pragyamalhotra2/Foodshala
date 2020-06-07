<?php
/* Attempt MySQL server connection. Assuming we are running MySQL
server with default setting (user 'root' with no password) */
$hostname_link = "localhost";
$database_link = "foodcourt";
$username_link = "root";
$password_link = "";
$link = new mysqli($hostname_link, $username_link, $password_link, $database_link);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
//$con->close()
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($link, $theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }
  $theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string($link,$theValue) : mysqli_escape_string($link,$theValue);
  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "stipSlash":
      $theValue = ($theValue != "") ? "'" . stripslashes($theValue) . "'" : "NULL";
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


// Check connection
if($link=== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Escape user inputs for security
$name = "";
$custype = "";
$contact = "";
$city = "";
$username = "";
$password ="";
$user_type =""; 
 
 $Requiredname="";
 $Requiredcustype="";
 $Requiredcontact="";
 $Requiredcity="";
 $Requiredusername="";
 $Requiredpassword="";
 $Requireduser_type="";
 
 


 $Requiredcontactnumeric="";
 $Requirednamelatter="";
 $allreadyEmailExist="";
 
 if (isset($_POST["submit"]) && $_POST["submit"] == "Submit")


{
 
$name = mysqli_real_escape_string($link, $_POST['name']);
$custype = mysqli_real_escape_string($link, $_POST['custype']);
 
$contact = mysqli_real_escape_string($link, $_POST['contact']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$user_type = mysqli_real_escape_string($link, $_POST['user_type']);

 







if($name=="")
{
    $Requiredname= "*Enter Your Name";
    $IsError=true;
}


 $Requirednamelatter="";
if($name!="")
{
	if(!preg_match("/^[a-zA-Z,  .\-]{2,20}+$/i",$name))
	{
		$Requirednamelatter = "*Enter Valid Name";
	    $IsError=true;
	}
}

 


 

if($contact=="")
{
	$Requiredcontact = "*Please Enter Contact";
	$IsError=true;
}

$Requiredcontactnumeric="";
if($contact!="")
{
	if(!preg_match("/^[0-9, .\-]{6,16}+$/i",$contact))
	{
		$Requiredcontactnumeric = "*Enter Valid Contact ";
	    $IsError=true;
	}
}




 //if($address=="")
//{
	//$Requiredaddress = "*Enter Address";
	//$IsError=true;
//}
















 $query = mysqli_query($link, "SELECT * FROM loginadmin WHERE username='".$username."'");

if(mysqli_num_rows($query) > 0){

   // echo "Email already exists, Pleaee try another email ID";
	$allreadyEmailExist = "Email already exist.";
	$IsError=true;
	//exit;
}



//}

if(!$IsError){

// attempt insert query execution
$sql = "INSERT INTO loginadmin (email,name,city,username,contact,password,user_type,custype)
VALUES ('$username','$name','$city','$username', '$contact','$password','$user_type','$custype')";







if(mysqli_query($link, $sql)){

    echo "Submitted successfully.";

	header('Location: login.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 }
}
?>
