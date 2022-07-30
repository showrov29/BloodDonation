<?php 
session_start();
$username = $_SESSION['username'];
	if (!isset($_SESSION['username'])) {
		header("Location:login.php");
	  } 
?>

<!DOCTYPE html>  
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="../view/templete/style.css">
</head>


<?php include('templete/header.php')  ?> 
<h1>Dashboard</h1>  
	<a href="view_profile.php">Profile</a> <br><br> 
	<a href="viewEvent.php">Blood Collection Event</a> <br><br> 
	<a href="addDonor.php">Add Donor</a> <br><br> 
	<a href="viewDonor.php">Donor List</a> <br><br> 
	<a href="viewDonorRequest.php" target="_blank">Donor Request List</a> <br><br>
	<a href="createEvent.php">Create Donation Event</a> <br><br> 
	<a href="viewFeedback.php">Feedbacks </a> <br><br>
	<a href="logout.php">Logout</a> <br><br> 
<?php include('templete/footer.php') ?> 
</html>