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
                            <h3 class="card-title">Danh Sách Bài Viết</h3>
                            <div class="card-tools">
                                <div class="form-group">
                                    <input type="text" name="tukhoa"  placeholder="Nhập Nội Dung Cần Tìm Kiếm" 
 id="keywords" class="form-control" style="width:400px;">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th style="width:400px;overflow:hidden;text-overflow:ellipsis">Tên bài viết</th>
                                        <th>Hình ảnh</th>
                                        <!-- <th>Mô Tả</th> -->
                                        <th>Lượt xem</th>
                                        <th>Ngày Đăng</th>
                                        <th>Danh Mục</th>
                                        <th>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#blogAddModal">
                                                Thêm Sản Phẩm
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table">
                                    <?php
                                    $i = 1;
                                    foreach ($blog_all as $blog) {
                                        extract($blog);
                                    ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td style="max-width: 350px;"><?= $title ?></td>
                                            <td><img src="<?php echo _WEB_ROOT ?>/public/uploads/<?php echo $img; ?>" height="80px"></td>
                                            <!-- <td><?= $describe ?></td> -->
                                            <td><?= $view ?></td>
                                            <td><?= $date ?></td>
                                            <td><?= $id_list_blog ?></td>
                                            <td>
                                                <button type="button" value="<?= $id ?>" class="editBlogBtn btn btn-success">Edit</button>
                                                <button type="button" value="<?= $id ?>" class="deleteBlogBtn btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    <?php  } ?>
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

<div class="modal fade" id="blogAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Danh Mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="saveBlog">
                    <div id="errorMessage" class="d-none alert alert-danger" role="alert">
                    </div>

                    <div class="form-group">
                        <label for="">Tên bài viết</label>
                        <input type="text" name="ten_baiviet" id="name_add" nkeyup="checkname();" onblur="checkname();" class="form-control" placeholder="Nhập Tên Danh Mục" required>
                        <span style="color: red;" id="errorname"></span>
                    </div>
                    <div class="form-group">
                        <label for="mo_ta">Mô Tả </label>
                        <textarea name="mo_ta" cols="25" rows="5" id="mota_add" onkeyup="checkmota();" onblur="checkmota();" class="form-control" style="resize:none;"></textarea>
                        <span style="color: red;" id="errormota"></span>
                    </div>
                    <div class="form-group">
                        <label for="mo_ta">Mô Tả Chi Tiết </label>
                        <textarea name="mo_ta_ct" id="editor1" cols="35" rows="10" class="form-control" style="resize:none;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Hình Ảnh</label>
                        <input type="file" name="hinh" id="hinh" required onmouseover="checkImage();">
                        <br>
                        <p style="color: red;padding-top: 10px;" id="errorImg"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Loại</label>
                        <select name="idloaibv" id="idloaibv_add" class="form-control">
                            <?php
                            foreach ($categoryblog_all as $danhmucblog) { ?>
                                <option value="<?php echo $danhmucblog['id']; ?>"><?php echo $danhmucblog['title_list_blog']; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="blogEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Danh Mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateBlog">
                    <div id="errorMessage" class="d-none alert alert-danger" role="alert">
                    </div>
                    <input type="hidden" name="blog_id" id="blog_id">
                    <div class="form-group">
                        <label for="">Tên bài viết</label>
                        <input type="text" name="ten_baiviet" id="name" nkeyup="checkname();" onblur="checkname();" class="form-control" placeholder="Nhập Tên Danh Mục" required>
                        <span style="color: red;" id="errorname"></span>
                    </div>
                    <div class="form-group">
                        <label for="mo_ta">Mô Tả </label>
                        <textarea name="mo_ta" cols="25" rows="5" id="mota" onkeyup="checkmota();" onblur="checkmota();" class="form-control" style="resize:none;"></textarea>
                        <span style="color: red;" id="errormota"></span>
                    </div>
                    <div class="form-group">
                        <label for="mo_ta">Mô Tả Chi Tiết </label>
                        <textarea name="mo_ta_ct" id="editor2" cols="35" rows="10" class="form-control" style="resize:none;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Hình Ảnh</label>
                        <input type="file" name="hinh" id="hinh" onmouseover="checkImage();">
                        <img src="" alt="" id="hinh1" name="hinh" width="150px">
                        <br>
                        <p style="color: red;padding-top: 10px;" id="errorImg"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Loại</label>
                        <select name="idloaibv" id="idloaibv" class="form-control">
                            <?php
                            foreach ($categoryblog_all as $danhmucblog) { ?>
                                <option value="<?php echo $danhmucblog['id']; ?>"><?php echo $danhmucblog['title_list_blog']; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Sửa</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#keywords').keyup(function() {
            $.ajax({
                url: '<?= _WEB_ROOT ?>/admin/blog_search',
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

    $(document).on('submit', '#saveBlog', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("save_blog", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/blog/themblog",
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
                    $('#blogAddModal').modal('hide');
                    $('#saveBlog')[0].reset();
                    $('#keywords').val("");
                    CKEDITOR.instances.editor1.setData("");

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

    $(document).on('click', '.editBlogBtn', function() {

        var blog_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/blog/update",
            data: {
                id: blog_id
            },
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 404) {

                    alert(res.message);
                } else if (res.status == 200) {

                    let mota = document.getElementById('mota');

                    $('#blog_id').val(res.data.id);
                    $('#name').val(res.data.title);
                    $('#idloaibv').val(res.data.id_list_blog);
                    mota.value = res.data.describe;
                    // motact.value = res.data.describe_detail;
                    CKEDITOR.instances.editor2.setData(res.data.describe_detail);
                    let img = res.data.img;
                    let img1 = '<?= _WEB_ROOT ?>/public/uploads/' + img;
                    $('#hinh1').attr("src", img1);
                    $('#blogEditModal').modal('show');
                }

            }
        });

    });

    $(document).on('submit', '#updateBlog', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("update_blog", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/blog/update_blog",
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

                    $('#blogEditModal').modal('hide');
                    Swal.fire(
                        "Good job!",
                        res.message,
                        "success"
                    );
                    $('#keywords').val("");
                    $('#updateBlog')[0].reset();
                    $('#myTable').load(location.href + " #myTable");

                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });

    $(document).on('click', '.deleteBlogBtn', function(e) {
        e.preventDefault();
        Swal.fire({
            icon: 'warning',
            title: 'Bạn có chắc chắn muốn xóa dữ liệu này Không?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                var blog_id = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "<?= _WEB_ROOT ?>/admin/blog/xoa",
                    data: {
                        'delete_category': true,
                        'blog_id': blog_id
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