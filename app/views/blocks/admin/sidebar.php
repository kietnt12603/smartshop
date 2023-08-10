<?php
$info = $this->db->table('user')->where('id', '=', $_SESSION['useradmin']['id'])->first();
?>
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?php echo _WEB_ROOT ?>/public/uploads/<?= $info['image'] ?>" class="img-circle elevation-2" alt="No Image">
        </div>
        <div class="info">
            <h5>
                <a href="<?= _WEB_ROOT ?>/admin/profile/<?= $_SESSION['useradmin']['id'] ?>" class="d-block"><?= $info['name']; ?></a>
            </h5>
            <!-- <a href="#"> Đổi Mật Khẩu </a> -->
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item ">
                <a href="<?php echo _WEB_ROOT ?>/admin/dashboard" class="nav-link ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Bảng Điều Kiển
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?php echo _WEB_ROOT ?>/admin/category" class="nav-link ">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Danh Mục
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?php echo _WEB_ROOT ?>/admin/product" class="nav-link ">
                    <i class="nav-icon fas fa-mobile"></i>
                    <p>
                        Sản Phẩm
                    </p>
                </a>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <!-- <i class="fa-solid "></i> -->
                    <p>
                        Tài Khoản
                        <i class="fas fa-angle-left right"></i>
                        <!-- <span class="badge badge-info right">6</span> -->
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= _WEB_ROOT ?>/admin/customer/" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Khách Hàng</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= _WEB_ROOT ?>/admin/user" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Nhân Viên</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item ">
                <a href="<?php echo _WEB_ROOT ?>/admin/categoryblog" class="nav-link ">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Danh Mục Bài Viết
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?= _WEB_ROOT ?>/admin/blog" class="nav-link">
                    <i class="nav-icon fas fa-blog"></i>
                    <p>
                        Bài Viết
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?= _WEB_ROOT ?>/admin/cart" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Hoá Đơn
                    </p>
                </a>
            </li>

            <!--            <li class="nav-item ">-->
            <!--                <a href="index.php?act=dsbl" class="nav-link ">-->
            <!--                    <i class="nav-icon fas fa-comment"></i>-->
            <!--                    <p>-->
            <!--                        Bình Luận-->
            <!--                    </p>-->
            <!--                </a>-->
            <!--            </li>-->

            <!--            <li class="nav-item">-->
            <!--                <a href="#" class="nav-link">-->
            <!--                    <i class="nav-icon fas fa-list"></i>-->
            <!--                    <p>-->
            <!--                        Đơn Hàng-->
            <!--                        <i class="fas fa-angle-left right"></i>-->
            <!--                        <!-- <span class="badge badge-info right">6</span> -->-->
            <!--                    </p>-->
            <!--                </a>-->
            <!--                <ul class="nav nav-treeview">-->
            <!--                    <li class="nav-item">-->
            <!--                        <a href="index.php?act=dshd" class="nav-link">-->
            <!--                            <i class="far fa-circle nav-icon"></i>-->
            <!--                            <p>Danh Sách Hoá Đơn</p>-->
            <!--                        </a>-->
            <!--                    </li>-->
            <!--                    <li class="nav-item">-->
            <!--                        <a href="index.php?act=addhd" class="nav-link">-->
            <!--                            <i class="far fa-circle nav-icon"></i>-->
            <!--                            <p>Thêm Hoá Đơn</p>-->
            <!--                        </a>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--            </li>-->
            <!--            <li class="nav-item ">-->
            <!--                <a href="index.php?act=thongtinchung" class="nav-link ">-->
            <!--                    <i class="nav-icon fas fa-address-book"></i>-->
            <!--                    <p>-->
            <!--                        Thông Tin Liên Hệ-->
            <!--                    </p>-->
            <!--                </a>-->
            <!--            </li>-->
            <!--            <li class="nav-item ">-->
            <!--                <a href="index.php?act=phanhoi" class="nav-link ">-->
            <!--                    <i class="nav-icon fas fa-comment"></i>-->
            <!--                    <p>-->
            <!--                        Khách Hàng Phản Hồi-->
            <!--                    </p>-->
            <!--                </a>-->
            <!--            </li>-->

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->