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
	<link rel="stylesheet" href="../view/css/style.css">
	<script src="js/validate.js"></script>
	<link rel="stylesheet" href="../view/css/hometop.css">
    <script src="js/profileEdit.js"></script>
	</head>
<?php include('templete/headerTop.php')  ?>

	<?php 


$sql="SELECT * FROM `Users` WHERE `User_Name`= '$username'";
$result=view($sql);
    $fname=$lname=$email=$phone="";

if (mysqli_num_rows($result) > 0) {
 
		

    while($row = mysqli_fetch_assoc($result)) {
    $fname=$row["First_Name"];
    $lname=$row["Last_Name"];
    $phone=$row["Phone"];
    $email=$row["Email"];

	
	
	
    }
	
	
  } else {
    echo "0 results";
  }

	
	if (isset($_SESSION['username'])) 
	{

	}

	?>

	<h1 >Update Profile </h1>

	<form action="../controller/editProfileAction.php" method="POST" novalidate onsubmit="return validate_Profile(this);">

		<label for="uname">Username</label>
		<input type="text" name="username" id="uname" value="<?php echo $_SESSION['username'] ?>" size="25" maxlength="5" disabled >
        <br><br>			
		<label for="uname">First name</label>
		<input type="text" name="fname" id="fname" value="<?php echo $fname ?>" size="25" >	
        <br><br>			
		<label for="uname">Last Name</label>
		<input type="text" name="lname" id="lname" value="<?php echo $lname ?>" size="25"  >		
        <br><br>		
		<label for="uname">Phone</label>
		<input type="text" name="phone" id="phone" value="<?php echo $phone ?>" size="25"  >		
        <br><br>		
		<label for="uname">Email</label>
		<input type="text" name="email" id="email" value="<?php echo $email ?>" size="25"  >			
		<br><br>
			
		<input type="submit" name="Update" value="Update">

		<br><br>
		<a href="../view/dashboard.php">Go Back</a>
		
	</form>
	<?php include("../view/templete/footer.php") ?>
</html>