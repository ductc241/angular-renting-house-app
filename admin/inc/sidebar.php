<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index.php" class="brand-link">
    <img  src="../../dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">TRỌ TỐT</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin: <?= $_SESSION['admin']['admin_name'] ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Danh mục
              <i class="right fas fa-angle-left"></i>
            </p>  
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../category/cate.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Theo loại nhà đất</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../category/location.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Theo vị trí</p>
              </a>
            </li>
          </ul>
        </li>       
      </ul>

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Phòng trọ
              <i class="right fas fa-angle-left"></i>
            </p>  
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../room/room.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tổng quan</p>
              </a>
            </li>
          </ul>
        </li>       
      </ul>

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Người dùng
              <i class="right fas fa-angle-left"></i>
            </p>  
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../user/user.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tất cá</p>
              </a>
            </li>
          </ul>
        </li>       
      </ul>

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Duyệt bài
              <i class="right fas fa-angle-left"></i>
            </p>  
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../censorship/censorship.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Bài cần duyệt</p>
              </a>
            </li>
          </ul>
        </li>       
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>