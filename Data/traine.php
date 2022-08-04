<?php 


function traine($arr)
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Call_For_Blood";
$conn = mysqli_connect($servername, $username, $password,$dbname);

$edate=addslashes($arr['EventDate']);
$etime=addslashes($arr['EvenTime']);
$roomNo=addslashes($arr['roomNo']);
$traine=addslashes($arr['traine']);


$sql = "INSERT INTO `Training`(`Date`, `Time`, `Room_No`,`Traine`) VALUES ('$edate','$etime','$roomNo','$traine')";
    
      
      if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          echo "<br>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn); 
  
  }






?>