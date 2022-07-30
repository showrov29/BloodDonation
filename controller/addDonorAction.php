<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor</title>
    <link rel="stylesheet" href="../view/templete/style.css">
    
</head>
<body>
<?php include('../view/templete/header.php')  ?> 
<?php
require("../Data/donorData.php");


function test($data)	
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}		
?>
<?php
$firstnameErrMsg=$lastnameErrMsg=$mobilenoErr=$emailErrMsg="";

$flag=0;

//$First_name=$Last_name=$Phone=$Username=$Password="";
if($_SERVER['REQUEST_METHOD']==="POST")
{
    $First_name= test($_POST['fname']);
    $Last_name=test($_POST['lname']);
    $Age=test($_POST['age']);
    $Gender = isset($_POST['gender']) ? test($_POST['gender']) : "";
    $Phone= test($_POST['mobile']);
    $Email= test($_POST['email']);
    $Blood = isset($_POST['bloodGroup']) ? test($_POST['bloodGroup']) : "";
    $Address=test($_POST['address']);
    

    if(empty($First_name) || empty($Last_name) || empty($Phone) || empty($Age) || empty($Blood)|| empty($Address))
    {
        $flag=1;
        echo "Fill up the form properly";
        echo "<br><br>";
        ?>
        <p><b>Registration Failed</b></p>
        <?php
    }
    else
    {

   
				if (!preg_match("/^[a-zA-Z-' ]*$/",$First_name)) {
				$firstnameErrMsg = "Only letters and spaces allowed.";
                $flag=1;
				}
			
			
				if (!preg_match("/^[a-zA-Z-' ]*$/",$Last_name)) {
				$lastnameErrMsg = "Only letters and spaces allowed.";
                $flag=1;
				}
			
			if (!isset($Gender) or empty($Gender)) {
				$genderErrMsg = "Gender not Selected";
                $flag=1;
			}
			
				if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
					$emailErrMsg = "Please correct email.";
                    $flag=1;
				}
			
			
				if (!preg_match("/^[0-9]*$/",$Phone)) {
				$mobilenoErr = "Only numbers allowed.";
                $flag=1;

				}

        if ($flag===1)
        {
            echo "First name: " . $firstnameErrMsg;
            echo "<br><br>";
            echo "Last name: " . $lastnameErrMsg;
            echo "<br><br>";
    
            echo "Phone: " . $mobilenoErr;
            echo "<br><br>";
            echo "email: " . $emailErrMsg;
            echo "<br><br>";
        }
        }
	

if ($flag==0)
{
    $user=array("Fname"=>$First_name,"Lname"=>$Last_name, "mobile"=>$Phone, "email"=>$Email, "age"=>$Age,"Address"=>$Address ,"gender"=>$Gender,"blood"=>$Blood);
    Donors($user);
    
}		

}
else
{
    echo "Can not process GET REQUEST METHOD";
}



    



    

?>
<br>
<?php include("../view/templete/footer.php") ?>




    
</body>
</html>