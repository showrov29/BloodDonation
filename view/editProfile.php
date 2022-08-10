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
	<link rel="stylesheet" href="../view/css/form.css">
	</head>


<body>
	

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
	<div style=" padding-left:35%;padding-right:35%;">
	<h1 style="padding-left:35% ;">Update Profile </h1>

	<form action="../controller/editProfileAction.php" method="POST" novalidate onsubmit="return validate_Profile(this);">

		<label for="uname">Username</label>
		<input type="text" name="username" id="uname" value="<?php echo $_SESSION['username'] ?>" size="25" maxlength="5" disabled >
        <br><br>			
		<label for="fname">First name</label>
		<input type="text" name="fname" id="fname" value="<?php echo $fname ?>" size="25" >	
        <span id="fnameErr"></span>
		<br><br>			
		<label for="lname">Last Name</label>
		<input type="text" name="lname" id="lname" value="<?php echo $lname ?>" size="25"  >		
        <span id="lnameErr"></span>
		<br><br>		
		<label for="phone">Phone</label>
		<input type="text" name="phone" id="phone" value="<?php echo $phone ?>" size="25"  >		
        <span id="phoneErr"></span>
		<br><br>		
		<label for="uname">Email</label>
		<input type="text" name="email" id="email" value="<?php echo $email ?>" size="25"  >			
		<br><br>
			
		<input type="submit" name="Update" value="Update">

		<br><br>
		<a href="../view/dashboard.php">Go Back</a>
		
	</form>
</div>
	<?php include("../view/templete/footer.php") ?>
	</body>
</html>