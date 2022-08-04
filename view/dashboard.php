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
<link rel="stylesheet" href="../view/css/hometop.css">
<link rel="stylesheet" href="../view/css/dashboard.css">

</head>
<body>
<?php include('templete/headerTop.php')  ?> 
<br>
<h1 style="padding-left:43%; font-size:xx-large">Dashboard</h1> 
<br><br> 
<div class="flex-x">
		
<div>No of Donors</div>
<div>Total Donation Received</div>
<div>Requests Received</div>

</div>

</body>




<?php include('templete/footer.php') ?> 
</html>