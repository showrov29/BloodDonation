<?php 
	
	session_start();
	// if (isset($_SESSION['username'])) {
	// 	header("Location: ../view/homePage.php");
	// }
	require("../Data/view.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="../view/templete/style.css">
</head>
<body>

	<?php

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
	
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{

			$Username = test($_POST['username']);
			$Password = test($_POST['password']);

			
			if (empty($Username) || empty($Password)) 
			{
					echo "Fill up the form properly";
					echo "<br>";
					echo "Go back to Login Page and Try again with valid username or password";					
			}
			elseif (!empty($Username) && !empty($Password)) 
			{
				
				$sql="SELECT `Id` FROM `Users` WHERE `User_name`='$Username' AND `Password`='$Password'";
				$result=view($sql);
				if (mysqli_num_rows($result)==1)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						$_SESSION['username']=$_POST['username'];
						header("Location:../view/dashboard.php");
						break;
					}
					
				}
				else
			{
				$_SESSION['logStatus']="Login Failed";
				header("Location:../view/login.php");
				echo "login failed";
				echo "<br>";
			}



					
			}
			
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
	?>
	<br><br>
	<a href="../view/login.php">Go Back</a>
	<!-- <?php include("../view/templete/footer.php") ?> -->
</body>
</html>