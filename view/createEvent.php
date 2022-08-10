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
    <title>Create Event</title>
    <link rel="stylesheet" href="../view/templete/style.css">
    <script src="js/event.js"></script>
    <link rel="stylesheet" href="../view/css/form.css">
    <link rel="stylesheet" href="../view/css/hometop.css">
</head>
<body>
<?php include('../view/templete/headerTop.php')  ?> 

<div style=" padding-left:35%;padding-right:35%;">
<form action="../controller/createEventAction.php" method="POST" novalidate onsubmit="return validate_event(this);">
    
        <h1>Create Event</h1>
        <label for="edate"> Event Date</label>
        <input type="date" id="edate" name="edate" placeholder="Enter Date">
        <span id=edateError></span>
        <br><br>
        <label for="etime"> Event Time</label>
        <input type="time" id="etime" name="etime" placeholder="Enter time">
        <span id='etimeError';></span>
        <br><br>
        <label for="location"> Location </label>
        <input type="text" id="location" name="location" placeholder="Enter Event Location" size="50">
        <span id='locError'></span>
        <br>
        <hr>
        <input type="submit" name="Create" value="Create">


    
</form>
</div>
<a href="../view/dashboard.php">Go Back</a>
<?php include("../view/templete/footer.php") ?>
</body>
</html>