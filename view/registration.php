<?php
	session_start();
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
	<div id="form_align">
	<h1 style="align-items: center;">Sign Up</h1>
	<form action="../controller/RegistrationAction.php" method="POST" novalidate onsubmit="return validate_registration(this);" >
		<label for="fname">First Name:</label>
		<input type="text" name="fname" id="ftname" autofocus >
		<span id="fnameErr"></span>

		<br><br>
        <label for="lname">Last Name:</label>
		<input type="text" name="lname" id="ltname"  >
		<span id="lnameErr"></span>
		<br><br>

		<label>Gender</label>
        <input type="radio" name="gender" id="male" value="male">
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="female">
			<label for="female">Female</label>
			<span id="genderErr"></span>
			<br><br>

		<label for="phone">Phone:</label>
		<input type="tel" name="phone" id="phone" >
		<span id="phoneErr"></span>
		<br><br>
		<label for="email">E-mail(<i>optional</i>):</label>
		<input type="email" name="email" id="email">
		<span id=""></span>	<br><br>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" placeholder="maximum 5 character" maxlength="5">
		<span id="userErr"></span>
		<br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" maxlength="5">
		<span id="passErr"></span>
		<br><br>
		<div id="bt">
		<input type="submit" name="submit" value="Sign Up">
		</div>
		
	
		<br><br>
	</div>
		<a href="../view/login.php">Go back</a>
	</form>
</body>
<?php include("../view/templete/footer.php") ?>
</html>