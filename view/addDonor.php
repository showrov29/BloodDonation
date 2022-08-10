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
    <link rel="stylesheet" href="../view/css/form.css">
</head>
<body>
<?php include('../view/templete/headerTop.php')  ?> 

<div style=" padding-left:35%;padding-right:35%;">
    <form action="../controller/addDonorAction.php" method="POST" novalidate onsubmit="return validate_donor(this);">
      
    
        <h1 style="padding-left: 35%;">Add Donor</h1>
        <label for="fname"> First Name </label>
        <input type="text" id="fname" name="fname">
        <span id="fnameErr"></span>
        <br>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname">
        <span id="lnameErr"></span>
        <br>
        <label for="age">Age</label>
        <input type="number" id="age" name="age" min="20" max="35">
        <span id="ageErr"></span>
        <br>

        <label>Gender</label>
        <input type="radio" name="gender" id="male" value="Male">
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="Female">
			<label for="female">Female</label>
            <span id="genderErr"></span>
			<br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <span id="emailErr"></span>
        <br>
        <label for="Mobile No">Mobile no</label>
        <input type="text" id="mobile" name="mobile">
        <span id="mobileErr"></span>
        <br>
        <label for="address">Address</label>
        <input type="text" id="address" name="address" size="70">
        <span id="addrErr"></span>
        <br>

        
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
		
       
        <br><br>
        <hr>
        <input type="submit" name="addDonor" value="ADD DONOR">


    </fieldset>
   
   
    </div>
    <a href="../view/dashboard.php">Go Back</a>
    <?php include("../view/templete/footer.php") ?>
</body>
</html>