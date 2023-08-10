<?php
extract($data);

?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
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
                <h3 class="card-title">Thêm Bài Viết</h3>

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
                <form method="POST" action="<?= _WEB_ROOT ?>/admin/blog/insert_blog" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên bài viết</label>
                        <input type="text" name="ten_baiviet" id="name" nkeyup="checkname();" onblur="checkname();"  class="form-control" placeholder="Nhập Tên Danh Mục" required>
                        <span style="color: red;" id="errorname"></span>
                    </div>
                    <div class="form-group">
                        <label for="mo_ta">Mô Tả </label>
                        <textarea name="mo_ta" cols="25" rows="5" id="mota" onkeyup="checkmota();" onblur="checkmota();" class="form-control" style="resize:none;"></textarea>
                        <span style="color: red;" id="errormota"></span>
                    </div>
                    <div class="form-group">
                        <label for="mo_ta">Mô Tả Chi Tiết </label>
                        <textarea name="mo_ta_ct" id="editor1" cols="35" rows="10" class="form-control" style="resize:none;"></textarea>
                    </div>
                    <p style="color: red;padding-top: 10px;" id="errorMoTaCT"><?php if(isset($errors['mo_ta_ct']['required'])) echo $errors['mo_ta_ct']['required']; ?></p>

                    <div class="form-group">
                        <label for="">Hình Ảnh</label>
                        <input type="file" name="hinh" id="hinh" required onmouseover="checkImage();">
                        <br>
                        <p style="color: red;padding-top: 10px;" id="errorImg" ></p>
                    </div>
                    <div class="form-group">
                        <label for="">Loại</label>
                        <select name="idloaibv"class="form-control">
                            <?php
                            foreach ($categoryblog_all as $danhmucblog) {?>
                                <option value="<?php echo $danhmucblog['id'] ; ?>"><?php echo $danhmucblog['title_list_blog']; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <input type="submit" name="themmoi" value="Thêm Mới" class="btn btn-success">
                    <input type="reset" value="Nhập Lại" class="btn btn-primary">
                    <a href="index.php?act=dsblog" class="btn btn-danger"> Quay Lại</a>

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
        var name = document.getElementById('name').value;
        var errorname = document.getElementById('errorname');

        if(name==''||name==null){
            errorname.innerHTML="Tên Bài Viết Không Được Để Trống";
        }else{
            errorname.innerHTML="";
            return name;
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

    function checkmota(){
        var mota = document.getElementById('mota').value;
        var errormota = document.getElementById('errormota');

        if(mota==''||mota==null){
            errormota.innerHTML="Mô Tả Không Được Để Trống";
        }else{
            errormota.innerHTML="";
            return mota;
        }

    }

    function kiemtra(){
        if(checkname()&&checkImage()&&checkmota()){
            return true;
        }else{
            return false;
        }
    }

</script>