<?php

function view($sql)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Call_For_Blood";
$conn = mysqli_connect($servername, $username, $password,$dbname);

  
$result=mysqli_query($conn, $sql);

  
  mysqli_close($conn); 
    return $result;

}

?>