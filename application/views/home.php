<!DOCTYPE html>
<html lang="eng">

<head>
	<title>MilkteaTEN - Trang chủ</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8"/>

	<link rel="icon" href="<?php echo site_url(); ?>template/images/icon.png">

	<!-- Meta tag Keywords -->
	<meta property="og:url" content="<?= site_url() ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="MilkteaTEN - Trà sữa"/>
	<meta property="og:description"
		  content="Với sứ mệnh mang tới niềm vui và hạnh phúc, MilkteaTEN hy vọng sẽ tạo nên một nét văn hóa giải trí bên cạnh ly trà sữa Ngon – sạch – tươi."/>
	<meta property="og:image" content="<?= site_url('template/images/banner1.jpg') ?>"/>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>template/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>template/css/style.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="<?php echo site_url(); ?>template/css/slider.css" type="text/css" media="all"/>
	<!-- Style-CSS -->

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js" type="text/javascript"></script>
	<!-- //jquery -->

	<!-- /Fonts -->
	<link href="<?php echo site_url(); ?>template/css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
		  rel="stylesheet">
	<link type="text/css" rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans">
	<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo&subset=vietnamese" rel="stylesheet">
	<!-- //Fonts -->
</head>
<body>
<!-- header -->
<div id="home">
	<!--/top-nav -->
	<div class="top_w3pvt_main container">
		<!--/header -->
		<header class="nav_w3pvt text-center ">
			<!-- nav -->
			<nav class="wthree-w3ls">
				<div id="logo">
					<h1><a class="navbar-brand px-0 mx-0" href="<?= site_url() ?>"><img
								src="template/images/logo.png">
						</a>
					</h1>
				</div>

				<label for="drop" class="toggle">Menu</label>
				<input type="checkbox" id="drop"/>
				<ul class="menu mr-auto">
					<li class="active"><a href="<?= site_url() ?>">Trang Chủ</a></li>
					<li><a href="about.html">Giới Thiệu</a></li>
					<li><a href="<?= site_url('san-pham/che') ?>">Sản Phẩm</a></li>
					<li><a href="contact.html">Liên Hệ</a></li>
					<li><a href="<?= site_url('gio-hang') ?>">Giỏ Hàng</a></li>

					<li class="social-icons ml-lg-3"><a href="#" class="p-0 social-icon"><span
								class="fa fa-facebook-official" aria-hidden="true"></span>
							<div class="tooltip">Facebook</div>
						</a></li>
					<li class="social-icons"><a href="#" class="p-0 social-icon"><span class="fa fa-twitter"
																					   aria-hidden="true"></span>
							<div class="tooltip">Twitter</div>
						</a></li>
					<li class="social-icons"><a href="#" class="p-0 social-icon"><span class="fa fa-instagram"
																					   aria-hidden="true"></span>
							<div class="tooltip">Instagram</div>
						</a></li>
				</ul>
			</nav>
			<!-- //nav -->
		</header>
		<!--//header -->
	</div>
	<!-- //top-nav -->
	<!-- banner slider -->
	<div id="homepage-slider" class="st-slider">
		<input type="radio" class="cs_anchor radio" name="slider" id="play1" checked=""/>
		<input type="radio" class="cs_anchor radio" name="slider" id="slide1"/>
		<input type="radio" class="cs_anchor radio" name="slider" id="slide2"/>
		<input type="radio" class="cs_anchor radio" name="slider" id="slide3"/>
		<div class="images">
			<div class="images-inner">
				<div class="image-slide">
					<div class="banner-w3pvt-1">
						<div class="overlay-w3ls">

						</div>

					</div>
				</div>
				<div class="image-slide">
					<div class="banner-w3pvt-2">
						<div class="overlay-w3ls">

						</div>
					</div>
				</div>
				<div class="image-slide">
					<div class="banner-w3pvt-3">
						<div class="overlay-w3ls">

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="labels">
			<div class="fake-radio">
				<label for="slide1" class="radio-btn"></label>
				<label for="slide2" class="radio-btn"></label>
				<label for="slide3" class="radio-btn"></label>
			</div>
		</div>
		<!-- banner-hny-info -->
		<div class="banner-hny-info" style="text-align: center;">
			<h3 id="banner_txt">ToCoToCo Tea</h3>
			<div class="slide-bold-text">
				Trà sữa của hạnh phúc
			</div>
			<div class="slide-light-text">
				Với sứ mệnh mang tới niềm vui và hạnh phúc, TocoToco hy vọng sẽ tạo nên một nét văn hóa giải trí<br> bên
				cạnh ly trà sữa Ngon – sạch – tươi.
			</div>
			<br>
			<a href="#contact" class="btn mr-3"> Work With Us</a>
		</div>
		<!-- //banner-hny-info -->
	</div>
	<!-- //banner slider -->
</div>
<!-- //banner -->

<!-- portfolio -->
<section class="portfolio py-5" id="portfolio"
		 style="margin-bottom: -50px;padding-bottom: 0px !important; height: 700px">
	<div class="container py-md-5 py-3">
		<div style="text-align: center; margin-bottom: 10px;">
			<h3 class="tit_toco">
				ToCoToCo Menu
			</h3>
			<h2 id="h2_toco">Sản phẩm</h2>
			<img src="template/images/home_line.png" style="margin: 7px 0;">
		</div>
		<div class="row news-grids text-center">
			<?php foreach ($data as $value) { ?>
				<div class="col-md-3 col-6">
					<a href="<?php echo site_url() . 'san-pham/' . $value->slug; ?>">
						<img src="<?= $value->image ?>" class="img-circle"
							 style="height: 50%; border: 5px solid #d3b673; border-radius: 50%;">
						<p id="h2_toco"
						   style="font-size: 140%; margin-top: 20px; font-style: oblique;text-decoration: underline; letter-spacing: 7px"><?= $value->name_type ?></p>
					</a>
				</div>
			<?php } ?>
		</div>
		<!-- portfolio popups -->
		<!-- popup-->
		<div id="gal1" class="pop-overlay animate">
			<div class="popup">
				<img src="template/images/g1.jpg" alt="Popup Image" class="img-fluid"/>
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
					dolor.</p>
				<a class="close" href="#portfolio">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="gal2" class="pop-overlay animate">
			<div class="popup">
				<img src="template/images/g2.jpg" alt="Popup Image" class="img-fluid"/>
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
					dolor.</p>
				<a class="close" href="#portfolio">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="gal3" class="pop-overlay animate">
			<div class="popup">
				<img src="template/images/g3.jpg" alt="Popup Image" class="img-fluid"/>
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
					dolor.</p>
				<a class="close" href="#portfolio">&times;</a>
			</div>
		</div>
		<!-- //popup3 -->
		<!-- popup-->
		<div id="gal4" class="pop-overlay animate">
			<div class="popup">
				<img src="template/images/g4.jpg" alt="Popup Image" class="img-fluid"/>
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
					dolor.</p>
				<a class="close" href="#portfolio">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="gal5" class="pop-overlay animate">
			<div class="popup">
				<img src="template/images/g5.jpg" alt="Popup Image" class="img-fluid"/>
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
					dolor.</p>
				<a class="close" href="#portfolio">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="gal6" class="pop-overlay animate">
			<div class="popup">
				<img src="template/images/g6.jpg" alt="Popup Image" class="img-fluid"/>
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
					dolor.</p>
				<a class="close" href="#portfolio">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="gal7" class="pop-overlay animate">
			<div class="popup">
				<img src="template/images/g7.jpg" alt="Popup Image" class="img-fluid"/>
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
					dolor.</p>
				<a class="close" href="#portfolio">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="gal8" class="pop-overlay animate">
			<div class="popup">
				<img src="template/images/g8.jpg" alt="Popup Image" class="img-fluid"/>
				<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
					dolor.</p>
				<a class="close" href="#portfolio">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- //portfolio popups -->
	</div>
</section>
<!-- //portfolio -->

<!-- /plans -->
<section class="plans-sec py-5" id="plans">
	<div class="container py-md-5 py-3">
		<div style="text-align: center; margin-bottom: 10px;">
			<h3 class="tit_toco">
				Tin tức và Khuyến mãi
			</h3>
			<h2 id="h2_toco">New Feeds</h2>
			<img src="template/images/home_line.png" style="margin: 7px 0;">
		</div>
		<div class="row pricing-plans">
			<div class="col-md-4 price-main text-center mb-4">
				<a href="#"><img src="template/images/new-1.jpg"></a>
			</div>
			<div class="col-md-4 price-main text-center mb-4">
				<a href="#"><img src="template/images/new-2.jpg"></a>
			</div>
			<div class="col-md-4 price-main text-center mb-4">
				<a href="#"><img src="template/images/new-3.jpg"></a>
			</div>
		</div>
	</div>
</section>
<!-- //plans -->

<!-- thưởng thức -->
<section class="py-5" style="margin-top: 30px">
	<div style="background: url(template/images/banner5.jpg) no-repeat center; height: 300px; text-align: center;">

	</div>
</section>
<!-- //thưởng thức -->

<!-- team -->
<section class="team py-5" id="team"
		 style="background: url(template/images/banner4.jpg) no-repeat center fixed; background-size: cover; position: relative; padding: 0px !important;">
	<div style="height: 100%; position: absolute; width: 100%; background: rgb(1,1,1,0.1);"></div>
	<div class="container py-md-5 py-3">
		<div style="text-align: center; margin-bottom: 10px;">
			<h3 class="tit_toco">
				ToCoToCo Menu
			</h3>
			<h2 id="h2_toco">Sản phẩm nổi bật</h2>
			<img src="template/images/home_line.png" style="margin: 7px 0;">
		</div>
		<div class="row team-grid">
			<div class="col-lg-3 col-sm-6 mb-4">
				<div class="box13">
					<img src="template/images/1.jpeg" class="img-fluid img-thumbnail" alt=""/>
					<div class="box-content">
						<h3 class="title">trà sữa ba anh em</h3>
						<span class="post">42.000đ</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-cart-plus"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-4">
				<div class="box13">
					<img src="template/images/2.jpeg" class="img-fluid img-thumbnail" alt=""/>
					<div class="box-content">
						<h3 class="title">trà sữa panda</h3>
						<span class="post">42.000đ</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-4">
				<div class="box13">
					<img src="template/images/3.jpeg" class="img-fluid img-thumbnail" alt=""/>
					<div class="box-content">
						<h3 class="title">toco socola</h3>
						<span class="post">42.000đ</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-4">
				<div class="box13">
					<img src="template/images/4.jpg" class="img-fluid img-thumbnail" alt=""/>
					<div class="box-content">
						<h3 class="title">hồng trà kem phô mai</h3>
						<span class="post">42.000đ</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-4">
				<div class="box13">
					<img src="template/images/5.jpg" class="img-fluid img-thumbnail" alt=""/>
					<div class="box-content">
						<h3 class="title">hoàng gia kem phô mai</h3>
						<span class="post">42.000đ</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-4">
				<div class="box13">
					<img src="template/images/6.jpg" class="img-fluid img-thumbnail" alt=""/>
					<div class="box-content">
						<h3 class="title">dâu tằm kem<br>phô mai</h3>
						<span class="post">42.000đ</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-4">
				<div class="box13">
					<img src="template/images/7.jpg" class="img-fluid img-thumbnail" alt=""/>
					<div class="box-content">
						<h3 class="title">sữa tươi trân châu đường hổ</h3>
						<span class="post">42.000đ</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-4">
				<div class="box13">
					<img src="template/images/8.png" class="img-fluid img-thumbnail" alt=""/>
					<div class="box-content">
						<h3 class="title">trà dâu tằm pha lê tuyết</h3>
						<span class="post">42.000đ</span>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //team -->

<!-- giới thiệu -->
<section class="py-5" style="margin-top: 30px">
	<div
		style="background: url(template/images/banner_about_us.png) no-repeat center; height: 550px; text-align: center;">

	</div>
</section>
<!-- //giới thiệu -->

<!-- text -->
<section class="text py-5" id="register">
	<div class="container py-md-5 py-3 text-center">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-4 heading">KHÁM PHÁ TOCOTOCO NHẬN NGAY KHUYẾN MÃI</h2>
				<!-- <a href="#contact" class="btn mr-3"> Work With Us</a>
				<a href="#portfolio" class="btn"> Projects </a> -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="#" style="margin-right: 20px"><img src="template/images/km-1.jpg" style="width: 40%"></a>
				<a href="#"><img src="template/images/km-2.jpg" style="width: 40%"></a>
			</div>
		</div>
	</div>
</section>
<!-- //text -->

<!-- Contact page -->
<section class="contact py-5" id="contact">
	<div class="container py-md-5 py-5">
		<div style="text-align: center; margin-bottom: 10px;">
			<h3 class="tit_toco">
				Tocotoco Store
			</h3>
			<h2 id="h2_toco">Không Gian Cửa Hàng</h2>
			<img src="template/images/home_line.png" style="margin: 7px 0;">
		</div>
		<div class="row contact_information">
			<div class="col-md-4 contact_left">
				<div class="contact_border p-4">
					<img src="template/images/store-1.jpg">
				</div>
			</div>
			<div class="col-md-4 contact_left">
				<div class="contact_border p-4">
					<img src="template/images/store-2.jpg">
				</div>
			</div>
			<div class="col-md-4 contact_left">
				<div class="contact_border p-4">
					<img src="template/images/store-3.jpg">
				</div>
			</div>
			<div class="col-md-4 contact_left">
				<div class="contact_border p-4">
					<img src="template/images/store-4.jpg">
				</div>
			</div>
			<div class="col-md-4 contact_left">
				<div class="contact_border p-4">
					<img src="template/images/store-5.jpg">
				</div>
			</div>
			<div class="col-md-4 contact_left">
				<div class="contact_border p-4">
					<img src="template/images/store-6.jpg">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Contact page -->

<!-- footer -->
<footer class="py-md-5 py-3"
		style="background: url(template/images/banner_detail.png) no-repeat center; padding-bottom: 0px !important; position: relative;">
	<div
		style="height: 100%; position: absolute; width: 100%; top: 0; right: 0; left:0; bottom:0; background: rgba(1, 1, 1, 0.69)"></div>
	<div class="container">
		<div class="row footer-grids">
			<div class="col-lg-5 col-sm-5 mb-lg-0 mb-sm-5 mb-4">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6350041.310790406!2d30.68773492426509!3d39.0014851732576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2sTurkey!5e0!3m2!1sen!2sin!4v1522753415269"
					style="height: 300px; width: 100%"></iframe>
			</div>
			<div class="col-lg-1 col-sm-1"></div>
			<div class="col-lg-2 col-sm-2 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-4" style="color:  #d3b673;">Quick Links</h4>
				<ul>
					<li><a href="#register">Register here </a></li>
					<li class="my-2"><a href="#team">Business Team</a></li>
					<li><a href="#contact">Support Helpline</a></li>
					<li class="mt-2"><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-sm-4">
				<h4 class="mb-4" style="color:  #d3b673;">Subscribe Us</h4>
				<p class="mb-3" style="color: whitesmoke">Subscribe to our newsletter</p>
				<form id="sub_form" class="d-flex">
					<input type="email" id="email" name="email_sub" placeholder="Enter your email here" required="">
					<button type="submit" class="btn popup_sub">Subscribe<span class="popuptext1" id="myPopup1">Đăng ký nhận tin thành công!</span><span
							class="popuptext2" id="myPopup2">Email này đã đăng ký nhận tin!</span></button>
				</form>
				<!-- <a href="<?= site_url('home/createXLS') ?>" class="btn">Export</a> -->
			</div>
		</div>
	</div>
	<hr style="border-top: 1px solid rgb(255, 255, 255, 0.3); margin-bottom: 0">
	<!-- copyright -->
	<div class="container" style="padding: 20px 0px;">
		<div class="row">
			<div class="col-sm-7" style="color: whitesmoke">ToCoToCo - Thương hiệu trà sữa tiên phong sử dụng nguồn nông
				sản Việt Nam
			</div>
			<div class="col-sm-5" style="color: whitesmoke">Copyrights © 2019 by QuynhLien. All rights reserved.</div>
		</div>
	</div>
	<!-- //copyright -->
</footer>
<!-- //footer -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top">
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

<script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5d52ae7f4cd0540012f20160&product="
		sticky-share-buttons
"></script>
<script>

$("#sub_form").on('submit', (function (log) {
    var formdata = new FormData(this);
    log.preventDefault();
    $.ajax({
        url: "<?php echo site_url('Home/addSubcribe'); ?>",
        type: "POST",
        data: formdata,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            // $(".loadings").hide()
            if (data == "true") {
                var popup = document.getElementById("myPopup1");
                popup.classList.toggle("show");
            } else {
                var popup = document.getElementById("myPopup2");
                popup.classList.toggle("show");
            }
        },
        error: function () {
        }
    });
}));

</script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v4.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
	 attribution=setup_tool
	 page_id="111183013571051"
	 theme_color="#d3b673">
</div>
</body>
</html>
