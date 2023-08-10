<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12" style="width:100%;text-align:center;font-size:30px;padding:30px 0">
                    Đơn hàng đã đặt của bạn
                </div>
                <div class="shoping__cart__table">
                    <table class="" id="myTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Giá trị đơn hàng</th>
                                <th>Trạng thái</th>
                                <th>Ngày đặt</th>
                                <th>Xem chi tiết đơn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($listBill1 as $bill) {
                                extract($bill);
                            ?>
                                <tr>


                                    <td>
                                        <?= $i++ ?>
                                    </td>

                                    <td>
                                        <?= currency_format($total) ?>
                                    </td>
                                    <td>
                                        <?php if ($status == 0) {
                                            echo 'Chưa Xử Lý';
                                        } elseif ($status == 1) {
                                            echo 'Đã Xử Lý';
                                        } elseif ($status == 2) {
                                            echo 'Đang Giao Hàng';
                                        } elseif ($status == 3) {
                                            echo 'Đã Hoàn Thành';
                                        }elseif ($status == 4) {
                                            echo 'Đã Thanh Toán'; 
                                        }elseif($status == 5) {
                                            echo 'Huỷ';
                                        } ?>
                                    </td>
                                    <td>
                                        <?= $pay_date ?>
                                    </td>
                                    <td>
                                       <a class="btn btn-info" href="<?=_WEB_ROOT?>/billDetail/<?=$id?>"> <i class="fa fa-eye"></i></a>
                                       <?php 
                                            if ($status!=5 && $status!=4 && $status!=3 &&$status!=2) {
                                        ?>
                                       <button type="button" value="<?= $id ?>" class="deleteCartBtn btn btn-danger"><i class="fa fa-trash"></i></button>
                                       <?php } ?>
                                    </td>

                                </tr>
                            <?php    }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    url: "<?= _WEB_ROOT ?>/huyhoadon",
                    data: {
                        'delete_cart': true,
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