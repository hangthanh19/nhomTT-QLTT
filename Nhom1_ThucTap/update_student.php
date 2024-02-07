<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htql_svtt"; // Thay "htql_svtt" bằng tên cơ sở dữ liệu của bạn
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy thông tin sinh viên từ form chỉnh sửa
$student_id = $_POST['student_id'];
$mssv = $_POST['mssv'];
$hoten = $_POST['hoten'];
$gioitinh = $_POST['gioitinh'];
$sdt = $_POST['sdt'];
$email = $_POST['email'];
$diachi = $_POST['diachi'];
$malop = $_POST['malop'];
$khoa = $_POST['khoa'];
$truong = $_POST['truong'];
$nganh = $_POST['nganh'];

// Cập nhật thông tin sinh viên vào cơ sở dữ liệu
$sql = "UPDATE students SET mssv='$mssv', hoten='$hoten', gioitinh='$gioitinh', sdt='$sdt', email='$email', diachi='$diachi', malop='$malop', khoa='$khoa', truong='$truong', nganh='$nganh' WHERE id=$student_id";

if ($conn->query($sql) === TRUE) {
    header("Location: dsnhomtt.php");
} else {
    echo "Lỗi: " . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
