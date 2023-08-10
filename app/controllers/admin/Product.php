<?php

class Product extends Controller
{
    public $data = [], $model_Product;
    public function __construct()
    {
        $this->model_Product = $this->model('ProductModel');
    }

    public function index()
    {
        $product = $this->db->table('product')->get();
        $category = $this->db->table('list_product')->get();
        $this->data['page_title'] = 'Sản Phẩm';
        $this->data['sub_content']['title'] = 'Danh Sách Sản Phẩm';
        $this->data['sub_content']['product_all'] = $product;
        $this->data['sub_content']['category_all'] = $category;
        $this->data['content'] = 'admin/sanpham/list';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function search()
    {
        if (isset($_POST['keywords'])) {
            $keywords = $_POST['keywords'];
            // $products=[];
            if ($keywords == "") {
                $result = $this->db->table('product')->get();
            } else {
                $result = $this->db->table('product')->whereLike('name', '%' . $keywords . '%')->get();
            }

            if ($result) {
                foreach ($result as $item) {
                    extract($item);
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
            }
        }
    }

    public function add()
    {
        $category = $this->db->table('list_product')->get();
        $this->data['page_title'] = 'Thêm Sản Phẩm';
        $this->data['sub_content']['title'] = 'Thêm Sản Phẩm';
        $this->data['sub_content']['category_all'] = $category;
        $this->data['content'] = 'admin/sanpham/add';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function insert_product()
    {

        if (isset($_POST['save_product'])) {
            $idloai = $_POST['idloai'];
            $ten_hh = $_POST['ten_hh'];
            $don_gia = $_POST['don_gia'];
            $giam_gia = $_POST['giam_gia'];
            $mo_ta = $_POST['mo_ta1'];
            $mo_ta_ct = $_POST['mo_ta_ct1'];
            $name_img = $_FILES['hinh']['name'];
            $source_img = $_FILES['hinh']['tmp_name'];
            $path_img = "./public/uploads/" . $name_img;
            move_uploaded_file($source_img, $path_img);

            $data = [
                '`name`' => $ten_hh,
                '`price`' => $don_gia,
                '`price_sale`' => $giam_gia,
                '`img`' => $name_img,
                '`describe`' => $mo_ta,
                '`describe_detail`' => $mo_ta_ct,
                '`id_list_prod`' => $idloai
            ];

            $status = $this->db->table('product')->insert($data);

            if ($status) {
                $res = [
                    'status' => 200,
                    'message' => 'Thêm Thành Công'
                ];
                echo json_encode($res);
                return;
            } else {
                $res = [
                    'status' => 500,
                    'message' => 'Thêm Thất Bại'
                ];
                echo json_encode($res);
                return;
            }
        }
    }

    public function update()
    {

        if ($_POST['id']) {
            $student_id = $_POST['id'];


            $data = $this->db->table('product')->where('id', '=', $student_id)->first();
            if ($data) {
                $res = [
                    'status' => 200,
                    'message' => 'Student Fetch Successfully by id',
                    'data' => $data
                ];
                echo json_encode($res);
            } else {
                $res = [
                    'status' => 404,
                    'message' => 'Student Id Not Found'
                ];
                echo json_encode($res);
                return;
            }
        }
    }

    public function update_Product()
    {

        if (isset($_POST['update_product']) && ($_POST['update_product'])) {
            $id = $_POST['product_id'];
            $ten_hh = $_POST['ten_hh'];
            $don_gia = $_POST['don_gia'];
            $giam_gia = $_POST['giam_gia'];
            $mo_ta = $_POST['mo_ta1'];
            $mo_ta_ct = $_POST['mo_ta_ct1'];
            $idloai = $_POST['idloai'];
            $name_img = $_FILES['hinh']['name'];
            $source_img = $_FILES['hinh']['tmp_name'];
            $path_img = "./public/uploads/" . $name_img;
            move_uploaded_file($source_img, $path_img);

            if ($name_img != '') {
                $data = [
                    '`name`' => $ten_hh,
                    '`price`' => $don_gia,
                    '`price_sale`' => $giam_gia,
                    '`img`' => $name_img,
                    '`describe`' => $mo_ta,
                    '`describe_detail`' => $mo_ta_ct,
                    '`id_list_prod`' => $idloai,
                ];
            } else {
                $data = [
                    '`name`' => $ten_hh,
                    '`price`' => $don_gia,
                    '`price_sale`' => $giam_gia,
                    '`describe`' => $mo_ta,
                    '`describe_detail`' => $mo_ta_ct,
                    '`id_list_prod`' => $idloai,
                ];
            }

            $data = $this->db->table('product')->where('id', '=', $id)->update($data);
            $status = $data;

            if ($status) {
                $res = [
                    'status' => 200,
                    'message' => 'Cập Nhật Thành Công'
                ];
                echo json_encode($res);
                return;
            } else {
                $res = [
                    'status' => 500,
                    'message' => 'Cập Nhật Thất Bại'
                ];
                echo json_encode($res);
                return;
            }
        }
    }

    public function delete()
    {
        if (isset($_POST['product_id'])) {

            $product_id = $_POST['product_id'];

            $data = $this->db->table('product')->where('id', '=', $product_id)->delete();

            if ($data) {
                $res = [
                    'status' => 200,
                    'message' => 'Xoá Danh Mục Thành Công'
                ];
                echo json_encode($res);
                return;
            } else {
                $res = [
                    'status' => 500,
                    'message' => 'Xoá Thất Bại'
                ];
                echo json_encode($res);
                return;
            }
        }
    }
}
