<?php
extract($data);
if (is_array($category_one)) {
    extract($category_one);
}
//    $hinhpath="../upload/".$img;
//    if(is_file($hinhpath)){
//        $hinh="<img src='".$hinhpath."' height='80'>";
//    }else{
//        $hinh="no photo";
//    }
?>
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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <h3 class="card-title">Cập Nhật Danh Mục</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo _WEB_ROOT ?>/admin/category/update_Category/<?=$id?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Loại Danh Mục</label>
                        <input type="text" name="maloai" id="" class="form-control" value="Mã Loại" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Tên Danh Mục</label>
                        <input type="text" name="ten_loai" id="" class="form-control" value="<?php if (isset($namelistpro) && ($namelistpro != "")) {
    echo $namelistpro;
}
?>">
                        <?php echo (!empty($errors['tenloai']['required'])) ? '<span style="color: red;">' . $errors['tenloai']['required'] . '</span>' : false; ?>
                        <?php echo (!empty($errors['tenloai']['tontai'])) ? '<span style="color: red;">' . $errors['tenloai']['tontai'] . '</span>' : false; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Filter</label>
                        <input type="text" name="filter" id="" class="form-control" value="<?php if (isset($filter) && ($filter != "")) {
    echo $filter;
}
?>">
                        <?php echo (!empty($errors['filter']['required'])) ? '<span style="color: red;">' . $errors['filter']['required'] . '</span>' : false; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Hình Ảnh</label>
                        <input type="file" name="hinh" id="">
                        <img src="<?php echo _WEB_ROOT ?>/public/uploads/<?php echo $img; ?>" height="80px">
                    </div>
                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) {
    echo $id;
}
?>">
                    <input type="submit" name="update" value="Cập Nhật" class="btn btn-success">
                    <input type="reset" value="Nhập Lại" class="btn btn-primary">
                    <a href="<?php echo _WEB_ROOT ?>/admin/category/" class="btn btn-danger"> Quay Lại</a>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->