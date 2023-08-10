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
                <form action="<?php echo _WEB_ROOT ?>/admin/product/insert_product" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên Sản Phẩm</label>
                        <input type="text" name="ten_hh" id="tenhh" class="form-control" required onkeyup="checkname();" value="<?php echo (!empty($_POST['ten_hh'])) ? $_POST['ten_hh'] : false; ?>">
                        <p style="color: red; padding-top: 10px;" id="errorName"></p>
                        <!-- <?php echo (!empty($errors['ten_hh']['tontai'])) ? '<span style="color: red;">' . $errors['ten_hh']['tontai'] . '</span>' : false; ?> -->
                    </div>
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="number" name="don_gia" id="gia" required onkeyup="checkgia();" class="form-control" min="0" value="<?php echo (!empty($_POST['don_gia'])) ? $_POST['don_gia'] : false; ?>">
                        <p style="color: red; padding-top: 10px;" id="errorGia"></p>
                        <!-- <?php echo (!empty($errors['don_gia']['required'])) ? '<span style="color: red;">' . $errors['don_gia']['required'] . '</span>' : false; ?> -->
                    </div>
                    <div class="form-group">
                        <label for="">Giá giảm</label>
                        <input type="number" name="giam_gia" id="giagiam" required onkeyup="checkgiagiam();" class="form-control" value="<?php echo (!empty($_POST['giam_gia'])) ? $_POST['giam_gia'] : false; ?>">
                        <!-- <?php echo (!empty($errors['giam_gia']['required'])) ? '<span style="color: red;">' . $errors['giam_gia']['required'] . '</span>' : false; ?> -->
                        <p style="color: red; padding-top: 10px;" id="errorGiaGiam"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Hình Ảnh</label>
                        <input type="file" name="hinh" id="hinh" required onmouseover="checkImage();">
                        <br>
                        <p style="color: red;padding-top: 10px;" id="errorImg"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Mô Tả</label>
                        <textarea name="mo_ta1" id="mota" cols="25" rows="10" onkeyup="checkmota();" class="form-control" required style="resize:none;"><?php echo (!empty($_POST['mo_ta'])) ? $_POST['mo_ta'] : false; ?></textarea>
                        <!-- <?php echo (!empty($errors['mo_ta']['required'])) ? '<span style="color: red;">' . $errors['mo_ta']['required'] . '</span>' : false; ?> -->
                        <p style="color: red;padding-top: 10px;" id="errorMoTa"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Mô Tả chi tiết</label>
                        <textarea name="mo_ta_ct1" id="editor1" cols="25" rows="10" onkeyup="checkmotact();" class="form-control" required style="resize:none;"><?php echo (!empty($_POST['mo_ta_ct'])) ? $_POST['mo_ta_ct'] : false; ?></textarea>
                        <!-- <?php echo (!empty($errors['mo_ta_ct']['required'])) ? '<span style="color: red;">' . $errors['mo_ta_ct']['required'] . '</span>' : false; ?> -->
                    </div>
                    <p style="color: red;padding-top: 10px;" id="errorMoTaCT"><?php if (isset($errors['mo_ta_ct']['required'])) {
                                                                                    echo $errors['mo_ta_ct']['required'];
                                                                                }
                                                                                ?></p>
                    <div class="form-group">
                        <label for="">Loại</label>
                        <select name="idloai" class="form-control">
                            <?php
                            foreach ($category_all as $danhmuc) { ?>
                                <option value="<?php echo $danhmuc['id']; ?>"><?php echo $danhmuc['namelistpro']; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <input type="submit" name="themmoi" value="Thêm Mới" class="btn btn-success">
                    <input type="reset" value="Nhập Lại" class="btn btn-primary">
                    <a href="<?php echo _WEB_ROOT ?>/admin/product" class="btn btn-danger"> Quay Lại</a>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <script>
            function checkname() {
                var name = document.getElementById('tenhh').value;
                var errorName = document.getElementById('errorName');

                if (name == '' || name == null) {
                    errorName.innerHTML = "Tên sản phẩm Không Được Để Trống";
                } else {
                    errorName.innerHTML = "";
                    return name;
                }

            }

            function checkgia() {
                var gia = document.getElementById('gia').value;
                var errorgia = document.getElementById('errorGia');

                if (gia == '' || gia == null) {
                    errorgia.innerHTML = "Tên sản phẩm Không Được Để Trống";
                } else {
                    errorgia.innerHTML = "";
                    return gia;
                }

            }

            function checkgiagiam() {
                var giagiam = document.getElementById('giagiam').value;
                var errorGiaGiam = document.getElementById('errorGiaGiam');

                if (giagiam == '' || giagiam == null) {
                    errorGiaGiam.innerHTML = "Giá Không Được Để Trống";
                } else {
                    errorGiaGiam.innerHTML = "";
                    return gia;
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

            function checkmota() {
                var mota = document.getElementById('mota').value;
                var errorMoTa = document.getElementById('errorMoTa');

                if (mota == '' || mota == null) {
                    errorMoTa.innerHTML = "Mô Tả Không Được Để Trống";
                } else {
                    errorMoTa.innerHTML = "";
                    return mota;
                }

            }

            function kiemtra() {
                if (checkname() && checkgia() && checkgiagiam() && checkImage() && checkmota()) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->