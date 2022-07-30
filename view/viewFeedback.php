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
	<title>Feedbacks</title>
	<link rel="stylesheet" href="../view/templete/style.css">

</head>
<body>
	
<?php include('../view/templete/header.php')  ?> 
<?php 





$sql="SELECT * FROM `Feedback`";
$result=view($sql);
    

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo " <h2>Feedbacks:</h2>";
	  echo "<table border=1>";
	  echo "<tr>";
	  echo "<th>Name</th>";
	  echo "<th>Email</th>";
	  echo "<th>Rating</th>";
	  echo "<th>Suggestion</th>";
	  echo "</tr>";
	  
    while($row = mysqli_fetch_assoc($result)) {
		
	 
		  echo "<tr>";
			  echo "<td>" .  $row["Name"]. "</td>";
			  echo "<td>" .  $row["Email"]."</td>";
			  echo "<td>" .  $row["Rating"]. "</td>";
			  echo "<td>" .  $row["Suggestion"]."</td>";
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