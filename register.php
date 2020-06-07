 
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<body background="./images/pattern2.jpg">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content" style="background:#eadf7f87;">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Register as Customer</h4>
              
            </div>
          
            <div class="modal-body">
              
            
                <form id="registerForm" action="loginsubmit.php" method="POST" >
				 
				<div class="form-group"> 
                        <div class="col-xs-12">
                        <label for="InputEmail">Enter Full Name</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="name" placeholder="Enter Customer Name" required>
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
						<label for="InputName">Prefer</label>
						 <div class="input-group">
				<span><input type="radio"   name="custype" checked value="Home Delivery">  Home Delivery <span>
				<input type="radio" name="custype" value="Self Service">  Self Service</span></span>
				 </div>                     
                </div>
				</div>
<!---form--->            
                    <div class="form-group">
                    <div class="col-xs-6">

                        <label for="InputName">Mobile No.</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="contact" placeholder="Enter Mobile No." required>
						
						
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    
                        
                         
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                </div>       
                </div> 
				 
				 <div class="form-group">
                        <div class="col-xs-6" >
                        <label for="InputStreetName">Email ID</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="username" placeholder="Enter Email" required>
						<input type="hidden" class="form-control" name="user_type" value="1"  >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>                     
                </div>
				 <div class="form-group">
                        <div class="col-xs-12" >
                        <label for="InputStreetName">Password</label>
                        <div class="input-group">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>                     
                </div>
                
                    
             
                        
                        

                  <div class="form-group">
                  <div class="input-group-addon">
                  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success pull-right">
                  
                  </div>
                </div>
                </form>
              </div>
          </div>
       </div>


<script type="text/javascript">

</script>
</body>
</html>