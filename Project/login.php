<?php
session_start();
	  		include_once('controller/registercontroller.php');
	  		$registerController=new RegisterController();
	  		$results=$registerController->get();
	  		foreach ($results as $result) {
        if (isset($_POST['log'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
	  		if ($email==$result['email'] && $password==$result['password']) {
          include_once('controller/registercontroller.php');
        $registerController=new RegisterController();
        $cresults=$registerController->getCustomer($email);
          foreach ($cresults as $cresult) {
            $_SESSION['cid']=$cresult['id'];
            $_SESSION['email']=$cresult['email'];

          }header('location:home.php');
	  			
	  		}
	  		
		}	
	  	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>login</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<link href="bootstrap.css" rel="stylesheet">
	
</head>
<body style="background-color:#F9F306;">
    <div class="container mt-5 div">
    <h1 style="text-align:center;padding-top:80px">Login Form</h1>
    <form method="POST" >
      <div class="row pt-3">
      <div class="col-md-4">
      </div>
        <div class="col-md-4">
          <div class="form-group">
			<label>EMAIL</label>
			<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope"></i></div>
        </div>
            <input type="text" name="email" id="input1" class="form-control" placeholder="Enter Your Email or Phone" style="width:70%;"  >
			<span style="color: red;" id="span1"></span>
	</div>
          </div>
        </div>
        <div class="col-md-4">
        </div>
      </div>
      <div class="row">
      <div class="col-md-4">
      </div>
        <div class="col-md-4">
          <div class="form-group"> 

			<label>PASSWORD</label>
			<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
            <input type="text" name="password" id="input2"class="form-control" placeholder="Enter Your Password" style="width:70%;"  >
			<span style="color: red;" id="span2"></span>
	</div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
	  <div class="row">
      <div class="col-md-4">
      </div>
    
  <div class="col-md-4">
      <button type="submit" id="login" name="log" class="btn-success p-2 btn-lg btn-block" style="font-size:20px;background-color:black; color:yellow;">Login
      </button>
    </div>
    
    
    <div class="col-md-4">

    </div>
  </div>
  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
      New User?<a href="register.php">Create New Account</a>
    </div>
    <div class="col-md-4">
      
    </div>
  </div>
  </form>
  </div>
  <script src="jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/login.js"></script>	
  
    </body>
</html>