<?php
extract($data);
if (is_array($user_one)) {
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
                <form id="updateProfile">
                    <div class='row'>
                        <div class='col-8'>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Tài Khoản</label>
                                        <input type="text" name="user" id="" class="form-control" value="<?php echo $user; ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">email</label>
                                        <input type="email" name="email" id="" class="form-control" value="<?php echo $email; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Họ Tên</label>
                                        <input type="text" name="name" id="" class="form-control" value="<?php echo $name; ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Địa Chỉ</label>
                                        <input type="text" name="address" id="" class="form-control" value="<?php echo $address; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">SĐT</label>
                                        <input type="tel" name="tel" id="" class="form-control" value="<?php echo $phone; ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class='form-group'>
                                        <label for="">SĐT</label>
                                        <input type="file" name="hinh" id="hinh" class='form-control'>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p>Chức Vụ: <?php echo ($role == 1) ? 'Nhân Viên' : 'Admin' ?> </p>

                            </div>
                        </div>
                        <div class='col-4 mb-2'>
                            <img src="<?= _WEB_ROOT ?>/public/uploads/<?= $image; ?>" width="400px" height="290px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" name="update" value="Cập Nhật" class="btn btn-success">
                            <a href="<?= _WEB_ROOT ?>/admin" class="btn btn-danger"> Quay Lại</a>
                            <a href="<?= _WEB_ROOT ?>/admin/profile/changepass/<?= $_SESSION['useradmin']['id'] ?>" class="btn btn-info">Đổi Mật Khẩu</a>
                        </div>
                    </div>
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
    $(document).on('submit', '#updateProfile', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("update_Profile", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/profile/updatepro",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 422) {
                    $('#errorMessageUpdate').removeClass('d-none');
                    $('#errorMessageUpdate').text(res.message);

                } else if (res.status == 200) {
                    $('#errorMessageUpdate').addClass('d-none');

                    // $('#userEditModal').modal('hide');
                    Swal.fire(
                        "Good job!",
                        res.message,
                        "success"
                    );
                    // location.reload();
                    // $('#updateProfile')[0].reset();
                    $('#updateProfile').load(location.href + " #updateProfile");

                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });
</script>