<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "degand_generator";

$CC_cnt = $_POST["id"];
$CC_array = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$latest_id_sql = "SELECT * from code_collection ORDER BY code_collection DESC LIMIT 1";
$result = $conn->query($latest_id_sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $new = intval($row['code_collection']);
      $sql = "";
      for ($i = 1; $i <= $CC_cnt; $i++) {
        $sql = "INSERT INTO code_collection (code_collection) VALUES (".intval($row['code_collection']) + $i.")";
        array_push($CC_array, intval($row['code_collection']) + $i);
      }
      $conn->multi_query($sql);
      echo json_encode($CC_array);
  }
} else {
  echo "0 results";
}
$conn->close();
?>