<?php
    extract($data);
    if(isset($thongtinchung1)){
        extract($thongtinchung1);
    }

    if(isset($_SESSION['user'])){
        $thongtin=$_SESSION['user'];
    }

?>

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                <i class="fa-solid fa-phone" style="font-size: 40px;color:#7fad39"></i>
                    <h4>SĐT</h4>
                    <p><?php echo $phone ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <!-- <span class="icon_pin_alt"></span> -->
                    <i class="fa-solid fa-location-dot" style="font-size: 40px;color:#7fad39"></i>
                    <h4>Địa Chỉ</h4>
                    <p><?= $address ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <!-- <span class="icon_clock_alt"></span> -->
                    <i class="fa-solid fa-clock" style="font-size: 40px;color:#7fad39"></i>
                    <h4>Thời Gian Mở Cửa</h4>
                    <p><?= $opening_times ?> đến <?= $closing_time ?> </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <!-- <span class="icon_mail_alt"></span> -->
                    <i class="fa-solid fa-envelope" style="font-size: 40px;color:#7fad39"></i>
                    <h4>Email</h4>
                    <p><?= $email ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Begin -->
<div class="map">
    <?= $map ?>
    <!-- <div class="map-inside">
        <i class="fa-solid fa-location-dot" style="font-size: 40px;color:#7fad39"></i>
        <div class="inside-widget">
            <h4>SmartShop</h4>
            <ul>
                <li>SĐT: <?= $phone ?></li>
                <li>Địa Chỉ: <?= $email ?></li>
            </ul>
        </div>
    </div> -->
</div>
<!-- Map End -->

<!-- Contact Form Begin -->
<div class="contact-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form__title">
                    <h2>Góp Ý</h2>
                </div>
            </div>
        </div>
        <form id="lienhe" method="POST">
            <!-- <?php if(isset($thanhcong)) echo $thanhcong; ?> -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <input type="text" name="name" id="name" required placeholder="Nhập Tên Của Bạn" value="<?php if(isset($thongtin['name'])&&($thongtin['name']!="")) echo $thongtin['name'];?>">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="email" name="email" id="email" required placeholder="Nhập Email Của Bạn" value="<?php if(isset($thongtin['name'])&&($thongtin['email']!="")) echo $thongtin['email'];?>" >
                </div>
                <div class="col-lg-12 text-center">
                    <textarea placeholder="Nhập Nội Dung" required name="content" id="content" onkeyup="checkcontent();"></textarea>
                    <!-- <input type="submit" class="btn btn-success" name="guiphanhoi" style="color: white; width: 100px" value="Gửi"> -->
                    <button type="submit" class="btn btn-success">Gửi</button>
<!--                    <button type="submit" class="site-btn">SEND MESSAGE</button>-->
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact Form End -->

<script>

    function checkcontent(){
        var content = document.getElementById('content').value;
        console.log(content);
    }

    $(document).on('submit', '#lienhe', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        formData.append("lien_he", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/lienhe/lh",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 422) {
                    $('#errorMessage').removeClass('d-none');
                    $('#errorMessage').text(res.message);

                } else if (res.status == 113) {
                    $('#errorMessage').removeClass('d-none');
                    $('#errorMessage').text(res.message);
                } else if (res.status == 200) {

                    // $('#errorMessage').addClass('d-none');
                    // $('#categoryAddModal').modal('hide');
                    $('#lienhe')[0].reset();

                    // alertify.set('notifier', 'position', 'top-center');
                    // alertify.success(res.message);

                    Swal.fire(
                        "Good job!",
                        res.message,
                        "success"
                    )

                    // $('#myTable').load(location.href + " #myTable");

                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });
</script>