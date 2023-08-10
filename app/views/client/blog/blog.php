<?php
extract($data);
?>
<section class="blog spad" style="padding-top:5px;padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="blog__sidebar" style="padding: 0;">
                    <div class="blog__sidebar__item">
                        <h4>Danh Mục</h4>
                        <ul>
                            <li><a href="#">All</a></li>
                            <?php
                                foreach ($dsdmbl as $item) {
                                    extract($item); ?>
                                    <li><a href=""><?=$title_list_blog?></a></li>
                               <?php }
                            ?>
                        </ul>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Bài viết mới nhất</h4>
                        <div class="blog__sidebar__recent">
                            <?php
                            foreach ($dsblognew as $blog) {
                                extract($blog);
                                // $hinh = './upload/' . $img;
                                // $linkblog = "index.php?act=blogct&id=" . $id;
                            ?>
                                <a href="<?= $linkblog ?>" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic" style="width:80px">
                                        <img style="height:80px;width:auto;" src="<?= _WEB_ROOT ?>/public/uploads/<?= $img ?>" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6><?= $title ?></h6>
                                        <span><?= $date ?></span>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    <?php
                    foreach ($dsblog as $blog) {
                        extract($blog);
                        // $hinh = $img_path . $img
                    ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic" style="width:360px">
                                    <img style="height:100% ;" src="<?= _WEB_ROOT ?>/public/uploads/<?= $img ?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?= $date ?></li>
                                        <li><i class="fa fa-eye"></i> <?= $view ?></li>
                                    </ul>
                                    <h5><a href="index.php?act=blogct&id=<?= $id ?>"><?= $title ?></a></h5>
                                    <p style="overflow:hidden;text-overflow:ellipsis"><?= $describe ?></p>
                                    <a href="index.php?act=blogct&id=<?= $id ?>" class="blog__btn">Đọc thêm <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                    <?php    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Product Section End -->