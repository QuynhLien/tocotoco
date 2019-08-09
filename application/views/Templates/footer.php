<!-- footer -->
<footer class="py-md-5 py-3"
        style="position: relative; background: url(<?= site_url() ?>template/images/footer_detail.png) no-repeat center; background-size: cover; padding-bottom: 0px !important">
    <div style="position: absolute; height: 100%; width: 100%; top: 0; right: 0; left:0; bottom:0; background: rgba(1, 1, 1, 0.69)">
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
            <div class="col-sm-7" style="color: whitesmoke">ToCoToCo - Thương hiệu trà sữa tiên phong sử dụng nguồn nông
                sản Việt Nam
            </div>
            <div class="col-sm-5" style="color: whitesmoke">Copyrights © 2019 by QuynhLien. All rights reserved.</div>
        </div>
    </div>
    <!-- //copyright -->
</footer>
<!-- //footer -->
<script src="<?php echo site_url(); ?>assets/javascript.js"></script>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v4.0'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1621330407923772"
  theme_color="#d3b673">
</div>