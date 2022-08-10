<?php 
session_start();
$username =$_SESSION['username'];
	if (!isset($_SESSION['username'])) {
		header("Location:login.php");
	  } 
	  require("../Data/view.php");
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../view/templete/style.css">
	<link rel="stylesheet" href="../view/css/hometop.css">
	<?php include('templete/headerTop.php')  ?>
	<link rel="stylesheet" href="../view/css/form.css">
	</head>

<body>
	

<div style=" padding-left:35%;padding-right:35%;">
<?php
	

	
$sql="SELECT  `First_Name`, `Last_Name`, `Gender`, `Phone`, `Email` FROM `Users` WHERE `User_Name`='$username'";
$result=view($sql);



if (mysqli_num_rows($result))
{ while($row = mysqli_fetch_assoc($result))
	{
	echo"<b>Profile Information</b>	";
	echo "<br>";
	echo "<br>";
	echo "<b>First Name:</b> " . $row["First_Name"];
	echo "<br><br>";
	echo "<b>Last Name: </b>" . $row["Last_Name"];	
	echo "<br><br>";				 				
	echo "<b>Gender: </b>" . $row["Gender"];	
	echo "<br><br>";
	echo "<b>Phone: </b>" . $row["Phone"];	
	echo "<br><br>";
	echo "<b>Email: </b>" . $row["Email"];	
	echo "<br><br>";
	}
}
else
{
	echo "Failed";
}





?>
</div>
	
	

	<a href="../view/dashboard.php">Go Back</a>
</body>
<?php include("../view/templete/footer.php") ?>
</html>