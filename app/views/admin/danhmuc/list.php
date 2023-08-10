<?php
extract($data);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?php echo $title ?></h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                            <h3 class="card-title">Danh Sách Danh Mục</h3>
                            <div class="card-tools">
                                <!-- <form action="index.php?act=dssp" method="post" class="form-inline"> -->
                                <div class="form-group">
                                    <input type="text" name="tukhoa" placeholder="Nhập Nội Dung Cần Tìm Kiếm" id="keywords" class="form-control" style="width:400px;">
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Mã Loại</th>
                                        <th>Tên Loại</th>
                                        <th>Hình</th>
                                        <th>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryAddModal">
                                                Thêm Danh Mục
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table">
                                    <?php
                                    foreach ($categories as $item) {
                                        extract($item); ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td><?= $namelistpro ?></td>
                                            <td>
                                                <img src="<?php echo _WEB_ROOT ?>/public/uploads/<?php echo $img; ?>" height="80px">
                                            </td>
                                            <td>
                                                <button type="button" value="<?= $id ?>" class="editCategoryBtn btn btn-success">Edit</button>
                                                <button type="button" value="<?= $id ?>" class="deleteCategoryBtn btn btn-danger">Delete</button>
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
<div class="modal fade" id="categoryAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Danh Mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="saveCategory">
                <div class="modal-body">
                    <div id="errorMessage" class="d-none alert alert-danger" role="alert">
                    </div>

                    <div class="form-group">
                        <label for="">Tên Danh Mục</label>
                        <input type="text" name="tenloai" required class="form-control" id="tenloai_add" onkeyup="nametontai(this.value);" value="<?php echo (!empty($_POST['tenloai'])) ? $_POST['tenloai'] : false; ?>" placeholder="Nhập Tên Danh Mục">
                        <p style="color: red; padding-top: 10px;" id="errorName" class='errorName'></p>
                    </div>

                    <div class="form-group">
                        <label for="">filter</label>
                        <input type="text" name="filter" required class="form-control" id="filter_add" onkeyup="checkFilter();" value="<?php echo (!empty($_POST['filter'])) ? $_POST['filter'] : false; ?>" placeholder="Nhập Filter">
                        <p style="color: red;padding-top: 10px;" id="errorFilter"></p>
                    </div>
                    <div>
                        <div class="form-group">
                            <label for="">Hình Ảnh</label>
                            <input type="file" name="hinh" required>
                            <br>
                            <p style="color: red;padding-top: 10px;" id="errorImg"></p>
                        </div>
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

<div class="modal fade" id="categoryEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa Danh Mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="updateCategory">

                <div class="modal-body">
                    <div id="errorMessage" class="d-none alert alert-danger" role="alert">
                    </div>
                    <input type="hidden" name="category_id" id="category_id">
                    <div class="form-group">
                        <label for="">Tên Danh Mục</label>
                        <input type="text" name="tenloai" id="tenloai" required class="form-control" onkeyup="nametontai(this.value);" value="<?php echo (!empty($_POST['tenloai'])) ? $_POST['tenloai'] : false; ?>" placeholder="Nhập Tên Danh Mục">
                        <p style="color: red; padding-top: 10px;" id="errorName1" class="errorName"></p>
                    </div>
                    <div class="form-group ">
                        <label for="">Hình Ảnh</label>
                        <input type="file" name="hinh" id="hinh" class="file_img">
                        <img src="" width="100" id="hinh1" />
                        <br>
                        <p style="color: red;padding-top: 10px;" id="errorImg"></p>
                    </div>
                    <div class="form-group">
                        <label for="">filter</label>
                        <input type="text" name="filter" id="filter" required class="form-control" onkeyup="checkFilter();" value="<?php echo (!empty($_POST['filter'])) ? $_POST['filter'] : false; ?>" placeholder="Nhập Filter">
                        <p style="color: red;padding-top: 10px;" id="errorFilter"></p>
                    </div>
                    <div>
                        <?php echo (!empty($errors['thanhcong'])) ? '<span style="color: red;">' . $errors['thanhcong'] . '</span>' : false; ?>
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
                url: '<?= _WEB_ROOT ?>/admin/category_search',
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

    function nametontai(tenloai) {
        // var name = document.getElementById('tenloai_add').value;
        // console.log(tenloai);
        var errorName = document.getElementById('errorName');
        // $.post('<?= _WEB_ROOT ?>/admin/category/checkname', {
        //     'tenloai': tenloai
        // }, function(data) {
        //     if (data == "true") {
        //         // console.log(tenloai);
        //         errorName.innerHTML = "Tên Loại Đã Tồn Tại"
        //     } else if(tenloai==''||tenloai==null){
        //         errorName.innerHTML = "Tên Loại Không Được Để Trống";
        //     }else {
        //         errorName.innerHTML = "";
        //         return tenloai;
        //     }
        // });

        $.ajax({
            url: '<?= _WEB_ROOT ?>/admin/category/checkname',
            type: 'POST',
            data: {
                tenloai: tenloai
            },
            success: function(data) {
                if (data == "true") {
                    errorName.innerHTML = "Tên Loại Đã Tồn Tại"
                } else if (tenloai == '' || tenloai == null) {
                    errorName.innerHTML = "Tên Loại Không Được Để Trống";
                } else {
                    errorName.innerHTML = "";
                    return tenloai;
                }
            }
        });

    }

    function checkFilter() {
        var filter = document.getElementById('filter_add').value;
        var errorFilter = document.getElementById('errorFilter');

        if (filter == '' || filter == null) {
            errorFilter.innerHTML = "Filter không được để trống";
        } else {
            errorFilter.innerHTML = "";
            return filter;
        }
    }

    function checkImage() {
        img = document.getElementById('hinh');
        errorImg = document.getElementById('errorImg');
        if (img.value == '') {
            errorImg.innerHTML = "Bạn Chưa Chọn Hình";
        } else {
            errorImg.innerHTML = "";
            return img;
        }
    }

    // function kiemtra(){
    //     if(nametontai()&&checkFilter()&&checkImage()){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    $(document).on('submit', '#saveCategory', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("save_category", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/category/insert_category",
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
                    $('#categoryAddModal').modal('hide');
                    $('#saveCategory')[0].reset();
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

    $(document).on('click', '.editCategoryBtn', function() {

        var category_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/category/update",
            data: {
                id: category_id
            },
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 404) {

                    alert(res.message);
                } else if (res.status == 200) {

                    $('#category_id').val(res.data.id);
                    $('#tenloai').val(res.data.namelistpro);
                    $('#filter').val(res.data.filter);
                    let img = res.data.img;
                    let img1 = '<?= _WEB_ROOT ?>/public/uploads/' + img;
                    $('#hinh1').attr("src", img1);
                    $('#categoryEditModal').modal('show');
                }

            }
        });

    });

    $(document).on('submit', '#updateCategory', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("update_category", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/category/update_category/",
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

                    $('#categoryEditModal').modal('hide');
                    Swal.fire(
                        "Good job!",
                        res.message,
                        "success"
                    );

                    $('#updateCategory')[0].reset();
                    $('#keywords').val("");
                    $('#myTable').load(location.href + " #myTable");

                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });

    $(document).on('click', '.deleteCategoryBtn', function(e) {
        e.preventDefault();
        Swal.fire({
            icon: 'warning',
            title: 'Bạn có chắc chắn muốn xóa dữ liệu này Không?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                var category_id = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "<?= _WEB_ROOT ?>/admin/category/xoa",
                    data: {
                        'delete_category': true,
                        'category_id': category_id
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