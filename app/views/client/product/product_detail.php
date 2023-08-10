<?php
extract($data);
// print_r($product_one);
if (isset($product_one)) {
    extract($product_one);
}
?>

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="<?= _WEB_ROOT ?>/public/uploads/<?= $img ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3><?= $name ?></h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    <div style="display:flex; align-items:center">
                        <div class="product__details__price"><?= currency_format($price_sale) ?></div>
                        <span style="margin-left: 20px;text-decoration-line: line-through;color:gray;font-size:20px"><?= currency_format($price) ?></span>
                    </div>
                    <div class="product__details__quantity">
                    </div>
                    <center>
                        <a href="<?= $addtocart ?>" style="margin-top:70px" class="primary-btn">Mua Sản Phẩm </a>
                    </center>
                    <!-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> -->
                    <ul style="margin-left: 50px;">
                        <?= $describe ?>
                    </ul>
                    <style>
                        .product__details__text p {
                            margin: 0 20px;
                        }
                    </style>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true" style="font-size:40px">Mô Tả</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Thông tin sản phẩm</h6>
                                <p><?= $describe_detail ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Product Details Section End -->
<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Sản Phẩm Cùng Loại</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $spcungloai = $this->db->query("SELECT * FROM `product` WHERE id_list_prod = $id_list_prod AND id <> $id")->fetchAll(PDO::FETCH_ASSOC);
            foreach ($spcungloai as $sp) {
                extract($sp);
                // $hinh = $img_path . $img;
                $gia = currency_format($price);
                $giagiam = currency_format($price_sale);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                if (isset($sp) && ($sp) == 0) {
            ?>
                    <p>Không Có Sản Phẩm Cùng Loại</p>
                <?php } else { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?= _WEB_ROOT ?>/public/uploads/<?= $img ?>">
                                <ul class="product__item__pic__hover">
                                    <li><a href="<?= _WEB_ROOT ?>/san-pham/<?= $id ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    <li><a href="index.php?act=addtocart&id=<?= $id ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="<?= _WEB_ROOT ?>/san-pham/<?= $id ?>"><?= $name ?></a></h6>
                                <h5><?= currency_format($price_sale); ?></h5>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</section>
<!-- Related Product Section End -->