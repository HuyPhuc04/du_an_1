<aside class="main-sidebar sidebar-dark-primary elevation-4">
<?php
include "../views/Admin/quanlyhethong/logo.php";
?>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
<?php
include "../views/Admin/quanlytaikhoan/taikhoan.php";
?>

      <!-- SidebarSearch Form -->
      <!-- tìm kiếm admin -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
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
<?php
include "../views/Admin/quanlydanhmuc/list.php";
?>
<?php
include "../views/Admin/quanlydatsan/list.php";
?>
<?php
include "../views/Admin/quanlysan/list.php";
?>
<?php
include "../views/Admin/quanlycasan/list.php";
?>
<?php
include "../views/Admin/quanlykhuyenmai/list.php";
?>

<?php
include "../views/Admin/quanlybienthe/list.php";
?>

<?php
include "../views/Admin/quanlybinhluan/list.php";
?>

<?php
include "../views/Admin/quanlylienhe/list.php";
?>

<?php
include "../views/Admin/quanlytintuc/list.php";
?>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>