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
                            <h3 class="card-title">Danh Sách Danh Mục Bài Viết</h3>
                            <div class="card-tools">
                                <div class="form-group">
                                    <input type="text" name="tukhoa"  placeholder="Nhập Nội Dung Cần Tìm Kiếm" 
 id="keywords" class="form-control" style="width:400px;">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap " id="myTable">
                                <thead>
                                    <tr>
                                        <th>Mã Danh Mục</th>
                                        <th>Tên Danh Mục</th>
                                        <th>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryblogAddModal">
                                                Thêm Sản Phẩm
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table">
                                    <?php
                                    foreach ($categoryblog_all as $danhmuc) {
                                        extract($danhmuc);
                                    ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td><?= $title_list_blog ?></td>
                                            <td>
                                                <button type="button" value="<?= $id ?>" class="editCategoryBlogBtn btn btn-success">Edit</button>
                                                <button type="button" value="<?= $id ?>" class="deleteCategoryBlogBtn btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    <?php  }
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

<div class="modal fade" id="categoryblogAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Danh Mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="saveCategoryBlog">
                <div class="modal-body">
                    <div id="errorMessage" class="d-none alert alert-danger" role="alert">
                    </div>

                    <div class="form-group">
                        <label for="">Tên Danh Mục Bài Viết</label>
                        <input type="text" name="tenloai" id="tenloai_add" class="form-control" value="<?php echo (!empty($_POST['tenloai'])) ? $_POST['tenloai'] : false; ?>" placeholder="Nhập Tên Danh Mục">
                        <p style="color: red; padding-top: 10px;" id="errorName"></p>
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

<div class="modal fade" id="categoryblogEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa Danh Mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="updateCategoryBlog">
                <div class="modal-body">
                    <div id="errorMessage" class="d-none alert alert-danger" role="alert">
                    </div>
                    <input type="hidden" name="categoryblog_id" id="categoryblog_id">
                    <div class="form-group">
                        <label for="">Tên Danh Mục Bài Viết</label>
                        <input type="text" name="tenloai" id="tenloai" class="form-control" value="<?php echo (!empty($_POST['tenloai'])) ? $_POST['tenloai'] : false; ?>" placeholder="Nhập Tên Danh Mục">
                        <p style="color: red; padding-top: 10px;" id="errorName"></p>
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


<script>
    $(document).ready(function() {
        $('#keywords').keyup(function() {
            $.ajax({
                url: '<?= _WEB_ROOT ?>/admin/categoryblog_search',
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

    $(document).on('submit', '#saveCategoryBlog', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("save_categoryblog", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/categoryblog/insert_categoryblog",
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
                    $('#categoryblogAddModal').modal('hide');
                    $('#saveCategoryBlog')[0].reset();

                    // alertify.set('notifier', 'position', 'top-center');
                    // alertify.success(res.message);

                    Swal.fire(
                        "Good job!",
                        res.message,
                        "success"
                    )

                    $('#myTable').load(location.href + " #myTable");
                    $('#keywords').val("");
                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });

    $(document).on('click', '.editCategoryBlogBtn', function() {

        var categoryblog_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/categoryblog/update",
            data: {
                id: categoryblog_id
            },
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 404) {

                    alert(res.message);
                } else if (res.status == 200) {

                    $('#categoryblog_id').val(res.data.id);
                    $('#tenloai').val(res.data.title_list_blog);
                    $('#categoryblogEditModal').modal('show');
                }

            }
        });
    });

    $(document).on('submit', '#updateCategoryBlog', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("update_CategoryBlog", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/categoryblog/update_categoryblog",
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

                    $('#categoryblogEditModal').modal('hide');
                    Swal.fire(
                        "Good job!",
                        res.message,
                        "success"
                    );

                    $('#updateCategoryBlog')[0].reset();
                    $('#keywords').val("");
                    $('#myTable').load(location.href + " #myTable");

                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });

    $(document).on('click', '.deleteCategoryBlogBtn', function(e) {
        e.preventDefault();
        Swal.fire({
            icon: 'warning',
            title: 'Bạn có chắc chắn muốn xóa dữ liệu này Không?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                var categoryblog_id = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "<?= _WEB_ROOT ?>/admin/categoryblog/delete_catgoryblog",
                    data: {
                        'delete_categoryblog': true,
                        'categoryblog_id': categoryblog_id
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