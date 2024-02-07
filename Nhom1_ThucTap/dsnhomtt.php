<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DS Nhóm thực tập | QL SVTT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../SVTT_SQL-main/app/templates/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../SVTT_SQL-main/app/templates/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../SVTT_SQL-main/app/templates/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../SVTT_SQL-main/app/templates/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../SVTT_SQL-main/app/templates/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../SVTT_SQL-main/app/templates/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Trang chủ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Liên hệ</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4" style="overflow-x: hidden">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="./img/logo_vnpt.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HTQL SVTT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/user_account_logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Nhóm 1</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Tìm kiếm" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">DANH MỤC</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Sinh viên
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin sinh viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đánh giá sinh viên</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Thực tập
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>DS đề tài</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>DS kỳ thực tập</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar-custom.html" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                  <p class="">DS nhóm thực tập</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <div class="sidebar-custom">
      <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
      <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Hỗ trợ</a>
    </div>
    <!-- /.sidebar-custom -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách nhóm thực tập</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách nhóm thực tập</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
                <table id="ds" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width:fit-content;">#</th>
                    <th>MSSV</th>
                    <th>Họ Tên</th>
                    <th>Giới tính</th>
                    <th>Chuyên Ngành</th>
                    <th>Trường</th>
                    <th>Trạng Thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htql_svtt";

// Kết nối đến cơ sở dữ liệu MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Kiểm tra mã số sinh viên trong bảng dknhom
$sql_check = "SELECT mssv FROM dknhom";
$result_check = $conn->query($sql_check);
$mssv_list = [];
if ($result_check->num_rows > 0) {
    while ($row_check = $result_check->fetch_assoc()) {
        array_push($mssv_list, $row_check['mssv']);
    }
}

// SQL query để lấy thông tin sinh viên từ bảng students nếu có mã số sinh viên trong danh sách dknhom
$sql = "SELECT * FROM students";
if (!empty($mssv_list)) {
    $mssv_string = "'" . implode("','", $mssv_list) . "'";
    $sql .= " WHERE mssv IN ($mssv_string)";
}

$result = mysqli_query($conn, $sql);

$count = 1; // Khởi tạo biến đếm

if (mysqli_num_rows($result) > 0) {
    // Hiển thị thông tin sinh viên
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $count++ . "</td>";
        echo "<td>" . $row["mssv"] . "</td>";
        echo "<td>" . $row["hoten"] . "</td>";
        $gioitinh = $row["gioitinh"] == 1 ? "Nam" : "Nữ";
        echo "<td>" . $gioitinh . "</td>";
        echo "<td>" . $row["nganh"] . "</td>";
        echo "<td>" . $row["truong"] . "</td>";
        echo "<td>Chưa đánh giá</td>";
        echo "<td>
                <div class='btn-group'>                        
                    <form method='get' action='edit_student.php'>
                        <input type='hidden' name='student_id' value='" . $row["id"] . "'>
                        <button type='submit' class='btn btn-default'>
                            <i class='fas fa-edit'></i>
                        </button>
                    </form>
                    <form method='post'>
                        <input type='hidden' name='student_id' value='" . $row["id"] . "'>
                        <button type='submit' class='btn btn-default' onclick='return confirm(\"Bạn chắc chắn muốn xóa sinh viên này không?\")'>
                            <i class='fas fa-trash'></i>
                        </button>
                    </form>
                </div>
              </td>";
        echo "</tr>";
    }
} else {
    echo "0 kết quả";
}

// Xử lý xóa sinh viên nếu có
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["student_id"])) {
    $student_id = $_POST["student_id"];
    $sql_delete = "DELETE FROM students WHERE id = $student_id";
    if ($conn->query($sql_delete) === TRUE) {
        echo "<script>document.getElementById('notification').style.display = 'block';</script>";
    } else {
        echo "<script>alert('Lỗi khi xóa sinh viên: " . $conn->error . "');</script>";
    }
}

mysqli_close($conn);
?>
                  </tbody>
                </table>
                <div id="notification" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);" class="alert alert-success">Sinh viên đã được xóa thành công</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Phiên bản </b> 3.2.0
    </div>
    <strong>Copyright &copy; 2024 <a href="#">VNPT Vĩnh Long</a>.</strong> Mọi quyền được bảo lưu.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../SVTT_SQL-main/app/templates/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../SVTT_SQL-main/app/templates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../SVTT_SQL-main/app/templates/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../SVTT_SQL-main/app/templates/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/jszip/jszip.min.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../SVTT_SQL-main/app/templates/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../SVTT_SQL-main/app/templates/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../SVTT_SQL-main/app/templates/dist/js/demo.js"></script>
<script>
  $(document).ready(function() {
    $('#ds').DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#ds_wrapper .col-md-6:eq(0)');

    
  });
  
</script>
</body>
</html>
