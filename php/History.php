<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "degand_history";

$cid = $_POST["cid"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM lignesv_table WHERE cid = '".$cid."'";
$result = $conn->query($sql);

$table_data = "";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $table_data = "<tr id=lignesv_".$row["id"].">";
    $table_data .= "<td>".$row["date"]."</td>";
    $table_data .= "<td>".$row["sid"]."</td>";
    $table_data .= "<td>".$row["supplier"]."</td>";
    $table_data .= "<td>".$row["product"]."</td>";
    $table_data .= "<td>".$row["size"]."</td>";
    $table_data .= "<td>".$row["material"]."</td>";
    $table_data .= "<td>".$row["color"]."</td>";
    $table_data .= "<td>".$row["cid"]."</td>";
    $table_data .= "<td>".$row["qty"]."</td>";
    $table_data .= "<td>".$row["unit"]."</td>";
    $table_data .= "<td>".$row["percent"]."</td>";
    $table_data .= "<td>".$row["tot"]."</td>";
    $table_data .= "<td>".$row["grandto"]."</td>";
    $table_data .= "</tr>";
    echo $table_data;
  }
} else {
  echo "<h5 class='p-0 mt-3'>0 results</h5>";
}

$conn->close();
?>