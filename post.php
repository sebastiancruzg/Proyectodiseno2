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

$sql = "SELECT * FROM  tabla ORDER  BY Datemy DESC LIMIT  1"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
$row = $result->fetch_assoc();

echo json_encode($arr);

$conn->close();
}

?>