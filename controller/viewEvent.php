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
	<title>Events</title>
	<link rel="stylesheet" href="../view/templete/style.css">
	<link rel="stylesheet" href="../view/css/hometop.css">


</head>
<body >

<?php 

$sql="SELECT * FROM `Event`";
$result=view($sql);
    

if (mysqli_num_rows($result) > 0) {
    // output data of each row
		echo " <h2>Blood Collection Events:</h2>";
	echo "<table border=1 >";
		echo "<tr>";
			echo "<th>Event ID </th>";
			echo "<th>Event Date </th>";
			echo "<th>Event Location</th>";
			echo "<th>Event Time</th>";
		echo "</tr>";
		

    while($row = mysqli_fetch_assoc($result)) {
    
	
		echo "<tr>";
			echo "<td>" . $row["Id"]."</td>";
			echo "<td>" . $row["Date"]. "</td>";
            echo "<td>" . $row["Location"]."</td>";
            echo "<td>" . $row["Time"]."</td>";
            
		echo "</tr>";
	
	
    }
	echo "</table>";
	
  } else {
    echo "0 results";
  }



?>
<br>



</html>