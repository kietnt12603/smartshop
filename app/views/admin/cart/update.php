<?php 
    extract($data);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Thông Tin Khách Hàng</h3>
            </div>
            <div class="card-body">
                <?php
                if (is_array($order)) {
                    extract($order);
                }
                ?>
                <p>Tên Khách Hàng: <?php echo $name_cus ?></p>
                <p>Số Điện Thoại : <?= $phone_cus ?></p>
                <p>Địa Chỉ : <?= $address_cus ?></p>
                <p>Email : <?= $email_cus ?></p>
                <p>Trạng Thái: <?php if ($status == 0) {
                                    echo 'Chưa Xử Lý';
                                } elseif ($status == 1) {
                                    echo 'Đã Xử Lý';
                                } elseif ($status == 2) {
                                    echo 'Đang Giao Hàng';
                                } elseif ($status == 3) {
                                    echo 'Đã Hoàn Thành';
                                } else {
                                    echo 'Huỷ';
                                } ?></p>
                <form method="POST" action="<?=_WEB_ROOT?>/admin/cart/update_cart/<?= $id_order ?>">
                    <label for="Status">Cập Nhật Trạng Thái:</label>
                    <select name="status" class="form-control" required="required">
                        <option value="0" <?php if ($status == 0) echo 'selected' ?>>Chưa Xử Lý</option>
                        <option value="1" <?php if ($status == 1) echo 'selected' ?>>Đã Xử Lý</option>
                        <option value="2" <?php if ($status == 2) echo 'selected' ?>>Đang Giao Hàng</option>
                        <option value="3" <?php if ($status == 3) echo 'selected' ?>>Đã Hoàn Thành</option>
                        <option value="4" <?php if ($status == 4) echo 'selected' ?>>Đã Thanh Toán</option>
                        <option value="5" <?php if ($status == 5) echo 'selected' ?>>Huỷ</option>
                    </select>
                    <input type="hidden" name="id" value="<?= $id_order ?>">
                    <input type="submit" name="update" class="btn btn-success" value="Cập Nhật">
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Danh Sách Đơn Hàng</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Sản Phẩm</th>
                            <!-- <th>Ảnh</th> -->
                            <th>Số Lượng</th>
                            <th>Giá</th>
                            <td>Thành Tiền</td>
                            <!-- <th><a class="btn btn-success" href="index.php?act=addsp">Thêm Sản Phẩm</a></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sum = 0;
                        foreach ($product as $sp) {
                            extract($sp);
                            $tt = $quanlity * $price;
                            $thanhtien = currency_format($tt);
                            $gia = currency_format($price);
                            $sum += $tt;
                            $tongtien = currency_format($sum);
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td> <?= $sp['name']; ?></td>
                                <td><?= $quanlity ?></td>
                                <td><?= $gia ?></td>
                                <td><?= $thanhtien ?></td>
                            </tr>
                        <?php      }
                        ?>
                    </tbody>
                    <tfoot>
                        <td colspan="5">
                            <h3>Tổng Tiền: <?= $tongtien ?> </h3>
                        </td>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- <div class="card">
  <div class="card-header">
    <h3 class="card-title">Cập Nhật Trạng Thái</h3>
  </div>
  <div class="card-body">
   <form method="POST" action="index.php?act=updatehd">
     <label for="Status">Trạng Thái:</label>
     <select name="status" class="form-control" required="required">
        <option value="0">Chưa Xử Lý</option>
        <option value="1">Đang Xử Lý</option>
        <option value="2">Đang Giao Hàng</option>
        <option value="3">Đã Hoàn Thành</option>
        <option value="4">Huỷ</option>
     </select>
   </form>
</div> -->
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->