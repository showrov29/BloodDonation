<?php 
session_start();
$username = $_SESSION['username'];
	if (!isset($_SESSION['username'])) {
		header("Location:../view/login.php");
	  } 
require("../Data/view.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Events</title>
	<link rel="stylesheet" href="../view/templete/style.css">
	<link rel="stylesheet" href="../view/css/hometop.css">


</head>
<body >

<?php 

$sql="SELECT * FROM `Training`";
$result=view($sql);
    

if (mysqli_num_rows($result) > 0) {
    // output data of each row
		echo " <h2>Training Events:</h2>";
	echo "<table border=1 >";
		echo "<tr>";
			echo "<th>Date </th>";
			echo "<th>Room No </th>";
			echo "<th>Traine</th>";
			echo "<th>Event Time</th>";
		echo "</tr>";
		

    while($row = mysqli_fetch_assoc($result)) {
    
	
		echo "<tr>";
			echo "<td>" . $row["Date"]."</td>";
			echo "<td>" . $row["Room_No"]. "</td>";
            echo "<td>" . $row["Traine"]."</td>";
            echo "<td>" . $row["Time"]."</td>";
            
		echo "</tr>";
	
	
    }
	echo "</table>";
	
  } else {
    echo "0 results";
  }



?>
<br>
<!-- <a href="../view/dashboard.php">Go Back</a> -->
<!-- <?php include("../view/templete/footer.php") ?> -->

</html>