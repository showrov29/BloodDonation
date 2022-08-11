<?php
	
	session_start();
	// session_unset();
	// session_destroy();
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign Up</title>
	<link rel="stylesheet" href="../view/css/style.css">
	<link rel="stylesheet" href="../view/css/form.css">
	<script src="js/registration.js"></script>
</head>
<body style="background-color:#ece2e2;">
<?php include('templete/header.php')  ?> 

	<div style="padding-left:35% ;padding-right:35%;">
	<h1 style="padding-left:35% ;">Sign Up</h1>
	<form action="../controller/RegistrationAction.php" method="POST" novalidate onsubmit="return validate_registration(this);" >
		<label for="fname">First Name:</label>
		<br>
		<input type="text" name="fname" id="ftname" placeholder="Enter First Name" autofocus >
		<span id="fnameErr"></span>

		<br>
        <label for="lname">Last Name:</label>
		<br>
		<input type="text" name="lname" id="ltname" placeholder="Enter Last Name" >
		<span id="lnameErr"></span>
		<br>

		<label>Gender</label>
		
        <input type="radio" name="gender" id="male" value="male">
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="female">
			<label for="female">Female</label>
			<span id="genderErr"></span>
			<br>

		<label for="phone">Phone:</label>
		<br>
		<input type="tel" name="phone" id="phone" placeholder="Enter Phone Number" >
		<span id="phoneErr"></span>
		<br>
		<label for="email">E-mail(<i>optional</i>):</label>
		<br>
		<input type="email" name="email" id="email" placeholder="Enter Your Email">
		<span id=""></span>	<br>
		<label for="username">Username:</label>
		<br>
		<input type="text" name="username" id="username" placeholder="maximum 5 character" maxlength="5">
		<span id="userErr"></span>
		<br>
		<label for="password">Password:</label>
		<br>
		<input type="password" name="password" id="password" placeholder="Enter Password (maximum 5 character)" maxlength="5">
		<span id="passErr"></span>
		<br>
		<div id="bt">
		<input type="submit" name="submit" value="Sign Up">

		<?php 
		
		if(isset($_SESSION['regErr']) and !empty($_SESSION['regErr'])){
			echo $_SESSION['regErr'];
		}	
		
		
		
		?>
		</div>
		
	
		<br><br>
	</div>
		<a href="../view/login.php">Go back</a>
	</form>
</body>
<?php include("../view/templete/footer.php") ?>
</html>