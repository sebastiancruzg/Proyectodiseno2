<?php   

$startphp = $_GET['start'];
echo $startphp
$endphp = $_GET['end'];
echo $endphp

$servername = "database-1.cgvkojo0ntbn.us-east-1.rds.amazonaws.com";
$username = "std";
$password = "tetris72";
$dbname = "firts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Latitude, Longitude FROM tabla WHERE Datemy between ' " +
$startphp + "' and '" + $endphp + "' ";  
$result = $conn->query($sql);

echo $result

?>