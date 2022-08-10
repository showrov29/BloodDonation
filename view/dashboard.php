<?php 
session_start();
$username = $_SESSION['username'];
	if (!isset($_SESSION['username'])) {
		header("Location:login.php");
	  } 
    require("../Data/view.php");
?>

<!DOCTYPE html>  
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="../view/templete/style.css">
<link rel="stylesheet" href="../view/css/hometop.css">
<link rel="stylesheet" href="../view/css/dashboard.css">

</head>
<body>
<?php include('templete/headerTop.php')  ?> 
<br>
<h1 style="padding-left:43%; font-size:xx-large">Dashboard</h1> 
<br><br> 


<script>
function showData(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
 

  if (str=="Events")
  {
	const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
	xhttp.open("GET", "../controller/viewEvent.php?q="+str);
  xhttp.send();

  }
  if (str=="donor")
  {
	const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
	xhttp.open("GET", "../controller/viewDonor.php?q="+str);
  xhttp.send();

  }
  if (str=="drequest")
  {
	const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
	xhttp.open("GET", "../controller/viewDonorRequest.php?q="+str);
  xhttp.send();

  }
  if (str=="feedback")
  {
	const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
	xhttp.open("GET", "../controller/viewFeedback.php?q="+str);
  xhttp.send();

  }
  if (str=="training")
  {
	const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
	xhttp.open("GET", "../controller/showTraining.php?q="+str);
  xhttp.send();

  }
  if (str=="donation")
  {
	const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
	xhttp.open("GET", "../controller/donation.php?q="+str);
  xhttp.send();

  }
  
}
</script>



<?php 
$sql="SELECT `Id` FROM `Donor_List`";
  $Ndonor=view($sql);
 $Ndonor= mysqli_num_rows($Ndonor);

$sql="SELECT `Id` FROM `Donor_Request` ";
				$Nreceiver=view($sql);
        $Nreceiver= mysqli_num_rows($Nreceiver);
$sum=0;
$sql="SELECT `Ammount` FROM `Donation`";
				$donoation=view($sql);
     if(mysqli_num_rows($donoation) > 0){
      
      while($row = mysqli_fetch_assoc($donoation)){
         $sum=$sum + intval($row['Ammount']);
        
      }
     }
        
        

?>


 <div class="flex-x">
		
<div>No of Donors
  <br><br>
  <?php 
  echo $Ndonor;
  ?>
</div>

<div>Total Donation Received
<br><br>
  <?php 
      echo $sum;
  ?>
</div>

<div>Requests Received 
<br><br>
  <?php 
  echo $Nreceiver;
  ?>
</div>

</div>

<br><br><br>
<hr><hr>
<h2 style="padding-left: 45%;">View Records </h2>
<hr>
<form action=""> 
 <div style="padding-left:45%;">
   <br>

 <select name="customers" onchange="showData(this.value)">
  <option value="">Select a Record :</option>
    <option value="Events">Events</option>
    <option value="donor">Donor List</option>
    <option value="drequest">Donor Request List</option>
    <option value="feedback">Feedbacks</option>
    <option value="training">Training Schedule</option>
    <option value="donation">Donation History</option>
  </select>
  <br>
  <br>
 

 </div>

<div style="padding-left:10%; padding-left:10%; justify-content:center;align-items:center;">
<div id="txtHint">Record info will be listed here...</div>
</div>
  
</form>
<br>





</body>




<?php include('templete/footer.php') ?> 
</html>