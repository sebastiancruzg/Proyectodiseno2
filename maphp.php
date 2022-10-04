<?php   

$latphp = $_GET['var1'];
$lngphp = $_GET['var2'];

$servername = "hugin.chtkfhqmg1ds.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Lupita-26";
$dbname = "first";

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
FROM primera 
HAVING distance < 1 ORDER BY distance");

$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

exit(json_encode($result));

$conn->close();

?>