<?php
$servername = "sql300.epizy.com";
$username = "epiz_33154967";
$password = "129FPEnv2OqN";
$dbname = "epiz_33154967_vpms";
$vno=$_POST['idn'];
$ty=$_POST['idp'];
$co=$_POST['nam'];
$mo=$_POST['num'];
$c=$_POST['add'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO OwnerDetails (IDNumber,IDProof,Name,MobileNumber,Address) VALUES ('$vno','$ty','$co','$mo','$c')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
?>