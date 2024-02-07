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

// Lấy dữ liệu gửi từ biểu mẫu đăng ký nhóm
$mssv = $_POST['masv'];
$nhom = $_POST['danhsachnhom'];
$nguoihuongdan = $_POST['nguoihuongdan'];
$mota = $_POST['mota'];

// Kiểm tra xem mssv đã tồn tại trong cơ sở dữ liệu hay chưa
$check_sql = "SELECT * FROM students WHERE mssv = '$mssv'";
$result = $conn->query($check_sql);

if ($result->num_rows > 0) {
    // MSSV đã tồn tại, tiến hành kiểm tra xem sinh viên đã đăng ký nhóm chưa
    $check_nhom_sql = "SELECT * FROM dknhom WHERE mssv = '$mssv'";
    $result_nhom = $conn->query($check_nhom_sql);
    
    if ($result_nhom->num_rows > 0) {
        // Sinh viên đã có nhóm
        echo "Sinh viên đã có nhóm!";
    } else {
        // Sinh viên chưa có nhóm, tiến hành thêm vào bảng đăng ký nhóm
        $insert_sql = "INSERT INTO dknhom (mssv, nhom, nguoihuongdan, mota) VALUES ('$mssv', '$nhom', '$nguoihuongdan', '$mota')";
        
        if ($conn->query($insert_sql) === TRUE) {
            echo "Sinh viên đã đăng ký nhóm thành công!";
            
        } else {
            echo "Lỗi khi thực hiện đăng ký nhóm: " . $conn->error;
        }
    }
} else {
    // MSSV không tồn tại, thông báo lỗi
    echo "Sinh viên chưa đăng ký thông tin!";
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
