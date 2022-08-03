<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <script src="../view/js/passForgot.js"></script>
</head>
<body>

<?php include('../view/templete/header.php')  ?> 

<form action="../controller/forgotPasswordAction.php" method="POST" novalidate onsubmit="return validate_newPass(this);" >
<label for="uname">User Name</label>
<input type="text" name="uname" id="uname">
<span id="unameErrorMsg"></span>
<br><br>
<label for="Npassword">New Password</label>
<input type="password" name="Npassword" id="Npassword">
<span id="passwordErrorMsg"></span>
<br><br>
<label for="CNpassword">Confirm New Password</label>
<input type="password" name="CNpassword" id="CNpassword">
<span id="CNpasswordErrorMsg"></span>
<br><br>


<input type="submit" name="Reset" value="Reset">
<br><br>
</form>
<?php include("../view/templete/footer.php") ?>
</body>
</html>