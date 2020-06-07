 <?php
    include('functions.php');


 if (!isAdmin())
{
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}


?>
<?php include 'upload.php';?>



<?php

//index.php

include('connect/db_connection.php');

?>
 
 <html>
 <head>
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body style="background:#f3f0f052;">
<div class="container">
	<div class="row">
		<h2>Add Food Item</h2>
	</div>
  <form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" class="form-horizontal" action=""> 
<fieldset>



<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Item Name</label>  
  <div class="col-md-6">
  <input id="title" name="title" placeholder="Name here" class="form-control input-md" required="" type="text">
  <span class="help-block">Food Item Name</span>  
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="jarak">Price</label>
  <div class="col-md-2">
    <div class="input-group">
      <input id="price" name="price" class="form-control" placeholder="00" type="text">
      <span class="input-group-addon">Rs.</span>
    </div>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="panggilan">Description</label>  
  <div class="col-md-6">
  <input id="description" name="description" placeholder="Food Description"
  class="form-control input-md" type="text">
  <input id="product_brand" name="product_brand" value="<?php echo ucfirst($_SESSION['user']['name']); ?>"
  class="form-control input-md" type="hidden">  
  
  <input id="mail" name="mail" value=" <?php echo ucfirst($_SESSION['user']['username']); ?>"
  class="form-control input-md" type="hidden">  
  </div>
</div>

 
<!-- veg non veg-->
<div class="form-group">
<label class="col-md-4 control-label" for="tempatlahir"> </label> 
<div class="col-md-6">
<span><input type="radio" name="material" value="Vegeterion">  Veg <span>
				<input type="radio" name="material" value="Non Vegeterion">  Non Veg</span></span>
</div></div>



 
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nisn">Cuisines</label>  
  <div class="col-md-6">
  <select id="category" name="category" class="form-control">
      <option value="0">-- Slect Category --</option>
      <option value="Fast-Food">Fast Food</option>
      <option value="Chinease-Food">Chinese Food</option>
      <option value="Indian-Food">Indian Food</option>
      <option value="Continental">Continental</option>
     <option value="Vegan">Vegan</option>
	 <option value="Thai-Food">Thai Food</option>
    </select>
    
  </div>
</div>
 
<div class="form-group">
  <label class="col-md-4 control-label" for="nisn">Upload Photo</label>  
  <div class="col-md-6">
  <input type="file" required id="exampleInputFile" name="files[]" multiple="multiple">
  </div>
  </div>

<div class="form-group">
 
<!-- Button Submit -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-2">
  <button type="submit" class="btn btn-primary" name="Submit" >Start Upload</button>
  </div>
</div>

</fieldset>
</form>

</div>
 
</body>
</html>






"upload/<?php echo $row_Recordset6 ['FileName'] ?>"