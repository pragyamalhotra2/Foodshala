<html>
<head>

  <link rel="stylesheet" href="bootstrap.min.css">
      <link rel="stylesheet" type='text/css' href="css/stylenew.css">
<link rel="stylesheet" type='text/css' href="css/checkbox.css">
 
 
<style>
 div.sticky{
     position: sticky;
    top: 50px;
    z-index: 999999;
 }   
    

.dropdown-menu > li > a {
padding:8px 20px;
font-size:15px;
font-weight:700;
}    
</style>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #eaeaea;
  padding: 7px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(204, 200, 200, 0.8);
  padding: 10px;
  font-size: 12px;
  text-align: center;
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

<style>
li
{
	display:block;
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


.example2 .navbar-brand>img {
  padding: 7px 15px;
}



.example3 .navbar-brand {
  height: 80px;
}

.example3 .nav >li >a {
  padding-top: 30px;
  padding-bottom: 30px;
  font-size:16px;
  color:#4a4343;
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

<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}


div.b {
  white-space: nowrap; 
  width: 210px; 
  overflow: hidden;
  text-overflow: ellipsis; 
  
}
</style>
</head>


<body>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	
    <ul class="nav navbar-nav" style="float:right;">
	<li class="dropdown" style="padding:0px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-user-circle-o" aria-hidden="true"></i> 
		  <?php echo ucfirst($_SESSION['user']['name']); ?><b class="caret">
          </b></a>
          <ul class="dropdown-menu">
              
            
		   
		   
           <li style=" 
		   border-bottom:1px solid #ded4d4; padding-top:7px; padding-bottom:7px;">
		   <a href="profile.php">My Profile</a></li>
		   
           <li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==1 ? 'block':'none' ?>;
		   border-bottom:1px solid #ded4d4; padding-top:7px; padding-bottom:7px;">
		   <a href="wishlist-user.php"> My Wishlist</a></li>
		   
         <li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==0 ? 'block':'none' ?>;
		   border-bottom:1px solid #ded4d4; padding-top:7px; padding-bottom:7px;">
		   <a href="wishlist.php"> User Saved</a></li>
         
        <li style=" padding-top:7px; padding-bottom:7px; ">
		<a href="logout.php" style="color:#8c1111; font-weight:600;" >
		<i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>


          </ul>
        </li>
        <li class="dropdown" style="padding:0px;">
        <li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==1 ? 'block':'none' ?>">
          <a href="wishlist-user.php"><i class="fa fa-heart" aria-hidden="true"></i> My Wishlist</a> </li>
       <li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==1 ? 'block':'none' ?>">
          <a href="my_orders.php">  My Orders</a> </li>
       <li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==0 ? 'block':'none' ?>" >
         <a href="orders.php">  Orders</a></li>

         
      </li>


          

       <li style="display:<?php echo ucfirst($_SESSION['user']['user_type'])==0 ? 'block':'none' ?>">
       <a href="add-items.php"> <i class="fa fa-upload" aria-hidden="true"></i> Add Food Item </a></li>


       

      
      <li> </li>
    </ul>
  </div>
</nav></div>
<div class="clearfix"></div>


<div class="example3" >
  <nav class="navbar navbar-inverse navbar-static-top" style="background:#fff; box-shadow:0 2px 42px rgba(0,0,0,.33);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">

       <h2>FOOD SHALA</h2>
        </a>
</div>
	  <div class="container mt-3">

</div>
    </div>
  </nav>
</div>
</div>
 <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>    $(function(){
    $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
    });
    </script>
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
     <!-- Page Content -->
      </body></html>
<div class="clearfix"></div>

