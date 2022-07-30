<?php
	//session_start();
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
	<h1 >Change Password Action</h1>	
	
	<?php

		function test($users)	
		{
			$users = trim($users);
			$users = stripslashes($users);
			$users = htmlspecialchars($users);
			return $users;
		}		
	?>		
	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			
			$Npassword = test($_POST['Npassword']);
			$CNpassword = test($_POST['CNpassword']);
			$Username=test($_POST['uname']);
			if (empty($_POST['Npassword']) || empty($_POST['CNpassword']))
			{
				echo "Fill up the boxes properly";	
				echo "<br>";		
				?>
				<br>
				
				<?php				
			}
			else
			{		
				if ($Npassword==$CNpassword)				
			{	
				
				$sql="UPDATE `Users` SET `Password`='$Npassword' WHERE `User_Name`='$Username'";
				view($sql);

            		echo "Password Reset succesful";
				
			}
			else{
				echo"Password doesn't match";
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
	<?php include("../view/templete/footer.php") ?>
</body>
</html>
