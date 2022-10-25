<?php   

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

$sql = "SELECT * FROM  segunda ORDER  BY Datemy DESC LIMIT  1";  
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
  $row = $result->fetch_assoc();

  $arr2 = array(
    'latitude' => $row["Latitude"],
    'longitude' => $row["Longitude"],
    'date' => $row["Datemy"]
  );
  echo json_encode($arr2);
  } else {
    echo "0 results";
  }
  $conn->close();

?>