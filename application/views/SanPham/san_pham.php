<!-- style -->
<?php $this->load->view('SanPham/style'); ?>
<!-- //style -->

<div class="col-lg-1"></div>
<div class="col-lg-8">
    <div class="blog-single-item" id="collections1">
        <div class="section-title" style="margin-bottom: 20px;">
            <div class="title">
                <h1><?=$data[0]->h1?></h1>
            </div>
        </div>
        <div class="blog-single-slider grid-uniform">

            <div class="grid_item pd-left0" id="owl-collection-single-slider1-c">
            <?php foreach ($data as $value) { ?>
                <div class="grid__item large--one-third medium--one-half small--one-half">
                
                    <div class="product-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="product-img">
                            <a href="<?= site_url()."san-pham/".$data[0]->slug_type."/".$value->slug ?>">
                                <img src="<?= site_url().$value->image ?>">
                            </a>
                            <div class="product-tags1">

                            </div>
                            <div class="product-tags">

                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-title">
                                <a href="<?= site_url()."san-pham/".$data[0]->slug_type."/".$value->slug ?>"><h2><?= $value->name_prod ?></h2></a>
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
                                                href="<?= site_url()."san-pham/".$data[0]->slug_type."/".$value->slug ?>">Xem
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
</div>
</div>
</div>
</div>
</section>