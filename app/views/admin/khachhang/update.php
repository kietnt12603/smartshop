<?php
    extract($data);
    if(is_array($customer_one)){
        extract($customer_one);
    }
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
                    <form method="POST" action="<?= _WEB_ROOT ?>/admin/customer/update_customer/<?= $id ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Tài Khoản</label>
                            <input type="text" name="user" id="" class="form-control" value="<?php echo $user; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="email" name="email" id="" class="form-control" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Họ Tên</label>
                            <input type="text" name="name" id="" class="form-control" value="<?php echo $name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Địa Chỉ</label>
                            <input type="text" name="address" id="" class="form-control" value="<?php echo $address; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">SĐT</label>
                            <input type="tel" name="tel" id="" class="form-control" value="<?php echo $tel; ?>">
                        </div>
<!--                        <div class="form-group">-->
<!--                            <Label>Quyền Hạng</Label>-->
<!--                            --><?php //if($role==0) { ?>
<!--                                <input type="radio" name="role" id="" value="0" checked> Khách Hàng-->
<!--                                <input type="radio" name="role" id="" value="1"> Admin-->
<!--                            --><?php //}else{ ?>
<!--                                <input type="radio" name="role" id="" value="0"> Khách Hàng-->
<!--                                <input type="radio" name="role" id="" value="1" checked> Admin-->
<!--                            --><?php //} ?>
<!--                        </div>-->

                        <div class="form-group">
                            <Label>Trạng Thái</Label>
                            <?php if($active==1) { ?>
                                <input type="radio" name="active" id="" value="1" checked> Kích Hoạt
                                <input type="radio" name="active" id="" value="0"> Khóa
                            <?php }else{ ?>
                                <input type="radio" name="active" id="" value="1"> Kích Hoạt
                                <input type="radio" name="active" id="" value="0" checked> Khóa
                            <?php } ?>
                        </div>
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id >0)) echo $id ?>">
                        <input type="submit" name="update" value="Cập Nhật" class="btn btn-success">
                        <input type="reset" value="Nhập Lại" class="btn btn-primary">
                        <a href="<?= _WEB_ROOT ?>/admin/customer" class="btn btn-danger"> Quay Lại</a>

                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
