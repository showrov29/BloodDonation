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
<link rel="stylesheet" href="../view/templete/style.css">
<link rel="stylesheet" href="../view/css/hometop.css">
<?php include('templete/headerTop.php')  ?>
	<?php
	


$sql="SELECT  `First_Name`, `Last_Name`, `Gender`, `Phone`, `Email` FROM `Users` WHERE `User_Name`='$username'";
$result=view($sql);



if (mysqli_num_rows($result))
{ while($row = mysqli_fetch_assoc($result))
	{
	echo"<b>Profile Information</b>	";
	echo "<br>";
	echo "<br>";
	echo "First Name: " . $row["First_Name"];
	echo "<br><br>";
	echo "Last Name: " . $row["Last_Name"];	
	echo "<br><br>";				 				
	echo "Gender: " . $row["Gender"];	
	echo "<br><br>";
	echo "Phone: " . $row["Phone"];	
	echo "<br><br>";
	echo "Email: " . $row["Email"];	
	echo "<br><br>";
	}
}
else
{
	echo "kdshf";
}





?>
	

	<a href="../view/dashboard.php">Go Back</a>
</body>
<?php include("../view/templete/footer.php") ?>
</html>