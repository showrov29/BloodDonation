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
</head>


<?php include('templete/headerTop.php')  ?> 
<h1>Dashboard</h1>  

<?php include('templete/footer.php') ?> 
</html>