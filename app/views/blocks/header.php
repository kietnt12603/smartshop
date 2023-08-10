<?php
extract($data);
$thongtinchung2 = $this->db->table('contact_info')->where('id', '=', '1')->first();
extract($thongtinchung2);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $page_title ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/clients/css/bootstrap.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/clients/css/font-awesome.min.css" type="text/css"> -->
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/clients/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/clients/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/clients/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/clients/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/clients/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/clients/css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body id="body">
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <!-- <span class="arrow_carrot-down"></span> -->
                <i class="fa-solid fa-caret-down"></i>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="<?php if ($page_title == "Trang Chủ") echo 'active'  ?>"><a href="./index.html">Trang Chủ</a></li>
                <li><a href="./shop-grid.html">Cửa Hàng</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Miễn phí giao hàng</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i><?= $email ?></li>
                                <li>Miễn phí giao hàng</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <!-- <div class="header__top__right__social">
                                <a href="https://www.facebook.com/kietdb12603" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div> -->
                            <div class="header__top__right__auth">
                                <style>
                                    .login-user {
                                        display: inline-block;
                                        margin-right: 50px;
                                        position: relative;
                                    }

                                    .login-user:hover .sub-login_user {
                                        top: 30px;
                                        opacity: 1;
                                        visibility: visible;
                                    }

                                    .sub-login_user {
                                        position: absolute;
                                        left: 0;
                                        background: #222222;
                                        width: 180px;
                                        z-index: 9;
                                        padding: 5px 0;
                                        visibility: hidden;
                                    }

                                    .sub-login_user li {
                                        left: 0;
                                        text-align: center;
                                        list-style: none;
                                    }

                                    .sub-login_user::before {
                                        position: absolute;
                                        content: '';
                                        top: -50%;
                                        left: 0;
                                        right: 0;
                                        height: 50px;
                                        background-color: transparent;
                                    }

                                    .sub-login_user li a {
                                        text-transform: capitalize;
                                        color: #ffffff;
                                        font-weight: 400;
                                        padding: 5px 15px;
                                    }

                                    .sub-login_user li a:hover {
                                        color: #7fad39;
                                    }
                                </style>
                                <?php
                                if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                ?>
                                    <div class="login-user">
                                        <img src="<?= _WEB_ROOT ?>/public/uploads/avt.jpg" width="30px" alt="" class="rounded-circle">
                                        <span><?= $name ?></span>
                                        <div class="sub-login_user">
                                            <ul>
                                                <li><a href="index.php?act=edittk">Cập nhật tài khoản</a></li>
                                                <li><a href="index.php?act=doimatkhau">Đổi Mật Khẩu</a></li>
                                                <li><a href="<?=_WEB_ROOT?>/checkmybill/<?= $_SESSION['user']['id'] ?>">Đơn hàng của bạn</a></li>
                                                <li><a href="<?= _WEB_ROOT ?>/logout">Đăng xuất</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php  } else { ?>
                                    <a href="<?= _WEB_ROOT ?>/login"><i class="fa fa-user"></i>Đăng nhập</a>
                                <?php     }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?= _WEB_ROOT ?>/public/assets/clients/img/logo1.png" width="85px" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="<?php if ($page_title == "Trang Chủ") echo 'active'  ?>"><a href="<?= _WEB_ROOT ?>">Trang Chủ</a></li>
                            <li class="<?php if ($page_title == "Sản Phẩm" || $page_title == "Sản Phẩm Chi Tiết") echo 'active'  ?>"><a href="<?= _WEB_ROOT ?>/san-pham">Cửa Hàng</a></li>
                            <li class="<?php if ($page_title == "Bài Viết" || $page_title == "Bài Viết Chi Tiết")  echo 'active'  ?>"><a href="<?= _WEB_ROOT ?>/bai-viet">Bài Viết</a></li>
                            <li class="<?php if ($page_title == "Liên Hệ") echo 'active' ?>"><a href="<?= _WEB_ROOT ?>/lienhe">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul id="cart">
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> -->
                            <li><a href="<?=_WEB_ROOT?>/viewcart"><i class="fa-solid fa-cart-shopping" style="color: black;"></i> <span><?php if (isset($_SESSION['mycart'])) echo count($_SESSION['mycart']); ?></span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars" style="color: white;"></i>
                            <span>Danh Mục </span>
                        </div>
                        <ul>
                            <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                // $linkdm="index.php?act=sanpham&iddm=".$id;
                            ?>
                                <li><a href="<?= _WEB_ROOT ?>/danh-muc/<?= $id ?>"><?= $namelistpro ?></a></li>
                            <?php }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero__search">
                                <div class="hero__search__form">
                                    <!-- <form id="form-group"> -->
                                    <input type="text" style="width: 100%;height: 100%;" name="keywords" id="keywords" class="keywords form-control" placeholder="Sản phẩm bạn muốn tìm?">
                                    <!-- <button type="submit" name="tk" class="site-btn">Tìm kiếm</button> -->
                                    <!-- </form> -->
                                </div>
                                <div class="hero__search__phone">
                                    <div class="hero__search__phone__icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="hero__search__phone__text">
                                        <h5><?= $phone ?></h5>
                                        <span>Phục vụ 24/7</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-8" style="position: absolute; z-index:99999;">
                    <ul class="list-group" id="kq">

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="breadcrumb-section set-bg" data-setbg="<?= _WEB_ROOT ?>/public/assets/clients/img/banner/banner3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?= $page_title ?></h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span><?= $page_title ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#keywords').keyup(function() {
                $.ajax({
                    type: 'POST',
                    url: '<?= _WEB_ROOT ?>/tk',
                    data: {
                        keywords: $('#keywords').val()
                    },
                    success: function(data) {
                        $('#kq').html(data);
                    }
                });
            });
        });
    </script>