<?php 


function Events($arr)
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Call_For_Blood";
$conn = mysqli_connect($servername, $username, $password,$dbname);

$edate=addslashes($arr['EventDate']);
$etime=addslashes($arr['EvenTime']);
$elocation=addslashes($arr['Location']);


$sql = "INSERT INTO `Event`(`Date`, `Location`, `Time`) VALUES ('$edate','$elocation','$etime')";
    
      
      if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          echo "<br>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn); 
  
  }






?>