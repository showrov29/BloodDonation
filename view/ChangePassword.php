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
	<link rel="stylesheet" href="../view/templete/style.css">
	<script src="js/validate.js"></script>
	</head>
<?php include('templete/header.php')  ?>

	<?php 

	
	if (isset($_SESSION['username'])) 
	{

	}

	?>

	<h1 >Update Password</h1>

	<form action="../controller/ChangePasswordAction.php" method="POST" novalidate onsubmit="return validate_pass(this);">

		<label for="uname">Username</label>
		<input type="text" name="username" id="uname" value="<?php echo $_SESSION['username'] ?>" size="25" maxlength="5" disabled >			
		<br><br>
		<label for="password"> New Password</label>
		<input type="password" name="password" id="password" >
		<br><br>		
		<input type="submit" name="Update" value="Update">

		<br><br>
		<a href="../view/dashboard.php">Go Back</a>
		
	</form>
	<?php include("../view/templete/footer.php") ?>
</html>