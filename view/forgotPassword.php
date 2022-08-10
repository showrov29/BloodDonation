<?php 
session_start();
// $username = $_SESSION['username'];
// 	if (!isset($_SESSION['username'])) {
// 		header("Location:login.php");
// 	  } 
require("../Data/view.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forgot password</title>
	<link rel="stylesheet" href="../view/css/style.css">
	<script src="js/forgotPass.js"></script>
	<link rel="stylesheet" href="../view/css/form.css">
	
</head>
<body>
<?php include('templete/header.php')  ?> 
<div style=" padding-left:35%;padding-right:35%;">
	<h1>Reset Password</h1>
	<form action="../view/forgotPassword.php" method="POST" novalidate onsubmit="return validate_forgotPass(this);">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" placeholder="Enter Username" autofocus >
		<span id="unameErrorMsg"></span>
		<br><br>
		<label for="phone">Phone number:</label>
		<input type="tel" name="phone" id="phone" placeholder="Enter Phone Number" required>
		<span id="phoneErr"></span>
		<br><br>
		<input type="submit" name="submit" value="Check">
		<br><br>
		<a href="../view/login.php">Go back</a>
	
	<?php 

    $link_address="../controller/forgotPassword2.php";
		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

	if ($_SERVER['REQUEST_METHOD'] == "POST")
		{

			$uname = test($_POST['username']);
			$Phone = test($_POST['phone']);

			if(empty($uname) || $uname === null || empty($Phone)||$Phone=== null)
			{
				echo "Fill up the box";
				echo "<br>";
			}
			else
			{
				$flag = false;

				$sql="SELECT `Id` FROM `Users` WHERE `User_name`='$uname' AND `Phone`='$Phone'";
				$result=view($sql);

				if (mysqli_num_rows($result)==1)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						
						$flag=true;
						break;
					}
					
				}


		
			

				if ($flag === true)
				{
                    echo '<h4>User "' . $uname . '" found</h4>';
                    echo"<br>";
                    echo" Click the Link below to continue ";
					echo "<br>";
					echo "<a href='".$link_address."'>Reset Password</a>";

				}
				else
				{
					echo '<h4 >' . $uname . ' not found </h4>';
					echo "<br>Please insert the correct information";
				}
				?>
				
	<?php

            	
			}
		}
	?>
	</div>	
</body>
<?php include("../view/templete/footer.php") ?>
</html>
