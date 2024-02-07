<?php
// Kết nối CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htql_svtt";

/// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy nhóm từ dữ liệu gửi đi
$nhom = $_POST['nhom'];

// Truy vấn cơ sở dữ liệu để đếm số lượng sinh viên đã đăng ký cho nhóm
$count_sql = "SELECT COUNT(*) AS count FROM dknhom WHERE nhom = '$nhom'";
$result = $conn->query($count_sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['count'];
} else {
    echo "0"; // Nếu không có sinh viên nào đăng ký, trả về 0
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
