<?php

class Category extends Controller
{
    public $data = [], $model_Category;
    public function __construct()
    {
        $this->model_Category = $this->model('CategoryModel');
    }
    public function index()
    {
        $categories = $this->db->table('list_product')->get();
        $slcategory = $this->db->query("SELECT count(*) FROM list_product");
        $this->data['page_title'] = 'Danh Mục';
        $this->data['sub_content']['categories'] = $categories;
        $this->data['sub_content']['slcategory'] = $slcategory;
        $this->data['sub_content']['title'] = 'Danh Sách Danh Mục';
        $this->data['content'] = 'admin/danhmuc/list';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function search()
    {
        if (isset($_POST['keywords'])) {
            $keywords = $_POST['keywords'];
            // $products=[];
            if($keywords==""){
                $result = $this->db->table('list_product')->get();
            }else{
                $result = $this->db->table('list_product')->whereLike('namelistpro', '%' . $keywords . '%')->get();
            }

            if ($result) {
                foreach ($result as $item) {
                    extract($item);
?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $namelistpro ?></td>
                        <td>
                            <img src="<?php echo _WEB_ROOT ?>/public/uploads/<?php echo $img; ?>" height="80px">
                        </td>
                        <td>
                            <button type="button" value="<?= $id ?>" class="editCategoryBtn btn btn-success">Edit</button>
                            <button type="button" value="<?= $id ?>" class="deleteCategoryBtn btn btn-danger">Delete</button>
                        </td>
                    </tr>
<?php }
            }
        }
    }

    public function add()
    {
        $this->data['page_title'] = 'Thêm Danh Mục';
        $this->data['sub_content']['title'] = 'Thêm Danh Mục';
        $this->data['content'] = 'admin/danhmuc/add';
        $this->render('layouts/admin_layout', $this->data);
        //        $this->render('admin/danhmuc/add');
    }
    public function insert_category()
    {
        if (isset($_POST['save_category'])) {
            $tenloai = $_POST['tenloai'];
            $filter = $_POST['filter'];
            $name_img = $_FILES['hinh']['name'];

            $source_img = $_FILES['hinh']['tmp_name'];
            $path_img = "./public/uploads/" . $name_img;
            move_uploaded_file($source_img, $path_img);

            $data = [
                'namelistpro' => $tenloai,
                'img' => $name_img,
                'filter' => $filter
            ];

            $status = $this->db->table('list_product')->insert($data);

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


            $data = $this->db->table('list_product')->where('id', '=', $student_id)->first();
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

    public function update_Category()
    {
        if (isset($_POST['update_category']) && ($_POST['update_category'])) {
            $id = $_POST['category_id'];
            $tenloai = $_POST['tenloai'];
            $filter = $_POST['filter'];
            $name_img = $_FILES['hinh']['name'];
            $source_img = $_FILES['hinh']['tmp_name'];
            $path_img = "./public/uploads/" . $name_img;
            move_uploaded_file($source_img, $path_img);

            if ($name_img != '') {
                $data = [
                    'namelistpro' => $tenloai,
                    'img' => $name_img,
                    'filter' => $filter,
                ];
            } else {
                $data = [
                    'namelistpro' => $tenloai,
                    'filter' => $filter,
                ];
            }

            $data = $this->db->table('list_product')->where('id', '=', $id)->update($data);
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
        if (isset($_POST['category_id'])) {

            $category_id = $_POST['category_id'];

            $data = $this->db->table('list_product')->where('id', '=', $category_id)->delete();

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

    public function checkname()
    {
        $tenloai = $_POST['tenloai'];
        $check = $this->db->table('list_product')->where('namelistpro', '=', $tenloai)->first();

        if ($check) {
            // $res = [
            //     'status' => 200,
            //     'message' => 'true',
            //     'data'=> 'true'
            // ];
            // echo json_encode($res);
            // return;
            echo "true";
        } else {
            // $res = [
            //     'status' => 500,
            //     'message' => 'false',
            //     'data' => 'false'
            // ];
            // echo json_encode($res);
            // return;
            echo "false";
        }
    }
}
