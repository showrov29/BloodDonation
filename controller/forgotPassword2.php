<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/templete/style.css">
</head>
<body>


<form action="../controller/forgotPasswordAction.php" method="POST" novalidate>
<label for="uname">User Name</label>
<input type="text" name="uname" id="uname">
<br><br>
<label for="Npassword">New Password</label>
<input type="password" name="Npassword" id="Npassword">
<br><br>
<label for="CNpassword">Confirm New Password</label>
<input type="password" name="CNpassword" id="CNpassword">
<br><br>


<input type="submit" name="Reset" value="Reset">
<br><br>
</form>
<?php include("../view/templete/footer.php") ?>
</body>
</html>