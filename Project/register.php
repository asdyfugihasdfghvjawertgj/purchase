<?php
$input1="";
$input2="";
$input3="";
$input4="";
$input5="";
$input6="";
$input7="";
$inputerror1="";
$inputerror2="";
$inputerror3="";
$inputerror4="";
$inputerror5="";
$inputerror6="";
$inputerror7="";
if(isset($_POST['register'])){
	  	if (!empty($_POST['input1'])) {
	  	$input1=$_POST['input1'];	
	  	}
	  	else{
	  		$inputerror1="!Please Enter Your First Name";
	  	}
	  	if (!empty($_POST['input2'])) {
	  	$input2=$_POST['input2'];	
	  	}
	  	else{
	  		$inputerror2="!Please Enter Your Last Name";
	  	}
	  	if (!empty($_POST['gender'])) {
	  	$input3=$_POST['gender'];
	  	}
	  	else{
	  		$inputerror3="!Please Select Gender";
	  	}
	  	if (!empty($_POST['input4'])) {
	  	$input4=$_POST['input4'];
	  	}
	  	else{
	  		$inputerror4="!Please Enter  your Address";
	  	}
	  	if (!empty($_POST['input5'])) {
	  	$input5=$_POST['input5'];
	  	}
	  	else{
	  		$inputerror5="!Please Enter Your Email or Phone";
	  	}
	  	if (!empty($_POST['input6'])) {
	  	$input6=$_POST['input6'];
	  	}
	  	else{
	  		$inputerror6="!Please Enter Your password";
	  	}
	  	if (!empty($_POST['input7'])) {
	  	$input7=$_POST['input7'];
	  	}
	  	else{
	  		$inputerror7="!Please Enter Your Confirm Password";
	  	}
	  	if (!empty($input1) && !empty($input2) && !empty($input3) && !empty($input4) && !empty($input5) && !empty($input6) && !empty($input7) && $input7== $input6) {
	  		include_once('controller/registercontroller.php');
	  		$registerController=new RegisterController();
	  	$registerController->createRegister($input1,$input2,$input3,$input4,$input5,$input7);
		header('location:home.php');

	}
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Registration</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
</head>
<body style="background-color:#F9F306;">
<div class="container">	
<form method="POST" action="">
	<div class="row pt-3">
		<div class="col-md-12">
		<h1 style="text-align:center;">Register Now</h1>
</div>
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<div class="form-group">
			<label>First Name<span style="color: red;">*</span></label>
				<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-users"></i></div>
        </div>
				<input type="text" name="input1" class="form-control" placeholder="Enter Your First Name" style="width:70%;" value=<?php echo $input1;?>>
				<span style="color: red"><?php echo $inputerror1; ?></span>
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
			<label>Last Name<span style="color: red;">*</span></label>
			<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-users"></i></div>
        </div>
				<input type="text" name="input2" class="form-control" placeholder="Enter Your Last Name" style="width:70%;" value=<?php echo $input2;?>>
				<span style="color: red"><?php echo $inputerror2; ?></span>
</div>
			</div>
		</div>
		<div class="col-md-4">

		</div>
	</div>
	<div class="row">
		<div class="col-md-4">

		</div>
		<div class="col-md-4" >
		<label>Gender<span style="color: red;">*</span></label>
			
			<div name="input3">
			<input type="radio" name="gender" value="male" class="radio" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male'): ?>checked='checked'<?php endif; ?> /> Male
			<input type="radio" name="gender" value="female"  class="radio" <?php if (isset($_POST['gender']) && $_POST['gender'] ==  'female'): ?>checked='checked'<?php endif; ?> /> Female
		</div>
		<span style="color: red"><?php echo $inputerror3; ?></span>
		</div>
		<div class="col-md-4">

		</div>
	</div>
	

	<div class="row">
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<div class="form-group">
			<label>Address<span style="color: red;">*</span></label>
			<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
        </div>
				<input type="text" name="input4" class="form-control" placeholder="Enter Your Address" style="width:70%;"  value=<?php echo $input4;?>>
				<span style="color: red"><?php echo $inputerror4; ?></span>
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
			<label>Email or Phone<span style="color: red;">*</span></label>
				<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope"></i></div>
        </div>
				<input type="text" name="input5" class="form-control" placeholder="Enter Your Email or Phone" style="width:70%;"  value=<?php echo $input5;?>>
				<span style="color: red"><?php echo $inputerror5; ?></span>
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
			<label>Password<span style="color: red;">*</span></label>
			<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
				<input type="password" name="input6" class="form-control" placeholder="Enter Your Password" style="width:70%;"  value=<?php echo $input6;?>>
				<span style="color: red"><?php echo $inputerror6; ?></span>
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
			<label>Confirm Password<span style="color: red;">*</span></label>
			<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
				<input type="password" name="input7" class="form-control" placeholder="Enter Your Confirm-Password" style="width:70%;" value=<?php echo $input7;?>>
				<span style="color: red"><?php echo $inputerror7; ?></span>
			</div>
			</div>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
	<div style="text-align:center;" class="pt-4 pb-3">
		<button type="submit" name="register" id="reg" class="btn-success " style="text-align: center;  width: 120px; height:40px; background-color:black; color:yellow;">Register
		</button>
	</div>
</form>
</div> 
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>