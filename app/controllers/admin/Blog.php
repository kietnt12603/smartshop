<?php

class Blog extends Controller
{
    public $data = [];

    public function index()
    {
        $this->data['page_title'] = 'Bài Viết';
        $this->data['sub_content']['blog_all'] = $this->db->table('blog')->get();
        $this->data['sub_content']['categoryblog_all'] = $this->db->table('list_blog')->get();
        $this->data['sub_content']['title'] = 'Danh Sách Bài Viết';
        $this->data['content'] = 'admin/baiviet/list';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function search()
    {
        if (isset($_POST['keywords'])) {
            $keywords = $_POST['keywords'];
            // $products=[];
            if ($keywords == "") {
                $result = $this->db->table('blog')->get();
            } else {
                $result = $this->db->table('blog')->whereLike('title', '%' . $keywords . '%')->get();
            }

            if ($result) {
                $i=1;
                foreach ($result as $item) {
                    extract($item);
?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td style="max-width: 350px;"><?= $title ?></td>
                        <td><img src="<?php echo _WEB_ROOT ?>/public/uploads/<?php echo $img; ?>" height="80px"></td>
                        <!-- <td><?= $describe ?></td> -->
                        <td><?= $view ?></td>
                        <td><?= $date ?></td>
                        <td><?= $id_list_blog ?></td>
                        <td>
                            <button type="button" value="<?= $id ?>" class="editBlogBtn btn btn-success">Edit</button>
                            <button type="button" value="<?= $id ?>" class="deleteBlogBtn btn btn-danger">Delete</button>
                        </td>
                    </tr>
<?php }
            }
        }
    }

    public function add()
    {
        $this->data['page_title'] = 'Thêm Bài Viết';
        $this->data['sub_content']['blog_all'] = $this->db->table('blog')->get();
        $this->data['sub_content']['categoryblog_all'] = $this->db->table('list_blog')->get();
        $this->data['content'] = 'admin/baiviet/add';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function insert_blog()
    {

        if (isset($_POST['save_blog'])) {
            $ten_baiviet = $_POST['ten_baiviet'];
            $mo_ta = $_POST['mo_ta'];
            $mo_ta_ct = $_POST['mo_ta_ct'];
            $idloaiblog = $_POST['idloaibv'];
            $name_img = $_FILES['hinh']['name'];
            $source_img = $_FILES['hinh']['tmp_name'];
            $path_img = "./public/uploads/" . $name_img;
            move_uploaded_file($source_img, $path_img);

            $data = [
                '`title`' => $ten_baiviet,
                '`img`' => $name_img,
                '`describe`' => $mo_ta,
                '`describe_detail`' => $mo_ta_ct,
                '`id_list_blog`' => $idloaiblog,
            ];

            $status = $this->db->table('blog')->insert($data);

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

            $data = $this->db->table('blog')->where('id', '=', $student_id)->first();
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

    public function update_blog()
    {

        if (isset($_POST['update_blog']) && ($_POST['update_blog'])) {
            $id = $_POST['blog_id'];
            $ten_baiviet = $_POST['ten_baiviet'];
            $mo_ta = $_POST['mo_ta'];
            $mo_ta_ct = $_POST['mo_ta_ct'];
            $idloaiblog = $_POST['idloaibv'];
            $name_img = $_FILES['hinh']['name'];
            $source_img = $_FILES['hinh']['tmp_name'];
            $path_img = "./public/uploads/" . $name_img;
            move_uploaded_file($source_img, $path_img);

            if ($name_img != '') {
                $data = [
                    '`title`' => $ten_baiviet,
                    '`img`' => $name_img,
                    '`describe`' => $mo_ta,
                    '`describe_detail`' => $mo_ta_ct,
                    '`id_list_blog`' => $idloaiblog,
                ];
            } else {
                $data = [
                    '`title`' => $ten_baiviet,
                    '`describe`' => $mo_ta,
                    '`describe_detail`' => $mo_ta_ct,
                    '`id_list_blog`' => $idloaiblog,
                ];
            }

            $data = $this->db->table('blog')->where('id', '=', $id)->update($data);
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

    public function delete_blog()
    {

        if (isset($_POST['blog_id'])) {

            $blog_id = $_POST['blog_id'];

            $data = $this->db->table('blog')->where('id', '=', $blog_id)->delete();

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
