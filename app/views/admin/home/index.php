<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <?php echo $title; ?>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">
                            <?= $title; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php
                            $dssp = $this->db->table('product')->get();
                            $quantitysp = count($dssp);
                            ?>
                            <h3>
                                <?= $quantitysp; ?></h3>

                            <p>Tổng Số Sản Phẩm</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?= _WEB_ROOT; ?>/admin/product" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <?php
                            $dsnv = $this->db->table('user')->get();
                            $slnv = count($dsnv);
                            ?>
                            <h3>
                                <?= $slnv; ?></h3>

                            <p>Số Nhân Viên</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?= _WEB_ROOT; ?>/admin/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <?php
                            $dskh = $this->db->table('customer')->get();
                            $slkh = count($dskh);
                            ?>
                            <h3>
                                <?= $slkh; ?></h3>

                            <p>Số Khách Hàng</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?= _WEB_ROOT; ?>/admin/customer" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <?php
                            $list_blog = $this->db->table('blog')->get();
                            $slbl = count($list_blog);
                            ?>

                            <h3>
                                <?= $slbl; ?></h3>

                            <p>Số Bài Viết</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="<?= _WEB_ROOT; ?>/admin/blog" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="row">
                <div class="col-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Thống Kê Sản Phẩm Theo Danh Mục</h3>
                        </div>
                        <div class="card-body">
                            <div id="piechart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Thống Kê Bài Viết Theo Danh Mục</h3>
                        </div>
                        <div class="card-body">
                            <div id="bieudo"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh Mục', 'Số Lượng'],
            <?php
            $thongke = $this->db->query('SELECT list_product.id as madm, list_product.namelistpro as tendm, count(product.id) as countsp, min(product.price) as minprice, max(product.price) as maxprice, avg(product.price) as avgprice FROM product INNER JOIN list_product ON list_product.id=product.id_list_prod  GROUP BY list_product.id order by list_product.id desc')->fetchAll(PDO::FETCH_ASSOC);
            $tongdm = count($thongke);
            $i = 1;
            foreach ($thongke as $tk) {
                extract($tk);
                if ($i == $tongdm) {
                    $phay = '';
                } else {
                    $phay = ',';
                }

                echo "['" . $tk['tendm'] . "', " . $tk['countsp'] . ']' . $phay;
                ++$i;
            }
            ?>


        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'Thống Kê Sản Phẩm Theo Danh Mục',
            'width': 500,
            'height': 280
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh Mục', 'Số Lượng'],
            <?php
            $thongkeblog = $this->db->query('SELECT list_blog.id AS MaDMBV, list_blog.title_list_blog AS TenDMBV, COUNT(blog.id) AS countbv  FROM `blog` INNER JOIN list_blog ON list_blog.id=blog.id_list_blog GROUP BY list_blog.id ORDER BY list_blog.id;')->fetchAll(PDO::FETCH_ASSOC);
            $tongdm1 = count($thongkeblog);
            $i = 1;
            foreach ($thongkeblog as $tkblog) {
                extract($tkblog);
                if ($i == $tongdm1) {
                    $phay = '';
                } else {
                    $phay = ',';
                }

                echo "['" . $tkblog['TenDMBV'] . "', " . $tkblog['countbv'] . ']' . $phay;
                ++$i;
            }
            ?>


        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'Thống Kê Sản Phẩm Theo Danh Mục',
            'width': 500,
            'height': 280
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('bieudo'));
        chart.draw(data, options);
    }
</script>