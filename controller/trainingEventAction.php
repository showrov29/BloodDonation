<?php
	session_start();
	require("../Data/traine.php");
?>

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
<?php include('../view/templete/header.php')  ?> 
<?php 
	function test($data)	
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }	


    if($_SERVER['REQUEST_METHOD']==="POST")
		{
			$Event_date= test($_POST['edate']);
            $Event_time=test($_POST['etime']);
			$roomNo= test($_POST['roomNo']);
			$traine= test($_POST['traine']);
			
			

			if(empty($Event_date) || empty($Event_time) || empty($roomNo) || empty($traine))
			{
				echo "Fill up the form properly";
				echo "<br><br>";
				?>
				<p><b>Event Creation Failed</b></p>
				<?php
			}
			else
			{
                $event=array("EventDate"=>$Event_date,"EvenTime"=>$Event_time, "roomNo"=>$roomNo,"traine"=>$traine,);


				traine($event);



	
                
				echo "Event Date: " . $Event_date;
				echo "<br><br>";
                echo " Event Time : " . $Event_time;
				echo "<br><br>";

				echo "Room NO : " . $roomNo;
				echo "<br><br>";
				echo "Traine : " . $traine;
				echo "<br><br>";
				
			}

		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}

		
	?>
	<a href="../view/trainingEvent.php">Go Back</a>
	<?php include("../view/templete/footer.php") ?>
</body>
</html>




