
<?php   

$servername = "db-ta";
$username = "std";
$password = "uwugang64";
$dbname = "trackerapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM  trackerapp ORDER  BY Date DESC LIMIT  1";  
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
  $row = $result->fetch_assoc();

  $arr = array(
    'latitude' => $row["Latitud"],
    'longitude' => $row["Longitud"],
    'date' => $row["Fecha"]
  );
  echo json_encode($arr);
  } else {
    echo "0 results";
  }
  $conn->close();

?>