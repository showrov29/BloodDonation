<?php 


function Donors($arr)
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Call_For_Blood";
$conn = mysqli_connect($servername, $username, $password,$dbname);

$fname=addslashes($arr['Fname']);
$lname=addslashes($arr['Lname']);
$gender=addslashes($arr['gender']);
$phone=addslashes($arr['mobile']);
$email=addslashes($arr['email']);
$age=addslashes($arr['age']);
$address=addslashes($arr['Address']);
$blood=addslashes($arr['blood']);
$sql = "INSERT INTO `Donor_List`(`First_Name`, `Last_Name`, `Gender`, `Phone`, `Email`, `Age`, `Address`, `Blood_Group`) 
        VALUES ('$fname','$lname','$gender','$phone','$email','$age','$address','$blood')";
    
      
      if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          echo "<br>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn); 
  
  }






?>