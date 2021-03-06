<!-- style -->
<?php $this->load->view('SanPham/style'); ?>
<!-- //style -->
<style type="text/css">

</style>
<div class="col-lg-9" style="padding: 0; margin-left: -20px">
    <div class="row">
        <div class="col-md-6" style="padding: 0">
            <img src="<?= site_url() . $data->image ?>" id="img-detail" alt="<?= $data->alt_img ?>" title="<?= $data->title_img ?>">
        </div>
        <div class="col-md-6" style="padding-left: 40px; padding-right: 0;">
            <h3 id="title-detail"><?= $data->name_prod ?></h3><br>
            <h4 id="price-detail"><?= number_format($data->price) ?>đ</h4><br><br>
            <p><?= $data->description ?></p><br>
            <div class="row">
                <div class="col-md-4 quantity">
                    <button id="btn-quantity" class="btn-plus"><i class="fa fa-plus"></i></button>
                    <input type="number" name="amount" value="1" id="amount">
                    <button id="btn-quantity" class="btn-minus"><i class="fa fa-minus"></i></button>
                </div>
                <div class="col-md-2" style="position: relative;">
                    <div id="btn-cart" class="popup_cart"><i class="fa fa-cart-plus"></i>
                        <span class="popuptext" id="myPopup">Đã thêm vào giỏ hàng</span></div>
                </div>
                <div class="col-md-6" style="position: relative;">
                    <a href="javascript:buy_now();" id="btn-buy">Mua Ngay</a>
                </div>
            </div>
            <br>
            <p>Giao hàng tận nơi <span style="color: #d3b673; font-weight: bold;">08.5858.645 <i
                            class="fa fa-mobile-phone" style="font-size: 25px;"></i><span></p><br>
            <div class="sharethis-inline-share-buttons"></div>
        </div>
    </div>
</div>
</div>
<br><hr>
<div class="row">
    <div class="col-md-12">
        <?php
            $arr_h2 = explode("#",$data->h2);
            $arr_content = explode("#",$data->content);
            $amount = count($arr_h2) - 1;
            for ($i=0; $i < $amount ; $i++) { ?>    
                <br><br>
                <h2 id="price-detail"><strong><?= $arr_h2[$i] ?></strong></h2><br>
                <p><?= $arr_content[$i] ?></p>
        <?php } ?>
    </div>
</div>
</div>
</div>
</section>

<!-- portfolio -->
<section class="portfolio py-5" id="portfolio"
         style="padding-top: 0px !important;">
    <div class="container py-md-5 py-3 blog-single-item"id="collections1">
        <div style="text-align: center; margin-bottom: 10px;">
            <h2 class="tit_toco">
                MilkteaTEN Menu
            </h2>
            <h3 id="h2_toco">Có thể bạn thích</h3>
            <img src="<?= site_url('template/images/home_line.png') ?>" style="margin: 7px 0;">
        </div>
        <div class="blog-single-slider grid-uniform">

            <div class="grid_item pd-left0 slider" id="owl-collection-single-slider1-c">
            <?php foreach ($same as $value) { ?>
                <div class="grid__item large--one-third medium--one-half small--one-half">
                
                    <div class="product-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="product-img">
                            <a href="<?= site_url()."san-pham/".$this->uri->segment(2)."/".$value->slug ?>">
                                <img src="<?= site_url().$value->image ?>" alt="<?= $value->alt_img ?>" title="<?= $value->title_img ?>">
                            </a>
                            <div class="product-tags1">

                            </div>
                            <div class="product-tags">

                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-title">
                                <a href="<?= site_url()."san-pham/".$this->uri->segment(2)."/".$value->slug ?>"><h2><?= $value->name_prod ?></h2></a>
                            </div>
                            <div class="product-price clearfix">
                                <span class="current-price"><?= number_format($value->price) ?>₫</span>

                            </div>
                            <div class="product-actions text-center clearfix">
                                <div>
                                    <button type="button" class="btn-buyNow medium--hide small--hide">
                                        <a href="#">
                                            Đặt ngay
                                        </a>
                                    </button>
                                    <button type="button" class="btn-quickview medium--hide small--hide"><a
                                                href="<?= site_url()."san-pham/".$this->uri->segment(2)."/".$value->slug ?>">Xem
                                            chi tiết</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>     
    </div>
</section>
<!-- //portfolio -->

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d528b734cd0540012f20106&product='inline-share-buttons' async='async'></script>

<script>
    $("#owl-collection-single-slider1-c").slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
    });

    $("#btn-cart").click(function () {
        var amount = document.getElementById("amount").value;
        amount = parseInt(amount);
        var id_prod = "<?= $data->id?>";
        $.ajax({
            url: "<?php echo site_url('GioHang/addCart'); ?>",
            type: "POST",
            data: {id: id_prod, amount: amount},
            success: function (data) {
                if (data) {
                    var popup = document.getElementById("myPopup");
                    popup.classList.toggle("show");
                } else {
                    alert("error_if");
                }
            },
            error: function () {
                alert("error");
            }
        });
    });

    function buy_now() {
        var amount = document.getElementById("amount").value;
        amount = parseInt(amount);
        var id_prod = "<?= $data->id?>";
        $.ajax({
            url: "<?php echo site_url('GioHang/addCart'); ?>",
            type: "POST",
            data: {id: id_prod, amount: amount},
            success: function (data) {
                if (data)
                    location.href = '<?php echo site_url('gio-hang'); ?>';
                else {
                    alert("error_if");
                }
            },
            error: function () {
                alert("error");
            }
        });
    }
</script>