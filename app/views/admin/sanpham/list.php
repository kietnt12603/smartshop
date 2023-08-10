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
                                    <input type="text" name="tukhoa" placeholder="Nhập Nội Dung Cần Tìm Kiếm" id="keywords" class="form-control" style="width:400px;">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Giá</th>
                                        <th>Giá giảm</th>
                                        <th>Hình Ảnh</th>
                                        <th>Lượt Xem</th>
                                        <th>Id Loại</th>
                                        <th>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productAddModal">
                                                Thêm Sản Phẩm
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table">
                                    <?php
                                    foreach ($product_all as $sanpham) {
                                        extract($sanpham);
                                        $gia = currency_format($price);
                                        $giagiam = currency_format($price_sale);
                                    ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td style="max-width: 238px;"> <?= $name ?></td>
                                            <td><?= $gia ?></td>
                                            <td><?= $giagiam ?></td>
                                            <td><img src="<?php echo _WEB_ROOT ?>/public/uploads/<?php echo $img; ?>" height="80px"></td>
                                            <td><?= $view ?></td>
                                            <td><?= $id_list_prod ?></td>
                                            <td>
                                                <button type="button" value="<?= $id ?>" class="editProductBtn btn btn-success">Edit</button>
                                                <button type="button" value="<?= $id ?>" class="deleteProductBtn btn btn-danger">Delete</button>
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

<div class="modal fade" id="productAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="saveProduct">
                    <div id="errorMessage" class="d-none alert alert-danger" role="alert">
                    </div>
                    <div class="form-group">
                        <label for="">Tên Sản Phẩm</label>
                        <input type="text" name="ten_hh" id="tenhh_add" class="form-control" required value="<?php echo (!empty($_POST['ten_hh'])) ? $_POST['ten_hh'] : false; ?>">
                        <p style="color: red; padding-top: 10px;" id="errorName"></p>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Giá</label>
                                <input type="number" name="don_gia" id="gia_add" required onkeyup="checkgia();" class="form-control" min="0" value="<?php echo (!empty($_POST['don_gia'])) ? $_POST['don_gia'] : false; ?>">
                                <p style="color: red; padding-top: 10px;" id="errorGia"></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Giá giảm</label>
                                <input type="number" name="giam_gia" id="giagiam_add" required onkeyup="checkgiagiam();" class="form-control" value="<?php echo (!empty($_POST['giam_gia'])) ? $_POST['giam_gia'] : false; ?>">
                                <p style="color: red; padding-top: 10px;" id="errorGiaGiam"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Hình Ảnh</label></br>
                                <input type="file" name="hinh" class="file_img" required>

                                <br>
                                <p style="color: red;padding-top: 10px;" id="errorImg"></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Loại</label>
                                <select name="idloai" id="idloai_add" class="form-control">
                                    <?php
                                    foreach ($category_all as $danhmuc) { ?>
                                        <option value="<?php echo $danhmuc['id']; ?>"><?php echo $danhmuc['namelistpro']; ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>





                    <div class="form-group">
                        <label for="">Mô Tả</label>
                        <textarea name="mo_ta1" id="mota_add" cols="25" rows="5" onkeyup="checkmota();" class="form-control" required style="resize:none;"><?php echo (!empty($_POST['mo_ta'])) ? $_POST['mo_ta'] : false; ?></textarea>
                        <p style="color: red;padding-top: 10px;" id="errorMoTa"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Mô Tả chi tiết</label>
                        <textarea name="mo_ta_ct1" id="editor1" cols="25" rows="10" onkeyup="checkmotact();" class="form-control" required style="resize:none;"><?php echo (!empty($_POST['mo_ta_ct'])) ? $_POST['mo_ta_ct'] : false; ?></textarea>
                        <p style="color: red;padding-top: 10px;" id="errorMoTaCT"></p>
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

<div class="modal fade" id="productEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateProduct">
                    <div id="errorMessage" class="d-none alert alert-danger" role="alert">
                    </div>
                    <input type="hidden" name="product_id" id="product_id">
                    <div class="form-group">
                        <label for="">Tên Sản Phẩm</label>
                        <input type="text" name="ten_hh" id="tenhh" class="form-control" required value="<?php echo (!empty($_POST['ten_hh'])) ? $_POST['ten_hh'] : false; ?>">
                        <p style="color: red; padding-top: 10px;" id="errorName"></p>
                    </div>

                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="number" name="don_gia" id="gia" required onkeyup="checkgia();" class="form-control" min="0" value="<?php echo (!empty($_POST['don_gia'])) ? $_POST['don_gia'] : false; ?>">
                        <p style="color: red; padding-top: 10px;" id="errorGia"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Giá giảm</label>
                        <input type="number" name="giam_gia" id="giagiam" required onkeyup="checkgiagiam();" class="form-control" value="<?php echo (!empty($_POST['giam_gia'])) ? $_POST['giam_gia'] : false; ?>">
                        <p style="color: red; padding-top: 10px;" id="errorGiaGiam"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Hình Ảnh</label>
                        <input type="file" name="hinh">
                        <img src="" width="100" id="hinh1" />
                        <br>
                        <p style="color: red;padding-top: 10px;" id="errorImg"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Mô Tả</label>
                        <textarea name="mo_ta1" id="mota" cols="25" rows="5" onkeyup="checkmota();" class="form-control" required style="resize:none;"><?php echo (!empty($_POST['mo_ta'])) ? $_POST['mo_ta'] : false; ?></textarea>
                        <p style="color: red;padding-top: 10px;" id="errorMoTa"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Mô Tả chi tiết</label>
                        <textarea name="mo_ta_ct1" id="editor2" cols="25" rows="10" onkeyup="checkmotact();" class="form-control" required style="resize:none;"><?php echo (!empty($_POST['mo_ta_ct'])) ? $_POST['mo_ta_ct'] : false; ?></textarea>
                        <p style="color: red;padding-top: 10px;" id="errorMoTaCT"></p>
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Mô Tả chi tiết</label>
                        <textarea name="mo_ta_ct1" id="motact" cols="25" rows="10" onkeyup="checkmotact();" class="form-control" required style="resize:none;"><?php echo (!empty($_POST['mo_ta_ct'])) ? $_POST['mo_ta_ct'] : false; ?></textarea>
                        <p style="color: red;padding-top: 10px;" id="errorMoTaCT"></p>
                    </div> -->
                    <div class="form-group">
                        <label for="">Loại</label>
                        <select name="idloai" id="idloai" class="form-control">
                            <?php
                            foreach ($category_all as $danhmuc) { ?>
                                <option value="<?php echo $danhmuc['id']; ?>"><?php echo $danhmuc['namelistpro']; ?></option>
                            <?php }
                            ?>
                        </select>
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
                url: '<?= _WEB_ROOT ?>/admin/product_search',
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
    $(document).on('submit', '#saveProduct', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("save_product", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/product/insert_product",
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
                    $('#productAddModal').modal('hide');
                    $('#saveProduct')[0].reset();
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

    $(document).on('click', '.editProductBtn', function() {

        var product_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/product/update",
            data: {
                id: product_id
            },
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 404) {

                    alert(res.message);
                } else if (res.status == 200) {

                    let mota = document.getElementById('mota');
                    let motact = document.getElementById('motact');

                    $('#product_id').val(res.data.id);
                    $('#tenhh').val(res.data.name);
                    $('#gia').val(res.data.price);
                    $('#giagiam').val(res.data.price_sale);
                    $('#idloai').val(res.data.id_list_prod);
                    mota.value = res.data.describe;
                    // motact.value = res.data.describe_detail;
                    CKEDITOR.instances.editor2.setData(res.data.describe_detail);
                    let img = res.data.img;
                    let img1 = '<?= _WEB_ROOT ?>/public/uploads/' + img;
                    $('#hinh1').attr("src", img1);
                    $('#productEditModal').modal('show');
                }

            }
        });

    });

    $(document).on('submit', '#updateProduct', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("update_product", true);

        $.ajax({
            type: "POST",
            url: "<?= _WEB_ROOT ?>/admin/product/update_product/",
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

                    $('#productEditModal').modal('hide');
                    Swal.fire(
                        "Good job!",
                        res.message,
                        "success"
                    );

                    $('#updateProduct')[0].reset();
                    $('#keywords').val("");
                    $('#myTable').load(location.href + " #myTable");

                } else if (res.status == 500) {
                    alert(res.message);
                }
            }
        });

    });

    $(document).on('click', '.deleteProductBtn', function(e) {
        e.preventDefault();
        Swal.fire({
            icon: 'warning',
            title: 'Bạn có chắc chắn muốn xóa dữ liệu này Không?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {

                var product_id = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "<?= _WEB_ROOT ?>/admin/product/xoa",
                    data: {
                        'delete_category': true,
                        'product_id': product_id
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