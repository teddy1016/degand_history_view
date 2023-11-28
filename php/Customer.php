<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "degand_history";

$name = $_POST["name"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cli_table WHERE name LIKE '".$name."%';";
$result = $conn->query($sql);

$table_data = "";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $table_data = "<tr id=cli_".$row["id"].">";
    $table_data .= "<td>".$row["cid"]."</td>";
    $table_data .= "<td>".$row["name"]."</td>";
    $table_data .= "<td>".$row["surname"]."</td>";
    $table_data .= "<td>".$row["address"]."</td>";
    $table_data .= "<td>".$row["zip"]."</td>";
    $table_data .= "<td>".$row["city"]."</td>";
    $table_data .= "<td>".$row["country"]."</td>";
    $table_data .= "</tr>";
    echo $table_data;
  }
} else {
  echo "<h5 class='p-0 mt-3'>0 results</h5>";
}

$conn->close();
?>