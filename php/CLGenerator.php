<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "degand_generator";

$CL_cnt = $_POST["id"];
$CL_array = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$latest_id_sql = "SELECT * from code_line ORDER BY code_ligne DESC LIMIT 1";
$result = $conn->query($latest_id_sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $new = intval($row['code_ligne']);
      $sql = "";
      for ($i = 1; $i <= $CL_cnt; $i++) {
        $sql .= "INSERT INTO code_line (code_ligne) VALUES (".intval($row['code_ligne']) + $i.");";
        array_push($CL_array, intval($row['code_ligne']) + $i);
      }
      $conn->multi_query($sql);
      echo json_encode($CL_array);
  }
} else {
  echo "0 results";
}
$conn->close();
?>