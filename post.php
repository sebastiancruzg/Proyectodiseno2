<?php   

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

$sql = "SELECT Latitude, Longitude FROM tabla WHERE Datemy >= '2022-09-25 00:37' 
AND Datemy <= '2022-09-25 00:39' ";  
$result = $conn->query($sql);

exit(json_encode($result));

?>