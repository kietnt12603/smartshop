<?php

class CategoryBlog extends Controller
{
    public $data = [], $model_CategoryBlog;

    public function __construct()
    {
        $this->model_CategoryBlog = $this->model('CategoryBlogModel');
    }

    public function index()
    {
        $this->data['page_title'] = 'Danh Mục Bài Viết';
        $this->data['sub_content']['title'] = 'Danh Mục Bài Viết';
        $this->data['sub_content']['categoryblog_all'] = $this->db->table('list_blog')->get();
        $this->data['content'] = 'admin/danhmucbaiviet/list';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function search()
    {
        if (isset($_POST['keywords'])) {
            $keywords = $_POST['keywords'];
            // $products=[];
            if ($keywords == "") {
                $result = $this->db->table('list_blog')->get();
            } else {
                $result = $this->db->table('list_blog')->whereLike('title_list_blog', '%' . $keywords . '%')->get();
            }

            if ($result) {
                foreach ($result as $item) {
                    extract($item);
?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $title_list_blog ?></td>
                        <td>
                            <button type="button" value="<?= $id ?>" class="editCategoryBlogBtn btn btn-success">Edit</button>
                            <button type="button" value="<?= $id ?>" class="deleteCategoryBlogBtn btn btn-danger">Delete</button>
                        </td>
                    </tr>
<?php }
            }
        }
    }

    public function add()
    {
        $this->data['page_title'] = 'Thêm Danh Mục Bài Viết';
        $this->data['sub_content'][''] = null;
        $this->data['content'] = 'admin/danhmucbaiviet/add';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function insert_categoryblog()
    {

        if (isset($_POST['save_categoryblog'])) {
            $tenloai = $_POST['tenloai'];

            $data = [
                '`title_list_blog`' => $tenloai,
            ];

            $status = $this->db->table('list_blog')->insert($data);

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


            $data = $this->db->table('list_blog')->where('id', '=', $student_id)->first();
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

    public function update_categoryblog()
    {

        if (isset($_POST['update_CategoryBlog']) && ($_POST['update_CategoryBlog'])) {
            $id = $_POST['categoryblog_id'];
            $tenloai = $_POST['tenloai'];
            $data = [
                '`title_list_blog`' => $tenloai,
            ];

            $data = $this->db->table('list_blog')->where('id', '=', $id)->update($data);

            if ($data) {
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

    public function delete_catgoryblog()
    {

        if (isset($_POST['categoryblog_id'])) {

            $categoryblog_id = $_POST['categoryblog_id'];

            $data = $this->db->table('list_blog')->where('id', '=', $categoryblog_id)->delete();

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
