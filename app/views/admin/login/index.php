<?php
ob_start();
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
    <link rel="stylesheet" href="<?=_WEB_ROOT?>/public/assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=_WEB_ROOT?>/public/assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=_WEB_ROOT?>/public/assets/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="index2.html" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
            <form action="<?=_WEB_ROOT?>/admin/login/login" method="post" onclick="return kiemtra();">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" id="username" onkeyup="checkusername();" placeholder="Tài Khoản là(admin)">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <p style="color: red;" id="errorName"></p>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="password" onkeyup="checkpass();" placeholder="Mật Khẩu là (12345)">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <p style="color: red;" id="errorPass"><?php echo Session::flash('msg') ?></p>
<!--                    --><?php //unset($_SESSION['loi']) ?>
                    <!-- <p style="color: red;" id="error"></p> -->
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
                        <input class="btn btn-primary btn-lg btn-block" name="login" type="submit" value="Đăng Nhập">
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<script>
    function checkusername(){
        var name = document.getElementById('username').value;
        var errorName = document.getElementById('errorName');

        if(name==''||name==null){
            errorName.innerHTML="Username không được để trống";
        }else{
            errorName.innerHTML="";
            return name;
        }

    }
    function checkpass(){
        var password = document.getElementById('password').value;
        var errorPass = document.getElementById('errorPass');

        if(password==''||password==null){
            errorPass.innerHTML="Password không được để trống";
        }else{
            errorPass.innerHTML="";
            return password;
        }

    }

    function kiemtra(){
        if(checkusername() && checkpass()){
            return true;
        }else{
            return false;
        }
    }

</script>


<!-- jQuery -->
<script src="<?=_WEB_ROOT?>/public/assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=_WEB_ROOT?>/public/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=_WEB_ROOT?>/public/assets/admin/dist/js/adminlte.min.js"></script>
</body>
</html>
