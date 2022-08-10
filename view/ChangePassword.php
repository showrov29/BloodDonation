<?php 
session_start();
$username = $_SESSION['username'];
	if (!isset($_SESSION['username'])) {
		header("Location:login.php");
	  } 
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../view/css/style.css">
	<script src="js/validate.js"></script>
	<link rel="stylesheet" href="../view/css/hometop.css">
	<link rel="stylesheet" href="../view/css/form.css">
	</head>
<?php include('templete/headerTop.php')  ?>

	<?php 

	
	if (isset($_SESSION['username'])) 
	{

	}

	?>
	<br>
<div  style=" padding-left:35%;padding-right:35%;">
	<h1 style=" padding-left:30%;">Update Password</h1>

	<form action="../controller/ChangePasswordAction.php" method="POST" novalidate onsubmit="return validate_pass(this);">

		<label for="uname">Username</label>
		<input type="text" name="username" id="uname" value="<?php echo $_SESSION['username'] ?>" size="25" maxlength="5" disabled >			
		<br><br>
		<label for="password"> New Password</label>
		<input type="password" name="password" id="password" placeholder="Enter Password">
		<span id="passError"></span>
		<br><br>		
		<input type="submit" name="Update" value="Update">

		<br><br>
		<a href="../view/dashboard.php">Go Back</a>
		
	</form>
</div>
	<?php include("../view/templete/footer.php") ?>
</html>