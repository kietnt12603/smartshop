<?php
    extract($data);
    if(isset($blog_one)){
    extract($blog_one);
    }
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
                <h3 class="card-title">Cập Nhật Bài Viết</h3>

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
                <form method="POST" action="<?= _WEB_ROOT ?>/admin/blog/update_blog/<?= $id ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên bài viết</label>
                        <input type="text" name="ten_baiviet" id="" class="form-control" placeholder="Nhập Tên Danh Mục" value="<?= $title ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Hình Ảnh</label>
                        <input type="file" name="hinh" id="">
                        <img src="<?php echo _WEB_ROOT ?>/public/uploads/<?php echo $img; ?>" height="80px">
                    </div>
                    <div class="form-group">
                        <label for="mo_ta">Mô Tả </label>
                        <textarea name="mo_ta" cols="25" rows="5" class="form-control" style="resize:none;"><?= $describe ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="mo_ta">Mô Tả Chi Tiết </label>
                        <textarea name="mo_ta_ct" id="editor1" cols="35" rows="10" class="form-control" style="resize:none;"><?= $describe_detail ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Loại</label>
                        <select name="idloaibv"class="form-control">
                            <?php
                            foreach ($categoryblog_all as $danhmucblog) {
                                if($id_list_blog==$danhmucblog['id']){ ?>
                                    <option value="<?php echo $danhmucblog['id'] ; ?>" selected><?php echo $danhmucblog['title_list_blog']; ?></option>
                                <?php }else { ?>
                                    <option value="<?php echo $danhmucblog['id'] ; ?>" ><?php echo $danhmucblog['title_list_blog']; ?></option>
                                <?php }  }
                            ?>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="update" value="Cập Nhật" class="btn btn-success">
                    <input type="reset" value="Nhập Lại" class="btn btn-primary">
                    <a href="<?= _WEB_ROOT ?>/admin/blog" class="btn btn-danger"> Quay Lại</a>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->