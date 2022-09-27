<?php   

$startphp = $_GET['start'];

$endphp = $_GET['end'];

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
'2022-09-24 08:30' + "' and '" + '2022-09-28 08:30' + "' ";  
$result = $conn->query($sql);

echo $result;


?>