<?php
    extract($data);

    if(is_array($categoryblog_one)){
        extract($categoryblog_one);
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
                    <h3 class="card-title">Cập Nhật Danh Mục</h3>

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
                    <form method="POST" action="<?= _WEB_ROOT ?>/admin/categoryblog/update_categoryblog/<?= $id ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Tên Danh Mục</label>
                            <input type="text" name="ten_loai" id="" class="form-control" value="<?php if(isset($title_list_blog)&&($title_list_blog!="")) echo $title_list_blog ?>">
                            <?php echo (!empty($errors['tenloai']['required'])) ? '<span style="color: red;">' . $errors['tenloai']['required'] . '</span>' : false; ?>
                            <?php echo (!empty($errors['tenloai']['tontai'])) ? '<span style="color: red;">' . $errors['tenloai']['tontai'] . '</span>' : false; ?>
                        </div>
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id >0)) echo $id ?>">
                        <input type="submit" name="update" value="Cập Nhật" class="btn btn-success">
                        <input type="reset" value="Nhập Lại" class="btn btn-primary">
                        <a href="<?= _WEB_ROOT ?>/admin/categoryblog" class="btn btn-danger"> Quay Lại</a>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
