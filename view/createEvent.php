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
    <link rel="stylesheet" href="../view/css/hometop.css">
</head>
<body>
<?php include('../view/templete/headerTop.php')  ?> 
    
<form action="../controller/createEventAction.php" method="POST" novalidate onsubmit="return validate_event(this);">
    <fieldset>
        <legend>Create Event</legend>
        <label for="edate"> Event Date</label>
        <input type="date" id="edate" name="edate">
        <span id=edateError></span>
        &nbsp;
        <label for="etime"> Event Time</label>
        <input type="time" id="etime" name="etime">
        <span id='etimeError';></span>
        <br><br>
        <label for="location"> Location </label>
        <input type="text" id="location" name="location" size="50">
        <span id='locError'></span>
        <br>
        <hr>
        <input type="submit" name="Create" value="Create">


    </fieldset>
</form>
<a href="../view/dashboard.php">Go Back</a>
<?php include("../view/templete/footer.php") ?>
</body>
</html>