<!-- style -->
<?php $this->load->view('SanPham/style'); ?>
<!-- //style -->
<style type="text/css">

</style>
<div class="col-lg-9" style="padding: 0; margin-left: -20px">
    <div class="row">
        <div class="col-md-6" style="padding: 0">
            <img src="<?= site_url() . $data->image ?>" id="img-detail">
        </div>
        <div class="col-md-6" style="padding-left: 40px; padding-right: 0;">
            <h3 id="title-detail"><?= $data->name_prod ?></h3><br>
            <h4 id="price-detail"><?= number_format($data->price) ?>đ</h4><br><br>
            <p><?= $data->content ?></p><br>
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
</div>
</div>
</section>

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d528b734cd0540012f20106&product='inline-share-buttons' async='async'></script>

<script>
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