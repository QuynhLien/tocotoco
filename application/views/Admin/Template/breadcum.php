<style type="text/css">
  .breadcrumb-text {
    text-transform: capitalize
  }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">            
            <?php if($page_child2) { ?>
            <h1 class="m-0 text-dark breadcrumb-text"><?= $page_child2?></h1>
            <?php } else if($page_child1){ ?>
            <h1 class="m-0 text-dark breadcrumb-text"><?= $page_child1?></h1>
            <?php } ?>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('admin') ?>">Home</a></li>
              <?php if($page_child2) { ?>
              <li class="breadcrumb-item breadcrumb-text"><?= $page_child1?></li>
              <li class="breadcrumb-item active breadcrumb-text"><?= $page_child2?></li>
              <?php } else if($page_child1){ ?>
              <li class="breadcrumb-item active breadcrumb-text"><?= $page_child1?></li>
              <?php } ?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>