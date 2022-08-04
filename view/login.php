<?php
	session_start();

	if (isset($_SESSION['username'])) {
		header("Location:dashboard.php");
	  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="../view/css/style.css">
	<link rel="stylesheet" href="../view/css/form.css">
	
	<script src="js/login.js"></script>
</head>
<body style="background-color:#ece2e2;">
<?php include('templete/header.php')  ?> 
	
	
	<form action="../controller/loginAction.php" method="POST" novalidate onsubmit="return validate_login(this);" >
		
	<div id="form_align">
	
			<h1>Login</h1>
		<label for="username">Username:</label>
			<input type="text" name="username" id="username" autofocus >
			<span id=unameErrorMsg></span>
			<br><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" >
			<span id="passwordErrorMsg"></span>
			<br><br>
			<div id="bt">
			<input type="submit" name="login" value="Login">
			<a style="padding-left:30px;" href="ForgotPassword.php">
			Forgot Password
		</a>
		
			</div>
			
		
		
		
	
		<br>
		<br>
		
		
		</div>
		


	

		<br>
	</form>
</body>
<?php include("../view/templete/footer.php") ?>
</html>