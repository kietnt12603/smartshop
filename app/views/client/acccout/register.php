<?php
ob_start();
if (isset($_SESSION['user'])) {
    $response = new Response();
    $response->redirect('home');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/assets/admin/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>



</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="index2.html" class="h1"><b>Smart</b>Shop</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?=_WEB_ROOT?>/dangky/dk" onsubmit="return kiemtra();">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" required name="username" onblur="checkusername()" onkeyup="checkusername()" id="username" placeholder="Tài Khoản">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <p style="color: red;" id="errorUserName"></p>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" required name="password" onblur="checkpass()" onkeyup="checkpass()" id="password" placeholder="Mật Khẩu">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <p style="color: red;" id="errorPass"></p>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" required name="repassword" onblur="checkrepass()" onkeyup="checkrepass()" id="repassword" placeholder="Nhập Lại MK">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <p style="color: red;" id="errorRepass"></p>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" required name="name" onblur="checkname()" onkeyup="checkname()" id="name" placeholder="Họ Và Tên">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <p style="color: red;" id="errorName"></p>
                </div>
                <div>
                    <p style="color: red;" id="errorPass"><?php echo Session::flash('msg') ?></p>
                    <!--                    --><?php //unset($_SESSION['loi']) 
                                                ?>
                    <!-- <p style="color: red;" id="error"></p> -->
                </div>
                <!-- <input class="btn btn-success btn-lg btn-block" name="login" type="submit" value="Đăng Nhập"> -->
                <input class="btn btn-success btn-lg btn-block" name="signup" type="submit" value="Đăng Ký">
                <!-- <button type="submit" class="btn btn-success btn-lg btn-block dangky">Đăng Ký</button> -->
                </form>
                <div class="mt-2">
                    <a href="<?= _WEB_ROOT ?>/login" class="btn btn-primary btn-lg btn-block">Đăng Nhập</a>
                </div>
                <!-- /.social-auth-links -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    <script>

        function checkusername() {
            var name = document.getElementById('username').value;
            var errorName = document.getElementById('errorUserName');

            if (name == '' || name == null) {
                errorName.innerHTML = "Username không được để trống";
            } else {
                errorName.innerHTML = "";
                return name;
            }

        }

        function checkpass() {
            var password = document.getElementById('password').value;
            var errorPass = document.getElementById('errorPass');

            if (password == '' || password == null) {
                errorPass.innerHTML = "Password không được để trống";
            } else {
                errorPass.innerHTML = "";
                return password;
            }

        }

        function checkrepass(){
            var password = document.getElementById('password').value;
            var repassword = document.getElementById('repassword').value;
            var errorPass = document.getElementById('errorRepass');

            if (repassword == '' || repassword == null) {
                errorPass.innerHTML = "Password không được để trống";
            } else if(password != repassword){
                errorPass.innerHTML="Nhập Lại Repass không đúng"
            }else{
                errorPass.innerHTML = "";
                return repassword;
            }
        }

        function checkname() {
            var name = document.getElementById('name').value;
            var errorName = document.getElementById('errorName');

            if (name == '' || name == null) {
                errorName.innerHTML = "Name không được để trống";
            } else {
                errorName.innerHTML = "";
                return name;
            }

        }


        function kiemtra() {
            if (checkusername() && checkpass() && checkrepass() &&checkname()) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <!-- jQuery -->
    <script src="<?= _WEB_ROOT ?>/public/assets/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= _WEB_ROOT ?>/public/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= _WEB_ROOT ?>/public/assets/admin/dist/js/adminlte.min.js"></script>
</body>

</html>