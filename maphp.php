<?php   

$latphp = $_GET['var1'];
$lngphp = $_GET['var2'];

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

$sql = mysqli_query($conn,"SELECT Datemy, ( 6371 * acos(cos(radians('$latphp')) * cos(radians(Latitude)) * 
cos(radians(Longitude) - radians('$lngphp')) + 
sin(radians('$latphp')) * sin(radians(Latitude)))) 
AS distance 
FROM tabla 
HAVING distance < 70 ORDER BY distance");

$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

exit(json_encode($result));

$conn->close();

?>