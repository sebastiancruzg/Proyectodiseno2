<?php


$startphp=$_POST['start'];
$endphp=$_POST['end'];

$startsql=date_format($startphp, 'Y-m-d H:i:s');
echo json_encode($startsql);

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

  
$result = $conn->query($sql);


?>