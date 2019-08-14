<!-- footer -->
<footer class="py-md-5 py-3"
		style="position: relative; background: url(<?= site_url() ?>template/images/footer_detail.png) no-repeat center; background-size: cover; padding-bottom: 0px !important">
	<div
		style="position: absolute; height: 100%; width: 100%; top: 0; right: 0; left:0; bottom:0; background: rgba(1, 1, 1, 0.69)">
	</div>
	<div class="container">
		<div class="row footer-grids">
			<div class="col-lg-5 col-sm-5 mb-lg-0 mb-sm-5 mb-4">
				<img src="<?= site_url() ?>template/images/ft_logo.png">
			</div>
			<div class="col-lg-1 col-sm-1"></div>
			<div class="col-lg-2 col-sm-2 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-4" style="color:  #d3b673;">Quick Links</h4>
				<ul style="color: white">
					<li><a href="#register">Register here </a></li>
					<li class="my-2"><a href="#team">Business Team</a></li>
					<li><a href="#contact">Support Helpline</a></li>
					<li class="mt-2"><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-sm-4">
				<h4 class="mb-4" style="color:  #d3b673;">Subscribe Us</h4>
				<p class="mb-3" style="color: whitesmoke">Subscribe to our newsletter</p>
				<form action="#" method="post" class="d-flex">
					<input type="email" id="email" name="EMAIL" placeholder="Enter your email here" required="">
					<button type="submit" class="btn">Subscribe</button>
				</form>
			</div>
		</div>
	</div>
	<hr style="border-top: 2px solid rgb(255, 255, 255); margin-bottom: 0">
	<!-- copyright -->
	<div class="container" style="padding: 20px 0px;">
		<div class="row">
			<div class="col-sm-7" style="color: whitesmoke">MilkteaTEN - Thương hiệu trà sữa tiên phong sử dụng nguồn nông
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

<script src="<?php echo site_url(); ?>assets/javascript.js"></script>
<?php if (!$page_child2){ ?>
<script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5d52ae7f4cd0540012f20160&product="
		sticky-share-buttons"></script>
<?php } ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5d52bc90eb1a6b0be607523d/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145676775-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145676775-1');
</script>
<!-- //Global site tag (gtag.js) - Google Analytics -->