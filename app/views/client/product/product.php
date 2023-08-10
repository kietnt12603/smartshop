<?php
extract($data);
?>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad" style="padding: 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Danh Mục</h4>
                        <ul>
                            <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                            ?>
                                <li><a href="<?=_WEB_ROOT?>/danh-muc/<?=$id?>"><?= $namelistpro ?></a></li>
                            <?php }
                            ?>
                        </ul>
                    </div>
                    <!-- <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    <div class="sidebar__item">
                        <div class="latest-product__text">
                            <h4>Sản Phẩm Mới Nhất</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <?php
                                    foreach ($spnew1 as $sp) {
                                        extract($sp);
                                        // $hinh=$img_path.$img;
                                        $gia = currency_format($price);
                                        $giagiam = currency_format($price_sale);
                                        // $linksp="index.php?act=sanphamct&idsp=".$id;
                                    ?>
                                        <a href="<?= _WEB_ROOT ?>/san-pham/<?= $id ?>" class="latest-product__item">
                                            <div class="latest-product__item__pic" style="width:70px">
                                                <img src="<?= _WEB_ROOT ?>/public/uploads/<?= $img ?>" alt="" style="width:70px; height:70px;object-fit:cover">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?= $name ?></h6>
                                                <span><?= $giagiam ?></span>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">

                <div class="row">
                    <?php
                    
                    foreach ($dssp as $sp) {
                        extract($sp);

                        $gia = currency_format($price);
                        $giagiam = currency_format($price_sale);
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= _WEB_ROOT ?>/public/uploads/<?= $img ?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="<?= _WEB_ROOT ?>/san-pham/<?= $id ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><a href="index.php?act=addtocart&id=<?= $id ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="<?= $linksp ?>"><?= $name ?></a></h6>
                                    <span><b><?= $giagiam ?></b> <strike><?= $gia ?></strike></span>
                                </div>
                            </div>
                        </div>
                    <?php }
                     ?>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->