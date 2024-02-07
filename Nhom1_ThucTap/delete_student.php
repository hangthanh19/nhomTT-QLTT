<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htql_svtt"; // Thay "htql_svtt" bằng tên cơ sở dữ liệu của bạn

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["student_id"])) {
    $student_id = $_POST["student_id"];
    // Kết nối đến cơ sở dữ liệu MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Thực hiện xóa sinh viên từ cơ sở dữ liệu
    $sql = "DELETE FROM students WHERE id = $student_id";
    if ($conn->query($sql) === TRUE) {
        echo "Sinh viên đã được xóa thành công";
    } else {
        echo "Lỗi khi xóa sinh viên: " . $conn->error;
    }
    $conn->close();
}
?>
