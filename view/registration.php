<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign Up</title>
	<link rel="stylesheet" href="../view/templete/style.css">
</head>
<body>
	<h1>Sign Up</h1>
	<form action="../controller/RegistrationAction.php" method="POST" novalidate >
		<label for="fname">First Name:</label>
		<input type="text" name="fname" id="ftname" autofocus >
		<br><br>
        <label for="lname">Last Name:</label>
		<input type="text" name="lname" id="ltname" autofocus >
		<br><br>

		<label>Gender</label>
        <input type="radio" name="gender" id="male" value="male">
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="female">
			<label for="female">Female</label>
			<br><br>

		<label for="phone">Phone:</label>
		<input type="tel" name="phone" id="phone" >
		<br><br>
		<label for="email">E-mail(<i>optional</i>):</label>
		<input type="email" name="email" id="email">
		<br><br>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" placeholder="maximum 5 character" maxlength="5" required>
		<br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" maxlength="5">
		<br><br>
		
		<input type="submit" name="submit" value="Sign Up">
		<br><br>
		<a href="../view/login.php">Go back</a>
	</form>
</body>
<?php include("../view/templete/footer.php") ?>
</html>