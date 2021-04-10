<?php
  require "../../dao/user.php";
  require "../../dao/login.php";

  // seletc users
  $users = user_select();

  // insert
  if(isset($_POST['insert'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    user_insert($username, $password, $email, $address);
  }

  //delete
  if(isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    user_delete($user_id);
  }

  // update
  


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Người dùng</title>
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
              <h1 class="m-0 text-dark">Người dùng</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                <li class="breadcrumb-item active">Tổng quan</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="col-sm-6">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Thêm người dùng</button>
        </div>
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 50px">#</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users  as $key =>  $user): ?>
                <tr id="<?=$user['user_id']?>">
                  <td><?=$key + 1?></td>
                  <td data-target="user_name"><?=$user['user_name']?></td>
                  <td><?= $user['password'] ?></td>
                  <td><?= $user['email'] ?></td>
                  <td><?= $user['address'] ?></td>
                  <td>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" data-role="update" data-id="<?=$user['user_id']?>">
                      Sửa
                    </button>

                    <button type="submit" class="btn btn-danger" name="delete">
                      <a href="user.php?user_id=<?=$user['user_id']?>" style="color: white">Xóa</a>
                    </button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Chỉnh sửa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form role="form" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Loại nhà đất</label>
                      <input type="text" class="form-control" id="cate_name" placeholder="Nhập loại nhà đất">
                      <input type="hidden" id="cate_id">
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="button" class="btn btn-primary" id="update">Cập nhật</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="modal-primary">
          <div class="modal-dialog">
            <div class="modal-content bg-primary">
              <div class="modal-header">
                <h4 class="modal-title">Thêm người dùng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <form role="form" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Nhập tên ">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="text" class="form-control" name="password" placeholder="Nhập mật khẩu">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Nhập email">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Địa chỉ</label>
                      <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-default" name="insert">Thêm mới</button>
                  </div>
                </form>
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
    $(document).ready(function() {
      $(document).on('click', 'button[data-role=update]', function() {
        var id = $(this).data('id');
        var cate_name = $('#' + id).children('td[data-target=cate_name]').text();

        $('#cate_name').val(cate_name);
        $('#cate_id').val(id);
      })
    })


    $('#update').click(function() {
      var cate_name = $('#cate_name').val();
      var cate_id = $('#cate_id').val();

      $.ajax({
        url : 'cate.php',
        method: 'post',
        data: {cate_name: cate_name, cate_id: cate_id},
        success:  function(){
                    $('#' + cate_id).children('td[data-target=cate_name]').text(cate_name);
                    location.reload();
                  }
      })
    })
  </script>
</body>
</html>
