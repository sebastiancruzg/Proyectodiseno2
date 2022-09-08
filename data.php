
<?php   

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trackerapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM  primera ORDER  BY Fecha DESC LIMIT  1";  
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
  $row = $result->fetch_assoc();

  $arr = array(
    'Latitude' => $row["Latitud"],
    'Longitude' => $row["Longitud"],
    'Date' => $row["Fecha"]
  );
  echo json_encode($arr);
  } else {
    echo "0 results";
  }
  $conn->close();

?>