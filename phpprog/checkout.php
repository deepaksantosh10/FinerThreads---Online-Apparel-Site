<?php
header("Content-Type:text/html");
header("Access-Control-Allow-Origin: *");
error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "~/php-error.log");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Finer Threads</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "","finerthreads");
if($conn === false)
{
die("ERROR: Could not connect. ". mysqli_connect_error());
}
if(isset($_POST['submit'])) 
{  
$Firstname = $_POST['fname']; 
$Lastname = $_POST['lname'];
$Email = $_POST['email']; 
$Address = $_POST['address']; 
$Modeofpayment = $_POST['mop'];  
$Amount  = $_POST['amount'];  
$Year = $_POST['year'];
$Month = $_POST['month'];
$cardno = $_POST['cardno'];    
$sql = "INSERT INTO `payment` (`Firstname`, `Lastname`, `Email`, `Address`,`Modeofpayment`, `Amount`,`cardno`,`year`,`month`) 
VALUES ('$Firstname', '$Lastname', '$Email','$Address','$Modeofpayment', '$Amount','$cardno','$Year','$Month');";
$result = mysqli_query($conn, $sql);
if ($result) 
{
 echo"<script>window.location='success.html'</script>";
}
}
else
echo "payment failed";
?>
</body>
</html>