<?php

class Customer extends Controller
{
    public $data = [], $model_Customer;
    public function __construct()
    {
        $this->model_Customer = $this->model('CustomerModel');
    }

    public function index()
    {
        $customer = $this->db->table('customer')->get();
        $this->data['page_title'] = 'Khách Hàng';
        $this->data['sub_content']['title'] = 'Danh Sách Khách Hàng';
        $this->data['sub_content']['customer_all'] = $customer;
        $this->data['content'] = 'admin/khachhang/list';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function search()
    {
        if (isset($_POST['keywords'])) {
            $keywords = $_POST['keywords'];
            // $products=[];
            if ($keywords == "") {
                $result = $this->db->table('customer')->get();
            } else {
                $result = $this->db->table('customer')->whereLike('user', '%' . $keywords . '%')->get();
            }

            if ($result) {
                foreach ($result as $item) {
                    extract($item);
?>
                    <tr>
                        <td><?php echo $user ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php if ($tel == '') {
                                echo 'Không có';
                            } else {
                                echo $tel;
                            }
                            ?></td>
                        <td><?php echo ($active == 0) ? 'Khoá' : 'Kích Hoạt' ?></td>
                        <td>
                            <button type="button" value="<?= $id ?>" class="editCustomerBtn btn btn-success">Edit</button>
                            <button type="button" value="<?= $id ?>" class="deleteCustomerBtn btn btn-danger">Delete</button>
                        </td>
                    </tr>
<?php }
            }
        }
    }

    public function add()
    {
        $this->data['page_title'] = 'Thêm Khách Hàng';
        $this->data['sub_content']['title'] = 'Thêm Khách Hàng';
        $this->data['content'] = 'admin/khachhang/add';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function insert_customer()
    {

        if (isset($_POST['save_customer'])) {
            $email = $_POST['email'];
            $user = $_POST['user'];
            $pass = md5($_POST['pass']);
            $name = $_POST['name'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $active = $_POST['active'];

            $data = [
                '`email`' => $email,
                '`user`' => $user,
                '`pass`' => $pass,
                '`name`' => $name,
                '`address`' => $address,
                '`tel`' => $tel,
                '`active`' => $active,
            ];

            $status = $this->db->table('customer')->insert($data);

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

            $data = $this->db->table('customer')->where('id', '=', $student_id)->first();
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

    public function update_Customer()
    {

        if (isset($_POST['update_customer']) && ($_POST['update_customer'])) {
            $email = $_POST['email'];
            $user = $_POST['user'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $active = $_POST['active1'];
            $id = $_POST['customer_id'];

            $data = [
                '`email`' => $email,
                '`user`' => $user,
                '`name`' => $name,
                '`address`' => $address,
                '`tel`' => $tel,
                '`active`' => $active
            ];

            $data = $this->db->table('customer')->where('id', '=', $id)->update($data);
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

    public function delete_Customer()
    {
        if (isset($_POST['customer_id'])) {

            $id = $_POST['customer_id'];

            $data =  $this->db->table('customer')->where('id', '=', $id)->delete();

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
