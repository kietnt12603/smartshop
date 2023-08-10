 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?=$title?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><?=$title?></li>
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
                    <h3 class="card-title">Thêm Danh Mục</h3>

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
                    <form method="POST" enctype="multipart/form-data" action="<?php echo _WEB_ROOT ?>/admin/category/insert_category">
                        <div class="form-group">
                            <label for="">Loại Danh Mục</label>
                            <input type="text" name="maloai" id="" class="form-control" value="Mã Loại" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Tên Danh Mục</label>
                            <input type="text" name="tenloai" id="tenloai" class="form-control" onkeyup="checkname();" required value="<?php echo (!empty($_POST['tenloai'])) ? $_POST['tenloai'] : false; ?>" placeholder="Nhập Tên Danh Mục">
                            <p style="color: red; padding-top: 10px;" id="errorName"><?php if (isset($errors['tenloai']['tontai'])) {
    echo $errors['tenloai']['tontai'];
}
?></p>
                            <!-- <?php echo (!empty($errors['tenloai']['required'])) ? '<span style="color: red;">' . $errors['tenloai']['required'] . '</span>' : false; ?>
            <?php echo (!empty($errors['tenloai']['tontai'])) ? '<span style="color: red;">' . $errors['tenloai']['tontai'] . '</span>' : false; ?> -->
                        </div>
                        <div class="form-group">
                            <label for="">Hình Ảnh</label>
                            <input type="file" name="hinh" id="hinh" required onmouseover="checkImage();">
                            <!-- <?php echo (!empty($errors['hinh']['thanhcong'])) ? '<span style="color: red;">' . $errors['hinh']['thanhcong'] . '</span>' : false; ?> -->
                            <br>
                            <p style="color: red;padding-top: 10px;" id="errorImg" ></p>
                            <!-- <?php echo (!empty($errors['hinh']['loi'])) ? '<span style="color: red;">' . $errors['hinh']['loi'] . '</span>' : false; ?> -->
                        </div>
                        <div class="form-group">
                            <label for="">filter</label>
                            <input type="text" name="filter" id="filter" class="form-control" onkeyup="checkFilter();" required value="<?php echo (!empty($_POST['filter'])) ? $_POST['filter'] : false; ?>" placeholder="Nhập Filter">
                            <!-- <?php echo (!empty($errors['filter']['required'])) ? '<span style="color: red;">' . $errors['filter']['required'] . '</span>' : false; ?> -->
                            <p style="color: red;padding-top: 10px;" id="errorFilter"></p>
                        </div>

                        <div>
                            <?php echo (!empty($errors['thanhcong'])) ? '<span style="color: red;">' . $errors['thanhcong'] . '</span>' : false; ?>
                        </div>
                        <input type="submit" name="themmoi" value="Thêm Mới" class="btn btn-success">
                        <input type="reset" value="Nhập Lại" class="btn btn-primary">
                        <a href="<?php echo _WEB_ROOT ?>/admin/category" class="btn btn-danger"> Quay Lại</a>

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
        function checkname(){
            var name = document.getElementById('tenloai').value;
            var errorName = document.getElementById('errorName');

            if(name==''||name==null){
                errorName.innerHTML="Tên Loại Không Được Để Trống";
            }else{
                errorName.innerHTML="";
                return name;
            }

        }

        function checkFilter(){
            var filter=document.getElementById('filter').value;
            var errorFilter=document.getElementById('errorFilter');

            if(filter==''||filter==null){
                errorFilter.innerHTML="Filter không được để trống";
            }else{
                errorFilter.innerHTML="";
                return filter;
            }
        }

        function checkImage(){
            img=document.getElementById('hinh');
            errorImg=document.getElementById('errorImg');
            if(img.value==''){
                errorImg.innerHTML="Bạn Chưa Chọn Hình";
            }else{
                errorImg.innerHTML="";
                return img;
            }
        }

    </script>
