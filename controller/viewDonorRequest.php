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

<?php 

$sql="SELECT * FROM `Donor_Request`";
$result=view($sql);
    

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo " <h2>Donor Request:</h2>";
	  echo "<table border=1>";
	  echo "<tr>";
	  echo "<th>Serial No</th>";
	  echo "<th>First Name</th>";
	  echo "<th>Last Name</th>";
	  echo "<th>Gender</th>";
	  echo "<th>Phone</th>";
	  echo "<th>Age</th>";
	  echo "<th>Blood Group</th>";
	  echo "<th>Address</th>";
	  echo "<th>Medical History</th>";
	  echo "</tr>";
	  
    while($row = mysqli_fetch_assoc($result)) {
		
	 
		  echo "<tr>";
			  echo "<td>" .  $row["Id"]. "</td>";
			  echo "<td>" .  $row["First_Name"]."</td>";
			  echo "<td>" .  $row["Last_Name"]. "</td>";
			  echo "<td>" .  $row["Gender"]."</td>";
			  echo "<td>" .  $row["Phone"]."</td>";
			  echo "<td>" .  $row["Age"]."</td>";
			  echo "<td>" .  $row["Blood_Group"]."</td>";
			  echo "<td>" .  $row["Address"]."</td>";
			  echo "<td>" .  $row["Medical_History"]."</td>";
		  echo "</tr>";
	  
	 
    }
	echo "</table>";
  } else {
    echo "0 results";
  }



?>
<br>
<!-- <a href="../view/dashboard.php">Go Back</a>
<?php include("../view/templete/footer.php") ?> -->

</html>