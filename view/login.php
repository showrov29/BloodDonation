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
	<!-- <link rel="stylesheet" href="../view/css/form.css"> -->
	
	<script src="js/login.js"></script>
</head>
<body>
<?php include('templete/header.php')  ?> 
	
	
	<form action="../controller/loginAction.php" method="POST" novalidate onsubmit="return validate_login(this);" >
		
	<div id="login">
	
			<h1>Login</h1>
		<label for="username">Username:</label>
			<input type="text" name="username" id="username" autofocus >
			<span id=unameErrorMsg></span>
			<br><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" >
			<span id="passwordErrorMsg"></span>
			<br><br>
			<input type="submit" name="login" value="Login">
		
		<br>
		<P>Not a member yet?</P>
		
		<a href="Registration.php">
			Sign Up
		</a>
		<br>
		<br>
		
		<a href="ForgotPassword.php">
			Forgot Password
		</a>


	</div>

		<br>
	</form>
</body>
<?php include("../view/templete/footer.php") ?>
</html>