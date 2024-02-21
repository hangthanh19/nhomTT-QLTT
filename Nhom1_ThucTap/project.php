<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kỳ thực tập | HTQL SVTT</title>
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
  <!-- Datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Kỳ thực tập</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kỳ thực tập</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="col-lg-12 connectedSortable">
      <!-- Map card -->
      <div class="card">
        <div class="card-header border-0 rows">
          <h3 class="card-title col-lg-2">
            <i class="fa-solid fa-list-ol"></i>
            Danh sách kì thực tập
          </h3>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#projectaddmodal">
            Thêm kì thực tập
          </button>

        </div>
        <div class="card-body">
          <table class="table table-bordered table-hover" id="bangdskythuctap">
            <thead>
              <tr>
                <th scope="col" style="text-align: center;">#</th>
                <th scope="col" style="text-align: center; width: 25%;">Ngày bắt đầu</th>
                <th scope="col" style="text-align: center;">Ngày kết thúc</th>
                <th scope="col" style="text-align: center;">Trạng thái</th>
                <th scope="col" style="text-align: center; width: 12%;">Thao tác</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
      </div>
      <!-- /.card -->
    </section>


<!-- Modal -->
<div class="modal fade" id="projectaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm kì thực tập</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="formDeTai" action="" method="POST">
      <div class="modal-body">

        <div class="form-group">
          <label for="">Thời gian thực tập</label>
          <input type="text" class="form-control datepicker" id="thoigian" name="thoigian" required>
        </div>
        <div class="form-group">
          <label for="">Ghi chú</label>
          <textarea id="ghichu" rows="10" class="form-control" name="ghichu" required></textarea>
        </div>
       

      </div>
      <div class="modal-footer">
        <button type="submit" name="insert_data" class="btn btn-primary">Lưu</button>
      </div>
      </form>
    </div>
  </div>
</div>

  </div>
 
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<!-- Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
  $(document).ready(function(){
    $('.datepicker').datepicker({
      format: 'dd/mm/yyyy', // Định dạng ngày tháng
      todayHighlight: true,
      autoclose: true,
    });
  });
</script>
</body>
</html>
