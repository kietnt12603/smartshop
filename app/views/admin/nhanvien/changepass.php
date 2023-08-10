<?php
extract($data);
if (isset($user_one)) {
    extract($user_one);
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
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
                <h3 class="card-title"><?= $title ?></h3>
            </div>
            <div class="card-body">
                <form id="changepass" onsubmit="return kiemtra();">
                    <div class="form-group">
                        <label for="">Mật Khẩu Cũ</label>
                        <input type="password" required name="passcu" id="passcu" onkeyup="checkpasscu();" class="form-control">
                        <p style="color: red" id="errorpasscu"><?php if (isset($thatbai)) {
                                                                    echo $thatbai;
                                                                }
                                                                ?></p>
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu Mới</label>
                        <input type="password" required name="passmoi" id="passmoi" onkeyup="checkpassmoi();" class="form-control">
                        <p style="color: red" id="errorpassmoi"></p>
                    </div>

                    <div class="form-group">
                        <label for="">Nhập Lại Mật khẩu Mới</label>
                        <input type="password" required name="repassmoi" id="repassmoi" onkeyup="checkrepassmoi();" class="form-control">
                        <p style="color: red" id="errorrepassmoi"><?php if (isset($thanhcong)) {
                                                                        echo $thanhcong;
                                                                    }
                                                                    ?></p>
                    </div>

                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) {
                                                                echo $id;
                                                            }
                                                            ?>">
                    <input type="submit" name="updatemk" id="submit" value="Đổi Mật Khẩu" class="btn btn-success">
                    <a href="<?= _WEB_ROOT ?>/admin" class="btn btn-danger"> Quay Lại</a>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    function checkpasscu() {
        var passcu = document.getElementById('passcu').value;
        var errorpasscu = document.getElementById('errorpasscu');
        if (passcu == '' || passcu == null) {
            errorpasscu.innerHTML = "Mật khẩu cũ không được để trống";
        } else {
            errorpasscu.innerHTML = "";
            return passcu;
        }
    }

    function checkpassmoi() {
        var passmoi = document.getElementById('passmoi').value;
        var errorpassmoi = document.getElementById('errorpassmoi');
        if (passmoi == '' || passmoi == null) {
            errorpassmoi.innerHTML = "Mật khẩu cũ không được để trống";
        } else {
            errorpassmoi.innerHTML = "";
            return passmoi;
        }
    }

    function checkrepassmoi() {
        var repassmoi = document.getElementById('repassmoi').value;
        var passmoi = document.getElementById('passmoi').value;
        var errorrepassmoi = document.getElementById('errorrepassmoi');
        if (repassmoi == '' || repassmoi == null) {
            errorrepassmoi.innerHTML = "Mật khẩu cũ không được để trống";
        } else if (passmoi != repassmoi) {
            errorrepassmoi.innerHTML = "Nhập Lại Mật Khẩu Không Đúng";
        } else {
            errorrepassmoi.innerHTML = "";
            return repassmoi;
        }
    }

    function kiemtra() {
        if (checkpasscu() && checkpassmoi() && checkrepassmoi()) {
            return true;
        } else {
            return false;
        }
    }

    $(document).on('submit', '#changepass', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        formData.append("change_pass", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/profile/up_changepass",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data == 'true') {
                    Swal.fire(
                        "Good job!",
                        "Đổi Pass Thành Công",
                        "success")
                } else if(data== 'sairepass'){
                    Swal.fire(
                        "error",
                        "Nhập Lại Mật Khẩu Không Đúng :)",
                        "error"
                    )
                }else {
                    Swal.fire(
                        "error",
                        "Mật Khẩu Cũ Không Đúng :)",
                        "error"
                    )
                }
            }
        });

    })
</script>