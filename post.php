<?php


$startphp=$_POST['start'];
$endphp=$_POST['end'];

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

$sql="SELECT Latitude, Longitude FROM tabla WHERE Datemy between ' " + $startphp + "' and '" + $endphp + "' "
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
$row = $result->fetch_assoc();

$arr = array(
  'latitude' => $row["Latitude"],
  'longitude' => $row["Longitude"],
);
echo json_encode($arr);
} else {
  echo "0 results";
}
$conn->close();


?>