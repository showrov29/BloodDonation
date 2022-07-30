<?php 
	
	session_start();
	session_unset();
	session_destroy();
	
	header("Location: login.php");
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logout</title>
	<link rel="stylesheet" href="../view/templete/style.css">
</head>
<body>
<?php include("../view/templete/footer.php") ?>
</body>
</html>