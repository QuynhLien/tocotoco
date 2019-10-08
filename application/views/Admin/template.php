<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php $this->load->view('Admin/Template/header') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('Admin/Template/navbar') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('Admin/Template/sidebar') ?>
  <!-- /Main Sidebar Container -->

  <!-- Breadcrumb Content Wrapper. Contains page content -->
    <?php $this->load->view('Admin/Template/breadcum') ?>
    <!-- /.Breadcrumb content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php $this->load->view($page); ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!--   <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">QuynhLien</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-beta.2
    </div>
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Footer js -->
<?php $this->load->view('Admin/Template/footer_js') ?>
<!-- /Footer js -->
</body>
</html>
