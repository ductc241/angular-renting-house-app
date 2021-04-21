<?php
  require "../../dao/censorship.php";
  require "../../dao/login.php";

  // select
  $rooms = room_select();

  // censor
  if(isset($_GET['id'])) {
    $room_id = $_GET['id'];
    censored($room_id);
  }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Danh mục</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Ajax-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php require_once "../../inc/navbar.php" ?>

    <?php require_once "../../inc/sidebar.php" ?>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Danh sách phòng đăng</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Tin đăng</a></li>
                <li class="breadcrumb-item active">Tổng quan</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
       <!--  <div class="col-sm-6">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Thêm loại nhà đất</button>
        </div> -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 50px">#</th>
                <th>Tên</th>
                <th>Người đăng</th>
                <th>Phân loại</th>
                <th>Khu vực</th>
                <th>Giá</th>
                <th>Ngày đăng bài</th>
                <th>Hạn đăng bài</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($rooms  as $key =>  $room): ?>
                <tr id="<?=$room['room_id']?>">
                  <td><?= $key + 1 ?></td>
                  <td><?= $room['room_name'] ?></td>
                  <td><?= $room['username'] ?></td>
                  <td><?= $room['catename'] ?></td>
                  <td><?= $room['locaname'] ?></td>
                  <td><?=number_format($room['price'])?>đ</td>
                  <td style="width: 140px"><?= $room['create_at'] ?></td>
                  <td style="width: 120px"><?= $room['day_end'] ?></td>
                  <td>
                    <?php if($room['censorship'] == 1): ?>
                      Đã kiểm duyệt
                    <?php else: ?>
                      Chưa kiểm duyệt
                    <?php endif; ?>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-lg">
                      Chi tiết   
                    </button>
                    <button type="button" class="btn btn-block btn-primary">
                      <a href="censorship.php?id=<?=$room['room_id']?>" style="color: White">Duyệt bài</a>
                    </button>
                    <button type="button" class="btn btn-block btn-danger">Xóa bài</button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div class="modal fade" id="modal-lg">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Thông tin chi tiết</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="https://znews-photo.zadn.vn/w660/Uploaded/fcivbqmv/2020_10_26/Screenshot_798.jpg" alt="" width="100%">
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </section>
    </div>
  </div>


  <!-- script -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../../plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../../plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../plugins/moment/moment.min.js"></script>
  <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../../dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <script>
    
  </script>
</body>
</html>
