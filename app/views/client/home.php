<?php
extract($data);
?>
    <!-- Breadcrumb Section Begin -->
    
    <!-- Breadcrumb Section End -->
    <!-- Categories Section Begin -->
    <section class="categories" style="padding-top: 25px;">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        // $hinh = $img_path . $img;
                        // $linkdm = "index.php?act=sanpham&iddm=" . $id;
                    ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="<?=_WEB_ROOT?>/public/uploads/<?=$img?>">
                                <h5><a href="<?=_WEB_ROOT?>/danh-muc/<?=$id?>"><?= $namelistpro ?></a></h5>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Sản Phẩm Nổi Bật</h2>
                        </div>
                        <div class="featured__controls">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm); ?>
                                    <li data-filter=".<?= $filter ?>"><?= $namelistpro ?></li>
                                <?php }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
                    <?php
                    foreach ($spnew as $sp) {
                        extract($sp);
                        // $hinh = $img_path . $img;
                        $gia = currency_format($price);
                        $giagiam = currency_format($price_sale);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        // $addtocart = "index.php?act=addtocart&id=" . $id;
                    ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 mix <?= $filter ?>">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="<?=_WEB_ROOT?>/public/uploads/<?=$img?>">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="<?=_WEB_ROOT?>/san-pham/<?=$id?>"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        <li><button type="button" value="<?= $id ?>" class="btn btn-secondary addtocart"><i class="fa fa-shopping-cart"></i></button></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <a href="<?=_WEB_ROOT?>/san-pham/<?=$id?>">
                                        <h6 style="font-weight:bold"><?= $name ?></h6>
                                    </a>
                                    <?php
                                    if ($price_sale > 0) {
                                    ?>
                                        <span><b><?= $giagiam ?></b> <strike><?= $gia ?></strike></span>
                                    <?php } else { ?>
                                        <h5><?= $gia ?></h5>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="view/img/banner/banner1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="view/img/banner/banner2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Mới Nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                foreach ($spnew1 as $sp) {
                                    extract($sp);
                                    // $hinh = $img_path . $img;
                                    $gia = currency_format($price);
                                    $giagiam = currency_format($price_sale);
                                    $linksp = "index.php?act=sanphamct&idsp=" . $id;

                                ?>
                                    <a href="<?=_WEB_ROOT?>/san-pham/<?=$id?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?=_WEB_ROOT?>/public/uploads/<?=$img?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?= $name ?></h6>
                                            <?php
                                            if ($price_sale > 0) {
                                            ?>
                                                <p><b><?= $giagiam ?></b><br><strike><?= $gia ?></strike></p>
                                            <?php } else { ?>
                                                <span><?= $gia ?></span>
                                            <?php } ?>
                                        </div>
                                    </a>

                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Hot</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                foreach ($sphot as $sp) {
                                    extract($sp);
                                    // $hinh = $img_path . $img;
                                    $gia = currency_format($price);
                                    $giagiam = currency_format($price_sale);
                                    $linksp = "index.php?act=sanphamct&idsp=" . $id;

                                ?>
                                    <a href="<?=_WEB_ROOT?>/san-pham/<?=$id?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?=_WEB_ROOT?>/public/uploads/<?=$img?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?= $name ?></h6>
                                            <?php
                                            if ($price_sale > 0) {
                                            ?>
                                                <p><b><?= $giagiam ?></b><br><strike><?= $gia ?></strike></p>
                                            <?php } else { ?>
                                                <span><?= $gia ?></span>
                                            <?php } ?>
                                        </div>
                                    </a>

                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Khuyến Mãi</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                foreach ($spkm as $sp) {
                                    extract($sp);
                                    // $hinh = $img_path . $img;
                                    $gia = currency_format($price);
                                    $giagiam = currency_format($price_sale);
                                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                ?>
                                    <a href="<?=_WEB_ROOT?>/san-pham/<?=$id?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?=_WEB_ROOT?>/public/uploads/<?=$img?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?= $name ?></h6>
                                            <?php
                                            if ($price_sale > 0) {
                                            ?>
                                                <p><b><?= $giagiam ?></b><br><strike><?= $gia ?></strike></p>
                                            <?php } else { ?>
                                                <span><?= $gia ?></span>
                                            <?php } ?>
                                        </div>
                                    </a>

                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Bài viết mới nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                foreach ($dsblog as $blog) {
                    extract($blog);
                    // $hinh = $img_path .$img
                ?>

                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img style="height:250px ;" src="<?=_WEB_ROOT?>/public/uploads/<?=$img?>" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar"></i> <?= $date?></li>
                                    <li><i class="fa fa-eye"></i> <?= $view?></li>
                                </ul>
                                <h5><a href="index.php?act=blogct&id=<?= $id?>"><?= $title?></a></h5>
                                <p style="overflow: hidden;text-overflow:ellipsis"><?= $describe?></p>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>

<script>
    $(document).on('click', '.addtocart', function(e) {
        e.preventDefault();
        var id = $(this).val();
        $.ajax({
            url:'<?=_WEB_ROOT?>/addtocart',
            type:'POST',
            data:{
                'id':id,
                'addtocart1':true
            },success:function(data){
                Swal.fire(
                        "Good job!",
                        "Thêm Vào Giỏ Hàng Thành Công",
                        "success"
                    );
                $('#cart').load(location.href + " #cart");
            }
        });
    });

</script>