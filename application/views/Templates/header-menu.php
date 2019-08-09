<div id="home" class="inner-w3pvt-page">
        <div class="overlay-innerpage">
            <!--/top-nav -->
            <div class="top_w3pvt_main container">
                <!--/header -->
                <header class="nav_w3pvt text-center">
                    <!-- nav -->
                    <nav class="wthree-w3ls">
                        <div id="logo">
                            <h1>
                                <a class="navbar-brand px-0 mx-0" href="<?php echo site_url();?>">
                                    <img src="<?= site_url()?>template/images/logo.png">
                                </a>
                            </h1>
                        </div>

                        <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mr-auto">
                        <li class="active"><a href="<?=site_url()?>">Trang Chủ</a></li>
                        <li><a href="about.html">Giới Thiệu</a></li>                      
                        <li><a href="<?=site_url('san-pham/che')?>">Sản Phẩm</a></li>
                        <li><a href="contact.html">Liên Hệ</a></li>
                        <li><a href="<?=site_url('gio-hang')?>">Giỏ Hàng</a></li>

                        <li class="social-icons ml-lg-3"><a href="#" class="p-0 social-icon"><span class="fa fa-facebook-official" aria-hidden="true"></span>
                                <div class="tooltip">Facebook</div>
                            </a> </li>
                        <li class="social-icons"><a href="#" class="p-0 social-icon"><span class="fa fa-twitter" aria-hidden="true"></span>
                                <div class="tooltip">Twitter</div>
                            </a> </li>
                        <li class="social-icons"><a href="#" class="p-0 social-icon"><span class="fa fa-instagram" aria-hidden="true"></span>
                                <div class="tooltip">Instagram</div>
                            </a> </li>
                    </ul>
                    </nav>
                    <!-- //nav -->
                </header>
                <!--//header -->

                <!--/breadcrumb-->
                <div class="inner-w3pvt-page-info">
                    <ol class="breadcrumb d-flex">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><?= $page_parent?></li>
                        <?php if($page_child2) { ?>
                        <li class="breadcrumb-item"><?= $page_child1?></li>
                        <li class="breadcrumb-item active"><?= $page_child2?></li>
                        <?php } else if($page_child1){ ?>
                        <li class="breadcrumb-item active"><?= $page_child1?></li>
                        <?php } ?>
                    </ol>

                </div>
                <!--//breadcrumb-->
            </div>
            <!-- //top-nav -->
        </div>
    </div>