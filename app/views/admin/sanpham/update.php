<?php
extract($data);
if (is_array($product_one)) {
    extract($product_one);
}
// var_dump($product_one);
//$hinhpath="../upload/".$img;
//if(is_file($hinhpath)){
//    $hinh="<img src='".$hinhpath."' height='80'>";
//}else{
//    $hinh="no photo";
//}
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
                <h3 class="card-title"><?=$title?></h3>

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
                <form  method="POST" action="<?php echo _WEB_ROOT ?>/admin/product/update_product/<?=$id?>"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên Sản Phẩm</label>
                        <input type="text" name="ten_hh"  class="form-control" value="<?=$name?>" >
                    </div>
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="number" name="don_gia" id="" class="form-control" value="<?=$price?>">
                    </div>
                    <div class="form-group">
                        <label for="">Giá Giảm</label>
                        <input type="number" name="giam_gia" id="" class="form-control" value="<?=$price_sale?>">
                    </div>
                    <div class="form-group">
                        <label for="">Hình Ảnh</label>
                        <input type="file" name="hinh" id="">
                        <img src="<?php echo _WEB_ROOT ?>/public/uploads/<?php echo $img; ?>" height="80px">
                    </div>
                    <div class="form-group">
                        <label for="">Mô Tả</label>
                        <textarea name="mo_ta" id="editor2" cols="25" rows="10" class="form-control" style="resize:none;"> <?=$describe?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Mô Tả chi tiết</label>
                        <textarea name="mo_ta_ct" id="editor1" cols="25" rows="10" class="form-control" style="resize:none;"> <?=$describe_detail?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Loại</label>
                        <select name="idloai"class="form-control">
                            <?php
foreach ($category_all as $danhmuc) {
    if ($id_list_prod == $danhmuc['id']) {?>
                                    <option value="<?php echo $danhmuc['id']; ?>" selected><?php echo $danhmuc['namelistpro']; ?></option>
                                <?php } else {?>
                                    <option value="<?php echo $danhmuc['id']; ?>" ><?php echo $danhmuc['namelistpro']; ?></option>
                                <?php }}
?>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="update" value="Cập Nhật" class="btn btn-success">
                    <input type="reset" value="Nhập Lại" class="btn btn-primary">
                    <a href="<?php echo _WEB_ROOT ?>/admin/product/" class="btn btn-danger"> Quay Lại</a>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->