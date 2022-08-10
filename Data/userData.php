<?php 


function User($arr)
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Call_For_Blood";
$conn = mysqli_connect($servername, $username, $password,$dbname);

$fname=addslashes($arr['Fname']);
$lname=addslashes($arr['Lname']);
$gender=addslashes($arr['Gender']);
$phone=addslashes($arr['Phone']);
$email=addslashes($arr['Email']);
$uname=addslashes($arr['Username']);
$pass=addslashes($arr['Password']);
$sql = "INSERT INTO `Users`(`First_Name`, `Last_Name`, `Gender`, `Phone`, `Email`, `User_Name`, `Password`) 
        VALUES ('$fname','$lname','$gender','$phone','$email','$uname','$pass')";
    
      
      if (mysqli_query($conn, $sql)) {
        $_SESSION['regErr']="Registration Successfull";
        header("Location:../view/registration.php");

          echo "New record created successfully";
        } else {

          $_SESSION['regErr']="Registration Failed";
         header("Location:../view/registration.php");
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn); 
  
  }






?>