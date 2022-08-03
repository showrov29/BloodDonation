<?php 
session_start();
$username = $_SESSION['username'];
	if (!isset($_SESSION['username'])) {
		header("Location:login.php");
	  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Donor</title>
    <link rel="stylesheet" href="../view/templete/style.css">
    <script src="js/donorValidation.js"></script>
    <link rel="stylesheet" href="../view/css/hometop.css">
</head>
<body>
<?php include('../view/templete/headerTop.php')  ?> 
    <form action="../controller/addDonorAction.php" method="POST" novalidate onsubmit="return validate_donor(this);">

    <fieldset>
        <legend>Add Donor</legend>
        <label for="fname"> First Name </label>
        <input type="text" id="fname" name="fname">
        <span id="fnameErr"></span>
        &nbsp;
        <label for="lname">Last Name</label>
        <input type="lname" id="lname" name="lname">
        <span id="lnameErr"></span>
        <br><br>
        <label for="age">Age</label>
        <input type="number" id="age" name="age" min="20" max="35">
        <span id="ageErr"></span>
        <br><br>

        <label>Gender</label>
        <input type="radio" name="gender" id="male" value="Male">
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="Female">
			<label for="female">Female</label>
            <span id="genderErr"></span>
			<br><br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <span id="emailErr"></span>
        <br><br>
        <label for="Mobile No">Mobile no</label>
        <input type="text" id="mobile" name="mobile">
        <span id="mobileErr"></span>
        <br><br>
        <label for="address">Address</label>
        <input type="text" id="address" name="address" size="70">
        <span id="addrErr"></span>
        <br><br>

        
		<label for="bloodGroup">Blood Group</label>
			<select name="bloodGroup" id="bloodGroup">
				<option disabled selected value> -- select an option -- </option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
                <option value="B+">B+</option>
				<option value="O-">O-</option>
                <option value="O-">O+</option>
                <option value="AB-">AB-</option>
                <option value="AB-">AB+</option>
			</select>
            <span id="bloodErr"></span>
		
       
        <br>
        <hr>
        <input type="submit" name="addDonor" value="ADD DONOR">


    </fieldset>

    </form>
    <a href="../view/dashboard.php">Go Back</a>
    <?php include("../view/templete/footer.php") ?>
</body>
</html>