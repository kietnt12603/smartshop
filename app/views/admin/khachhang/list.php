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
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header" style="height: 62.2px;">
                            <h3 class="card-title"><?= $title ?></h3>

                            <div class="card-tools">
                                <div class="form-group">
                                    <input type="text" name="tukhoa"  placeholder="Nhập Nội Dung Cần Tìm Kiếm" 
 id="keywords" class="form-control" style="width:400px;">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="myTable">
                                <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Tên Đăng Nhập</th>
                                        <!-- <th>Mật Khẩu</th> -->
                                        <th>Email</th>
                                        <th>SĐT</th>
                                        <!-- <th>Địa chỉ</th> -->
                                        <th>Trạng Thái</th>
                                        <th>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#customerAddModal">
                                                Thêm Khách Hàng
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table">
                                    <?php
                                    foreach ($customer_all as $kh) {
                                        extract($kh);
                                    ?>
                                        <tr>
                                            <!-- <td><?php echo $id ?></td> -->
                                            <td><?php echo $user ?></td>
                                            <!-- <td><?php echo $pass ?></td> -->
                                            <td><?php echo $email ?></td>
                                            <td><?php if ($tel == '') {
                                                    echo 'Không có';
                                                } else {
                                                    echo $tel;
                                                }
                                                ?></td>
                                            <!-- <td><?php
                                                        if ($address == '') {
                                                            echo 'Không có';
                                                        } else {
                                                            echo $address;
                                                        }
                                                        ?></td> -->
                                            <td><?php echo ($active == 0) ? 'Khoá' : 'Kích Hoạt' ?></td>
                                            <td>
                                                <button type="button" value="<?= $id ?>" class="editCustomerBtn btn btn-success">Edit</button>
                                                <button type="button" value="<?= $id ?>" class="deleteCustomerBtn btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    <?php }
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

<div class="modal fade" id="customerAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="saveCustomer">
                    <div id="errorMessage" class="d-none alert alert-danger" role="alert">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Tài Khoản</label>
                                <input type="text" name="user" id="user_add" onkeyup="checkuser();" onblur="checkuser();" class="form-control" required>
                                <span style="color: red;" id="errorsuser"><?php if (isset($thatbaiuser)) echo $thatbaiuser; ?></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="pass" id="pass_add" onkeyup="checkpass();" onblur="checkpass();" class="form-control" required>
                                <span style="color: red;" id="errorspass"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">email</label>
                                <input type="email" name="email" id="email_add" onkeyup="checkEmail();" onblur="checkEmail();" class="form-control" required>
                                <span style="color: red;" id="errorsemail"><?php if (isset($thatbaiemail)) echo $thatbaiemail; ?></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Họ Tên</label>
                                <input type="text" name="name" id="name_add" onkeyup="checkname();" onblur="checkname();" class="form-control" required>
                                <span style="color: red;" id="errorsname"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Địa Chỉ</label>
                                <input type="text" name="address" id="address_add" onkeyup="checkaddress();" onblur="checkaddress();" class="form-control" required>
                                <span style="color: red;" id="errorsaddress"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">SĐT</label>
                                <input type="tel" name="tel" id="phone_add" onkeyup="checkPhone();" onblur="checkPhone();" class="form-control" required>
                                <span style="color: red;" id="errorsphone"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <Label>Trạng Thái</Label>
                        <input type="radio" name="active" id="" value="1" checked> Kích Hoạt
                        <input type="radio" name="active" id="" value="0"> Khóa
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="customerEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateCustomer">
                    <div id="errorMessage" class="d-none alert alert-danger" role="alert">
                    </div>
                    <input type="hidden" name="customer_id" id="customer_id">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Tài Khoản</label>
                                <input type="text" name="user" id="user" onkeyup="checkuser();" onblur="checkuser();" class="form-control" required>
                                <span style="color: red;" id="errorsuser"><?php if (isset($thatbaiuser)) echo $thatbaiuser; ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">email</label>
                                <input type="email" name="email" id="email" onkeyup="checkEmail();" onblur="checkEmail();" class="form-control" required>
                                <span style="color: red;" id="errorsemail"><?php if (isset($thatbaiemail)) echo $thatbaiemail; ?></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Họ Tên</label>
                                <input type="text" name="name" id="name" onkeyup="checkname();" onblur="checkname();" class="form-control" required>
                                <span style="color: red;" id="errorsname"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Địa Chỉ</label>
                                <input type="text" name="address" id="address" onkeyup="checkaddress();" onblur="checkaddress();" class="form-control" required>
                                <span style="color: red;" id="errorsaddress"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">SĐT</label>
                                <input type="tel" name="tel" id="phone" onkeyup="checkPhone();" onblur="checkPhone();" class="form-control" required>
                                <span style="color: red;" id="errorsphone"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <Label>Trạng Thái</Label>
                        <input type="radio" name="active1" id="active1" value="1"> Kích Hoạt
                        <input type="radio" name="active1" id="active0" value="0"> Khóa
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Sửa</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#keywords').keyup(function() {
            $.ajax({
                url: '<?= _WEB_ROOT ?>/admin/customer_search',
                type: 'POST',
                data: {
                    keywords: $('#keywords').val()
                },
                success: function(data) {
                    $('#table').html(data);
                }
            });
        });
    });
    $(document).on('submit', '#saveCustomer', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("save_customer", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/customer/insert_customer",
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
                    $('#errorMessage').addClass('d-none');
                    $('#customerAddModal').modal('hide');
                    $('#saveCustomer')[0].reset();
                    $('#keywords').val("");
                    // alertify.set('notifier', 'position', 'top-center');
                    // alertify.success(res.message);

                    Swal.fire(
                        "Good job!",
                        res.message,
                        "success"
                    )

                    $('#myTable').load(location.href + " #myTable");

                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });

    $(document).on('click', '.editCustomerBtn', function() {

        var customer_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/customer/update",
            data: {
                id: customer_id
            },
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 404) {

                    alert(res.message);
                } else if (res.status == 200) {
                    $('#customer_id').val(res.data.id);
                    $('#user').val(res.data.user);
                    $('#pass').val(res.data.user);
                    $('#email').val(res.data.email);
                    $('#name').val(res.data.name);
                    $('#phone').val(res.data.tel);
                    $('#address').val(res.data.address);

                    let active = res.data.active;
                    if (active == 1) {
                        document.getElementById("active1").checked = true;
                    } else {
                        document.getElementById("active0").checked = true;
                    }

                    $('#customerEditModal').modal('show');
                }

            }
        });
    });


    $(document).on('submit', '#updateCustomer', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("update_customer", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/customer/update_customer",
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

                    $('#customerEditModal').modal('hide');
                    Swal.fire(
                        "Good job!",
                        res.message,
                        "success"
                    );

                    $('#updateCustomer')[0].reset();
                    $('#keywords').val("");
                    $('#myTable').load(location.href + " #myTable");

                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });

    $(document).on('click', '.deleteCustomerBtn', function(e) {
        e.preventDefault();
        Swal.fire({
            icon: 'warning',
            title: 'Bạn có chắc chắn muốn xóa dữ liệu này Không?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                var customer_id = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "<?= _WEB_ROOT ?>/admin/customer/xoa",
                    data: {
                        'delete_category': true,
                        'customer_id': customer_id
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