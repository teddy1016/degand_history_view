<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "degand_generator";

$IR_cnt = $_POST["id"];
$IR_array = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$latest_id_sql = "SELECT * from code_id ORDER BY code_id DESC LIMIT 1";
$result = $conn->query($latest_id_sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $new = intval($row['code_id']);
      $sql = "";
      for ($i = 1; $i <= $IR_cnt; $i++) {
        $sql .= "INSERT INTO code_id (code_id) VALUES (".intval($row['code_id']) + $i.");";
        array_push($IR_array, intval($row['code_id']) + $i);
      }
      $conn->multi_query($sql);
      echo json_encode($IR_array);
  }
} else {
  echo "0 results";
}
$conn->close();
?>