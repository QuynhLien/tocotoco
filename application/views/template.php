<!DOCTYPE html>
<html lang="zxx">

<?php

$this->load->view('Templates/header');
$this->load->view('Templates/style');

?>
<body>
    <!--home -->
    <?php $this->load->view('Templates/header-menu'); ?>
    <!-- //home -->

    <!-- menu -->
    <?php if($menu) $this->load->view('Templates/left-menu'); ?>
    <!-- //menu -->

    <!-- content -->
    <?php $this->load->view($page); ?>
    <!-- //content -->

    <!-- footer -->
  <?php $this->load->view('Templates/footer'); ?>
    <!-- //footer -->
</body>

</html>
