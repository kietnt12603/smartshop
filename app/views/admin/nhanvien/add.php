<?php
extract($data);
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

                <!-- <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div> -->
            </div>
            <div class="card-body">
                <form method="POST" action="<?= _WEB_ROOT ?>/admin/user/insert_user" onclick="return kiemtra();">
                    <div class="form-group">
                        <label for="">Tài Khoản</label>
                        <input type="text" name="user" id="user" onkeyup="checkuser();" onblur="checkuser();" class="form-control" required>
                        <span style="color: red;" id="errorsuser"><?php if (isset($errors['user']['tontai'])) {
                                                                        echo $errors['user']['tontai'];
                                                                    }
                                                                    ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="pass" id="pass" onkeyup="checkpass();" onblur="checkpass();" class="form-control" required>
                        <span style="color: red;" id="errorspass"></span>
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="email" name="email" id="email" onkeyup="checkEmail();" onblur="checkEmail();" class="form-control" required>
                        <span style="color: red;" id="errorsemail"><?php if (isset($errors['email']['tontai'])) {
                                                                        echo $errors['email']['tontai'];
                                                                    }
                                                                    ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Họ Tên</label>
                        <input type="text" name="name" id="name" onkeyup="checkname();" onblur="checkname();" class="form-control" required>
                        <span style="color: red;" id="errorsname"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Địa Chỉ</label>
                        <input type="text" name="address" id="address" onkeyup="checkaddress();" onblur="checkaddress();" class="form-control" required>
                        <span style="color: red;" id="errorsaddress"></span>
                    </div>
                    <div class="form-group">
                        <label for="">SĐT</label>
                        <input type="tel" name="tel" id="phone" onkeyup="checkPhone();" onblur="checkPhone();" class="form-control" required>
                        <span style="color: red;" id="errorsphone"></span>
                    </div>
                    <div class="form-group">
                        <Label>Quyền Hạng</Label>
                        <input type="radio" name="role" id="" value="1" checked> Nhân Viên
                        <input type="radio" name="role" id="" value="2"> Admin
                    </div>

                    <div class="form-group">
                        <Label>Trạng Thái</Label>
                        <input type="radio" name="active" id="" value="1" checked> Kích Hoạt
                        <input type="radio" name="active" id="" value="0"> Khóa
                    </div>

                    <input type="submit" name="themmoi1" value="Thêm Mới" class="btn btn-success">
                    <input type="reset" value="Nhập Lại" class="btn btn-primary">
                    <a href="<?= _WEB_ROOT ?>/admin/user" class="btn btn-danger"> Quay Lại</a>
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
    function checkuser() {
        var user = document.getElementById('user').value;
        var errorsuser = document.getElementById('errorsuser');

        if (user == '' || user == null) {
            errorsuser.innerHTML = "User Không Được Để Trống";
        } else {
            errorsuser.innerHTML = "";
            return user;
        }

    }

    function checkpass() {
        var pass = document.getElementById('pass').value;
        var errorspass = document.getElementById('errorspass');

        if (pass == '' || pass == null) {
            errorspass.innerHTML = "Mật Khẩu Không Được Để Trống";
        } else {
            errorspass.innerHTML = "";
            return pass;
        }

    }

    function checkEmail() {
        var email = document.getElementById('email').value;
        var errorsemail = document.getElementById('errorsemail');
        var reGexEmail = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;

        if (email == '' || email == null) {
            errorsemail.innerHTML = "Email không được để trống!";
        } else if (!reGexEmail.test(email)) {
            errorsemail.innerHTML = "Email không hợp lệ!";
        } else {
            errorsemail.innerHTML = "";
            return email;
        }
    }

    function checkname() {
        var name = document.getElementById('name').value;
        var errorsname = document.getElementById('errorsname');

        if (name == '' || name == null) {
            errorsname.innerHTML = "Tên Khách Hàng Không Được Để Trống";
        } else {
            errorsname.innerHTML = "";
            return name;
        }

    }

    function checkaddress() {
        var address = document.getElementById('address').value;
        var errorsaddress = document.getElementById('errorsaddress');

        if (address == '' || address == null) {
            errorsaddress.innerHTML = "Địa Chỉ Không Được Để Trống";
        } else {
            errorsaddress.innerHTML = "";
            return address;
        }

    }

    function checkPhone() {
        var phone = document.getElementById('phone').value;
        var errorsphone = document.getElementById('errorsphone');
        var regexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

        if (phone == '' || phone == null) {
            errorsphone.innerHTML = "Số điện thoại không được để trống!";
        } else if (!regexPhone.test(phone)) {
            errorsphone.innerHTML = "SĐT không hợp lệ!";
            return false;
        } else {
            errorsphone.innerHTML = '';
            return phone;
        }
    }

    function kiemtra() {
        if (checkuser() && checkpass() && checkEmail() && checkname() && checkaddress() && checkPhone()) {
            return true;
        } else {
            return false;
        }
    }
</script>