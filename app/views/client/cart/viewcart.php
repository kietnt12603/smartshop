<?php
extract($data);
$tong = 0;
foreach ($_SESSION['mycart'] as $cart) {
    $tt = $cart['price'] * $cart['quanlity'];
    $tong += $tt;
}

$tongdon = $tong +20000

?>
<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th class="shoping__product">Sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tong = 0;
                            $i = 0;
                            if (!empty($_SESSION['mycart'])) {
                                foreach ($_SESSION['mycart'] as $cart) {
                                    // $hinh = $img_path . $cart['img'];
                                    $ttien = $cart['price'] * $cart['quanlity'];
                                    $tong += $ttien;
                            ?>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img style="width:100px;heigth:100px" src="<?= _WEB_ROOT ?>/public/uploads/<?= $cart['img'] ?>" alt="">
                                            <h5><?= $cart['name'] ?></h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            <?= currency_format($cart['price']) ?>
                                        </td>

                                        <td>
                                            <!-- <a href="index.php?act=updatecart&id=<?= $cart['id'] ?>&type=decre" class="btn btn-success">-</a> -->
                                            <button type="button" value="<?= $cart['id'] ?>" class="decre btn btn-success">-</button>
                                            <!-- <input type="number" value="<?= $cart['quanlity'] ?>"> -->
                                            <span style="padding: 10px;"><?= $cart['quanlity'] ?></span>
                                            <button type="button" value="<?= $cart['id'] ?>" class="incre btn btn-success">+</button>
                                        </td>

                                        <td class="shoping__cart__total">
                                            <?= currency_format($ttien) ?>
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <button type="button" value="<?= $i ?>" class="delcart btn btn-success"><i class="fa-solid fa-xmark"></i></button>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                            <?php
                                }
                            }
                            ?>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="<?= _WEB_ROOT ?>/home" class="primary-btn cart-btn">Tiếp tục mua hàng</a>
                    <!-- <a name="update_amount" href="index.php?act=update_amount" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Cập nhập giỏ hàng</a> -->
                </div>
            </div>
        </div>
        <!-- <form id="order"> -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__continue ">
                        <div class="shoping__discount">
                            <?php
                            if (isset($_SESSION['user'])) {
                                $name = $_SESSION['user']['name'];
                                $tel = $_SESSION['user']['tel'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                            } else {
                                $name =  "";
                                $tel = "";
                                $address =  "";
                                $email =  "";
                            }

                            ?>
                            <h5>Thông tin người nhận</h5>
                            <div class="form-group">
                                <input style="width:70%;height:40px;padding:0 15px;" name="name" id="name" onblur="checkname();" value="<?= $name ?>" type="text" placeholder="Họ và tên">
                                <p style="color: red" id="errorname"></p>
                            </div>
                            <div class="form-group">
                                <input style="width:70%;height:40px;padding:0 15px;" name="tel" id="tel" onblur="checktel();" value="<?= $tel ?>" type="text" placeholder="Số điện thoại">
                                <p style="color: red" id="errortel"></p>
                            </div>
                            <div class="form-group">
                                <input style="width:70%;height:40px;padding:0 15px;" name="email" id="email" onblur="checkemail()" value="<?= $email ?>" type="text" placeholder="Email">
                                <p style="color: red" id="erroremail"></p>
                            </div>
                            <div class="form-group">
                                <input style="width:70%;height:40px;padding:0 15px;" name="address" id="address" onblur="checkaddress();" value="<?= $address ?>" type="text" placeholder="Địa chỉ">
                                <p style="color: red" id="erroraddress"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <div class="shoping__continue">
                            <div class="shoping__discount">
                                <h5>Chọn hình thức thanh toán</h5>
                                <div class="panel-body">
                                    <input type="radio" name="pttt" id="pttt1" value="Trả tiền khi nhận hàng" checked> Trả Tiền Khi Nhận Hàng <br>
                                    <!-- <input type="radio" name="pttt" id="pttt2" value="Thanh toán VNPAY"> Thanh toán VNPAY -->
                                </div>
                            </div>
                        </div>
                        <br>
                        <h5>Tổng tiền đơn hàng</h5>

                        <ul id="price">
                            <li>Tạm tính <span><?= currency_format($tong) ?></span></li>
                            <li>Phí vận chuyển <span><?php
                                                        if (isset($_SESSION['mycart']) && (count($_SESSION['mycart'])) > 0) {
                                                            echo currency_format(20000);
                                                        } else {
                                                            echo currency_format(0);
                                                        } ?>
                                </span></li>
                            <li>Tổng tiền <span><?php
                                                if (isset($_SESSION['mycart']) && (count($_SESSION['mycart'])) > 0) {
                                                    echo currency_format($tongdon);
                                                } else {
                                                    echo currency_format(0);
                                                } ?></span>
                                            <input type="hidden" value="<?=$tongdon?>" id="tongdon">    
                                            </li>
                        </ul>
                        <button type="button" name="redirect" class="order primary-btn">Thanh toán giỏ hàng</button>
                    </div>
                </div>
            </div>
    </div>
    <!-- </form> -->

</section>

<script>
    function checkname() {
        var name = document.getElementById('name').value;
        var errorname = document.getElementById('errorname');

        if (name == '' || name == null) {
            errorname.innerHTML = "Tên Không Được Để Trống";
        } else {
            errorname.innerHTML = "";
            return name;
        }

    }

    function checktel() {
        var tel = document.getElementById('tel').value;
        var errortel = document.getElementById('errortel');

        if (tel == '' || tel == null) {
            errortel.innerHTML = "SĐT Không Được Để Trống";
        } else {
            errortel.innerHTML = "";
            return tel;
        }

    }

    function checkemail() {
        var email = document.getElementById('email').value;
        var erroremail = document.getElementById('erroremail');

        if (email == '' || email == null) {
            erroremail.innerHTML = "Email Không Được Để Trống";
        } else {
            erroremail.innerHTML = "";
            return email;
        }

    }

    function checkaddress() {
        var address = document.getElementById('address').value;
        var erroraddress = document.getElementById('erroraddress');

        if (address == '' || address == null) {
            erroraddress.innerHTML = "Địa Chỉ Không Được Để Trống";
        } else {
            erroraddress.innerHTML = "";
            return address;
        }

    }

    function kiemtra() {
        if (checkname() && checktel() && checkemail() && checkaddress()) {
            return true;
        } else {
            return false;
        }
    }

    $(document).on('click', '.order', function(){
        // e.preventDefault();
        // var pttt = document.getElementsByName('pttt').values;
        var pttt = $('input[type="radio"][name="pttt"]:checked').val();
        var name = $('#name').val();
        var address = $('#address').val();
        var tel = $('#tel').val()
        var email = $('#email').val()
        var tongdon = $('#tongdon').val();
        // alert(pttt+" "+name+" "+address+" "+tel+" "+email+" "+tongdon);
        $.ajax({
            url:'<?=_WEB_ROOT?>/addOrder',
            type:'POST',
            data:{
                'pttt':pttt,
                'name':name,
                'address':address,
                'tel':tel,
                'email':email,
                'tongdon':tongdon
            },success:function(){
                Swal.fire(
                    "Good job!",
                    "Đặt Hàng Thành Công",
                    "success"
                );
                $('#price').load(location.href + " #price");
                $('#myTable').load(location.href + " #myTable");
            }     
        });
        
    });

    $(document).on('click', '.delcart', function(e) {
        e.preventDefault();
        var id = $(this).val();
        $.ajax({
            url: '<?= _WEB_ROOT ?>/delcart',
            type: 'POST',
            data: {
                'idcart': id,
                'delcart': true
            },
            success: function(data) {
                Swal.fire(
                    "Good job!",
                    "Xoá Khỏi Giỏ Hàng Thành Công",
                    "success"
                );



                $('#price').load(location.href + " #price");
                $('#myTable').load(location.href + " #myTable");
            }

        });
    });

    $(document).on('click', '.decre', function(e) {
        e.preventDefault();
        var id = $(this).val();
        var decre = 'decre';
        $.ajax({
            url: '<?= _WEB_ROOT ?>/updatecart',
            type: 'POST',
            data: {
                'id': id,
                'updatecart': true,
                'type1': decre
            },
            success: function(data) {
                // Swal.fire(
                //         "Good job!",
                //         "Cập Nhật Thành Công Thành Công",
                //         "success"
                //     );
                alertify.set('notifier', 'position', 'top-right');
                alertify.success('Cập Nhật Thành Công');
                $('#price').load(location.href + " #price");
                $('#myTable').load(location.href + " #myTable");
            }

        });
    });

    $(document).on('click', '.incre', function(e) {
        e.preventDefault();
        var id = $(this).val();
        var incre = 'incre';
        $.ajax({
            url: '<?= _WEB_ROOT ?>/updatecart',
            type: 'POST',
            data: {
                'id': id,
                'updatecart': true,
                'type1': incre
            },
            success: function(data) {
                // Swal.fire(
                //         "Good job!",
                //         "Cập Nhật Thành Công Thành Công",
                //         "success"
                //     );
                alertify.set('notifier', 'position', 'top-right');
                alertify.success('Cập Nhật Thành Công');
                $('#price').load(location.href + " #price");
                $('#myTable').load(location.href + " #myTable");
            }

        });
    });
</script>