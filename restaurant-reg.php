  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<body style="background:#d4d4d475;">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Regsiter as Restaurant</h4>
              
            </div>
          
            <div class="modal-body">
              
            
                <form id="registerForm" action="loginsubmit.php" method="POST" >
				
				<div class="form-group"> 
                        <div class="col-xs-12">
                        <label for="InputEmail">Enter Restaurant Name</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="name" placeholder="Enter Restaurant Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>
                     </div>
                 </div>

                        <div class="form-group">
                        <div class="col-xs-12" >
                        <label for="InputStreetName">City</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="city" placeholder="Enter City" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>                     
                </div>
				<div class="form-group">
                        <div class="col-xs-12" style="margin:16px;">
						 <div class="input-group">
				<span><input type="radio" name="custype" value="Admin">  I'm the Admin <span>
				<input type="radio" name="custype" value="Manager">  I'm the owner/manager</span></span>
				 </div>                     
                </div>
				</div>
<!---form--->            
                    
				 <div class="form-group">
                        <div class="col-xs-6" >
                        <label for="InputStreetName">Email ID</label>
                        <div class="input-group">
						<input type="hidden"   name="user_type" value="0">
                        <input type="text" class="form-control" name="username" placeholder="Enter email id" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>                     
                </div>
				 <div class="form-group">
                        <div class="col-xs-6" >
                        <label for="InputStreetName">Password</label>
                        <div class="input-group">
                        <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>                     
                </div>
                
                    <div class="form-group">
                    <div class="col-xs-12">

                        <label for="InputName">Mobile No.</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="contact" placeholder="Enter mobile number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    
                        
                         
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                </div>       
                </div> 
             
                        
                        

                  <div class="form-group">
                  <div class="input-group-addon">
                  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success pull-right">
                  
                  </div>
                </div>
                </form>
              </div><!---modal-body--->
          </div>
       </div>


<script type="text/javascript">

</script>
</body>
</html>