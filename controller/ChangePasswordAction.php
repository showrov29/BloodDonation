<?php 
	session_start();
	require("../Data/view.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
	<link rel="stylesheet" href="../view/templete/style.css">
</head>
<body>
	<h1 >Change Password </h1>	
	
	<?php

		function test($user)	
		{
			$user = trim($user);
			$user = stripslashes($user);
			$user = htmlspecialchars($user);
			return $user;
		}		
	?>		
	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$Username = $_SESSION['username'];
			$Password = test($_POST['password']);
			if (empty($Password))
			{
				echo "Fill up the password properly";			
							
			}
			elseif(!empty($Password)|| $Password != NULL)
			{
				$sql="UPDATE `Users` SET `Password`='$Password' WHERE `User_Name`='$Username'";
				view($sql);
				
				header("Location:../view/dashboard.php");
				
			}
			}
							
		
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	        
	?>
	<br><br>
	<a href="../view/dashboard.php">Go Back
	<?php include("../view/templete/footer.php") ?>
</body>
</html>

