<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12" style="width:100%;text-align:center;font-size:30px;padding:30px 0">
                    Đơn hàng chi tiết
                </div>
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($listBill as $bill) {
                                extract($bill);
                                // $hinh = $img_path . $img
                            ?>
                                <tr>


                                    <td>
                                        <?= $i++ ?>
                                    </td>

                                    <td>
                                        <?= $name ?>
                                    </td>
                                    <td>
                                        <img style="width:150px" src="<?= _WEB_ROOT ?>/public/uploads/<?= $img ?>" alt="">

                                    </td>
                                    <td>
                                        <?= $quanlity ?>
                                    </td>
                                    <td>
                                        <?= currency_format($price * $quanlity) ?>
                                    </td>
                                </tr>
                            <?php    }
                            ?>
                        </tbody>
                    </table>
                    <div class="text-center mt-3">
                        <a href="<?=_WEB_ROOT?>/checkmybill/<?=$_SESSION['user']['id']?>" class="btn btn-info">Quay Lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>