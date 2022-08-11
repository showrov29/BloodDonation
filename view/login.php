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
	<script>
		
	</script>
</head>
<body style="background-color:#ece2e2;">
<?php include('templete/header.php')  ?> 
	
	
	<form action="../controller/loginAction.php" method="POST" novalidate onsubmit="return validate_login(this);" >
		
	<div style="padding-left:35% ;padding-right:35%;">
	
			<h1 style="padding-left:40% ;" >Login</h1>
		<label for="username">Username:</label>
			<input type="text" name="username" id="username" placeholder="Enter Username" autofocus >
			<span id=unameErrorMsg></span>
			<br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="Enter password" >
			<span id="passwordErrorMsg"></span>
			<br><br>
			<div id="bt">
			<input type="submit" name="login" value="Login" onclick=" test();"><br><br>
			<?php 
			if(isset($_SESSION['logStatus']) and !empty($_SESSION['logStatus'])){
				echo $_SESSION['logStatus'];
			}
			
			
			?>
			<br>
			<a style="padding-left:35%;" href="ForgotPassword.php">
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