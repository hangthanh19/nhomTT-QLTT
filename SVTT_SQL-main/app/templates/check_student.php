//ktr mssv
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myphp";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

$mssv = $_POST['mssv'];

$sql = "SELECT * FROM sinhvien WHERE mssv = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $mssv);
$stmt->execute();
$stmt->store_result();
$count = $stmt->num_rows;

$stmt->close();
$conn->close();

if ($count > 0) {
  echo 'exists';
} else {
  echo 'not_exists';
}
?>
