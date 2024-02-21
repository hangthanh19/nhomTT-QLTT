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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<!-- Custom CSS -->
<style>
#datepicker-container {
    position: absolute;
    z-index: 9999;
    background-color: #fff;
    border: 1px solid #ccc;
    width: 200px; /* You can adjust the width as needed */
}

.modal-body {
    position: relative; /* Add this to make sure the modal body is a positioned parent */
}

.modal-dialog {
    z-index: 99999; /* Make sure modal dialog has higher z-index */
}

</style>
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

          <div class="form-group position-relative">
            <label for="">Thời gian thực tập</label>
            <div class="input-group">
              <input type="text" class="form-control" id="thoiGian" placeholder="Chọn thời gian" required>
              <div id="datepicker-container"></div> <!-- Move this inside the form-group -->
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
              </div>
            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    $("#thoiGian").datepicker({
        numberOfMonths: 2,
        onSelect: function(selectedDate) {
            var dateParts = selectedDate.split('/');
            var startDate = new Date(dateParts[0]);
            var endDate = new Date(dateParts[1]);
            var formattedStartDate = ("0" + startDate.getDate()).slice(-2) + '/' + ("0" + (startDate.getMonth() + 1)).slice(-2) + '/' + startDate.getFullYear();
            var formattedEndDate = ("0" + endDate.getDate()).slice(-2) + '/' + ("0" + (endDate.getMonth() + 1)).slice(-2) + '/' + endDate.getFullYear();
            $("#thoiGian").val(formattedStartDate + ' - ' + formattedEndDate);
        },
        beforeShow: function(input, inst) {
            var rect = input.getBoundingClientRect();
            $("#datepicker-container").css({ 
                top: rect.bottom + "px",
                left: rect.left + "px",
                display: "block"
            });
        },
        onClose: function(dateText, inst) {
            $("#datepicker-container").css("display", "none");
        }
    });
});
</script>

</body>
</html>
