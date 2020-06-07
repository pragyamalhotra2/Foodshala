

<?php
 
require_once('connect/rai.php');

    include('functions.php');


if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

 


$id = "";
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

////




////
$maxRows_Recordset3 = 20;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset3= $_GET['pageNum_Recordset3'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysqli_select_db($test,$db_database);
$query_Recordset3 =$query_Recordset3 = "SELECT * from loginadmin where username ='".$_SESSION['user']['username']."'


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
////
////
$maxRows_Recordset4 = 20;
$pageNum_Recordset4 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset4= $_GET['pageNum_Recordset4'];
}
$startRow_Recordset4 = $pageNum_Recordset4 * $maxRows_Recordset4;

mysqli_select_db($test,$db_database);
$query_Recordset4 =$query_Recordset3 = "SELECT * from admindata where contact ='".$_SESSION['user']['username']."'


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
////
?>
<style>

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 80px;
  background: #fff;
  min-height: 374px;
}
 
</style> 
<?php include('buyer-header.php'); ?> 
 

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					 
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $row_Recordset3['name']; ?>
					</div>
					<div class="profile-usertitle-job">
						<?php echo $row_Recordset3['custype']; ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="fa fa-user" aria-hidden="true"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-gear" aria-hidden="true"></i>
							Account Settings </a>
						</li>
						<li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==0 ? 'block':'none' ?>;">
							<a href="orders.php" target="_blank">
							<i class="fa fa-cart-plus" aria-hidden="true"></i>
							Orders </a>
						</li>
						<li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==1 ? 'block':'none' ?>;">
							<a href="my_orders.php" target="_blank">
							<i class="fa fa-cart-plus" aria-hidden="true"></i>
							My Orders </a>
						</li>
						<li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==1 ? 'block':'none' ?>;">
							<a href="wishlist-user.php" target="_blank">
							<i class="fa fa-cart-plus" aria-hidden="true"></i>
							My Wishlist </a>
						</li>
						<li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==0 ? 'block':'none' ?>;">
							<a href="add-items.php" target="_blank">
							<i class="fa fa-plus" aria-hidden="true"></i>
							Add Food Item </a>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-support" aria-hidden="true"></i>
							Support </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <p><label>Username : </label><span> <?php echo $row_Recordset3['name']; ?></span></p>
			   <p><label>Email ID : </label><span> <?php echo $row_Recordset3['username']; ?></span></p>
			     <p><label>Account Type : </label><span> <?php echo $row_Recordset3['custype']; ?></span></p>
			   <p><label>Mobile : </label><span> <?php echo $row_Recordset3['contact']; ?></span></p>
			   <p><label>City : </label><span> <?php echo $row_Recordset3['city']; ?></span></p>
            </div>
		</div>
	</div>
</div>
<center>
 
</center>
<br>
<br>