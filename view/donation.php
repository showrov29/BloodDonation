<?php 
session_start();
$username = $_SESSION['username'];
	if (!isset($_SESSION['username'])) {
		header("Location:login.php");
	  }
require("../Data/view.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Donors</title>
	<link rel="stylesheet" href="../view/templete/style.css">
	<link rel="stylesheet" href="../view/css/hometop.css">

</head>
<body>
<?php include('../view/templete/headerTop.php')  ?> 
<?php 


$sql="SELECT * FROM `Donation`";
$result=view($sql);
    

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo " <h2> Donatin History:</h2>";
	  echo "<table border=1>";
	  echo "<tr>";
	  echo "<th>Serial No</th>";
	  echo "<th>Name</th>";
	  echo "<th>Ammount</th>";
	  echo "<th>Date</th>";
	  echo "</tr>";
	  
    while($row = mysqli_fetch_assoc($result)) {
		
	 
		  echo "<tr>";
			  echo "<td>" .  $row["Id"]. "</td>";
			  echo "<td>" .  $row["Name"]."</td>";
			  echo "<td>" .  $row["Ammount"]."</td>";
			  echo "<td>" .  $row["Date"]."</td>";
		  echo "</tr>";
	  
	 
    }
	echo "</table>";
  } else {
    echo "0 results";
  }

?>
<br>
<a href="../view/dashboard.php">Go Back</a>
<?php include("../view/templete/footer.php") ?>

</html>