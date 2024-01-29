<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htql_svtt"; // Thay "htql_svtt" bằng tên cơ sở dữ liệu của bạn

// Kết nối đến cơ sở dữ liệu MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ biểu mẫu HTML và xác nhận
$mssv = mysqli_real_escape_string($conn, $_POST['mssv']);
$hoten = mysqli_real_escape_string($conn, $_POST['hoten']);
$gioitinh = mysqli_real_escape_string($conn, $_POST['gioitinh']);
$sdt = mysqli_real_escape_string($conn, $_POST['sdt']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$diachi = mysqli_real_escape_string($conn, $_POST['diachi']);
$malop = mysqli_real_escape_string($conn, $_POST['malop']);
$khoa = mysqli_real_escape_string($conn, $_POST['khoa']);
$nganh = mysqli_real_escape_string($conn, $_POST['nganh']);
$truong = mysqli_real_escape_string($conn, $_POST['truong']);

// Kiểm tra xem Mã số sinh viên đã tồn tại hay chưa
$checkExist = $conn->prepare("SELECT mssv FROM students WHERE mssv = ?");
$checkExist->bind_param("s", $mssv);
$checkExist->execute();
$checkExist->store_result();

if ($checkExist->num_rows > 0) {
    // Mã số sinh viên đã tồn tại, trả về thông báo lỗi
    echo "EXIST";
} else {
    // Chuẩn bị câu lệnh SQL để chèn dữ liệu vào bảng students sử dụng prepared statement
    $sql = $conn->prepare("INSERT INTO students (mssv, hoten, gioitinh, sdt, email, diachi, malop, khoa, nganh, truong) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("ssisssisss", $mssv, $hoten, $gioitinh, $sdt, $email, $diachi, $malop, $khoa, $nganh, $truong);

    // Thực hiện truy vấn SQL
    if ($sql->execute()) {
        echo "SUCCESS";
    } else {
        // Log lỗi và thông báo chung cho người dùng
        error_log("Lỗi khi lưu thông tin sinh viên: " . $sql->error);
        echo "Có lỗi xảy ra khi lưu thông tin. Vui lòng thử lại sau.";
    }

    // Đóng kết nối đến cơ sở dữ liệu
    $sql->close();
}

// Đóng kết nối đến cơ sở dữ liệu
$checkExist->close();
$conn->close();
?>
