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
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Danh Sách Sản Phẩm</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Mã Hóa Đơn</th>
                                        <th>Khách Hàng</th>
                                        <th>Giá Trị Đơn Hàng</th>
                                        <th>Tình Trạng Đơn Hàng</th>
                                        <th>Ngày Đặt Hàng</th>
                                        <td>Hành Động</td>
                                        <!-- <th><a class="btn btn-success" href="index.php?act=addsp">Thêm Sản Phẩm</a></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($list_order as $order) {
                                        extract($order);
                                        // $suasp = "index.php?act=suahd&id=" . $id;
                                        // $xoasp = "index.php?act=xoahd&id=" . $id;
                                        $tong = currency_format($total);
                                    ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td> <?= $name_cus ?>(<?= $id_cus ?>)</td>
                                            <td><?= $tong ?></td>
                                            <td><?php if ($status == 0) {
                                                    echo 'Chưa Xử Lý';
                                                } elseif ($status == 1) {
                                                    echo 'Đã Xử Lý';
                                                } elseif ($status == 2) {
                                                    echo 'Đang Giao Hàng';
                                                } elseif ($status == 3) {
                                                    echo 'Đã Hoàn Thành';
                                                } elseif ($status == 4) {
                                                    echo 'Đã Thanh Toán';
                                                } else {
                                                    echo 'Huỷ';
                                                } ?></td>
                                            <td><?= $pay_date ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= _WEB_ROOT ?>/admin/cart/update/<?= $id ?>">Sửa</a>
                                                <button type="button" value="<?= $id ?>" class="deleteCartBtn btn btn-danger">Xoá</button>
                                            </td>
                                        </tr>
                                    <?php      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
<script>
    $(document).on('click', '.deleteCartBtn', function(e) {
        e.preventDefault();
        Swal.fire({
            icon: 'warning',
            title: 'Bạn có chắc chắn muốn xóa dữ liệu này Không?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                var cart_id = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "<?= _WEB_ROOT ?>/admin/cart/xoa",
                    data: {
                        'delete_category': true,
                        'cart_id': cart_id
                    },
                    success: function(response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {

                            alert(res.message);
                        } else {
                            Swal.fire(
                                "Deleted!",
                                res.message,
                                "success"
                            )
                            $('#keywords').val("");
                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });

            } else if (result.isDenied) {
                Swal.fire(
                    "Cancelled",
                    "Your imaginary file is safe :)",
                    "error"
                )
            } else {
                Swal.fire(
                    "Cancelled",
                    "Your imaginary file is safe :)",
                    "error"
                )
            }
        });
    });
</script>