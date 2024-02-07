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

// Lấy thông tin sinh viên cần chỉnh sửa từ URL
if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];

    // Truy vấn để lấy thông tin sinh viên từ cơ sở dữ liệu
    $sql = "SELECT * FROM students WHERE id = $student_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Hiển thị thông tin sinh viên trong form
        $row = $result->fetch_assoc();
        $mssv = $row["mssv"];
        $hoten = $row["hoten"];
        $gioitinh = $row["gioitinh"];
        $sdt = $row["sdt"];
        $email = $row["email"];
        $diachi = $row["diachi"];
        $malop = $row["malop"];
        $khoa = $row["khoa"];
        $truong = $row["truong"];
        $nganh = $row["nganh"];
    } else {
        echo "Không tìm thấy sinh viên.";
    }
}

// Lấy danh sách trường từ cơ sở dữ liệu
$sql_truong = "SELECT DISTINCT truong FROM students UNION SELECT 'ĐH Cần Thơ' UNION SELECT 'ĐH Sư Phạm Kỹ Thuật Vĩnh Long'";
$result_truong = $conn->query($sql_truong);
$truong_options = "";
if ($result_truong->num_rows > 0) {
    while ($row_truong = $result_truong->fetch_assoc()) {
        $selected = ($row_truong['truong'] == $truong) ? "selected" : "";
        $truong_options .= "<option value='" . $row_truong['truong'] . "' $selected>" . $row_truong['truong'] . "</option>";
    }
}

// Lấy danh sách ngành từ cơ sở dữ liệu, kết hợp với các giá trị mới "Thú y" và "Công Nghệ Thông Tin"
$sql_nganh = "SELECT DISTINCT nganh FROM students UNION SELECT 'Thú y' UNION SELECT 'Công nghệ thông tin' UNION SELECT 'Công nghệ ô tô' UNION SELECT 'Kinh tế'";
$result_nganh = $conn->query($sql_nganh);
$nganh_options = "";
if ($result_nganh->num_rows > 0) {
    while ($row_nganh = $result_nganh->fetch_assoc()) {
        $selected = ($row_nganh['nganh'] == $nganh) ? "selected" : "";
        $nganh_options .= "<option value='" . $row_nganh['nganh'] . "' $selected>" . $row_nganh['nganh'] . "</option>";
    }
}

// Đóng kết nối
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa sinh viên</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
        }

        .form-container h2 {
            margin-bottom: 30px;
            color: #333333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center">Thông tin sinh viên</h2>
        <form method="post" action="update_student.php">
            <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
            <div class="form-group">
                <label for="mssv">MSSV:</label>
                <input type="text" class="form-control" name="mssv" value="<?php echo $mssv; ?>">
            </div>
            <div class="form-group">
                <label for="hoten">Họ tên:</label>
                <input type="text" class="form-control" name="hoten" value="<?php echo $hoten; ?>">
            </div>
            <div class="form-group">
                <label for="gioitinh">Giới tính:</label>
                <select class="form-control" name="gioitinh">
                    <option value="1" <?php if ($gioitinh == 1) echo "selected"; ?>>Nam</option>
                    <option value="0" <?php if ($gioitinh == 0) echo "selected"; ?>>Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sdt">SĐT:</label>
                <input type="text" class="form-control" name="sdt" value="<?php echo $sdt; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ:</label>
                <input type="text" class="form-control" name="diachi" value="<?php echo $diachi; ?>">
            </div>
            <div class="form-group">
                <label for="malop">Mã lớp:</label>
                <input type="text" class="form-control" name="malop" value="<?php echo $malop; ?>">
            </div>
            <div class="form-group">
                <label for="khoa">Khóa:</label>
                <input type="number" class="form-control" name="khoa" value="<?php echo $khoa; ?>">
            </div>
            <div class="form-group">
                <label for="truong">Trường:</label>
                <select class="form-control" name="truong">
                    <?php echo $truong_options; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="nganh">Ngành:</label>
                <select class="form-control" name="nganh">
                    <?php echo $nganh_options; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Lưu</button>
        </form>
    </div>

    <!-- Bootstrap JS và các thư viện khác (nếu cần) -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





