<?php

class User extends Controller
{
    public $data = [];
    public function __construct()
    {
        $model_User = $this->model('UserModel');
    }

    public function index()
    {
        $user = $this->db->table('user')->get();
        $this->data['page_title'] = 'Nhân Viên';
        $this->data['sub_content']['user_all'] = $user;
        $this->data['sub_content']['title'] = 'Danh Sách Nhân Viên';
        $this->data['content'] = 'admin/nhanvien/list';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function search()
    {
        if (isset($_POST['keywords'])) {
            $keywords = $_POST['keywords'];
            // $products=[];
            if ($keywords == "") {
                $result = $this->db->table('user')->get();
            } else {
                $result = $this->db->table('user')->whereLike('user', '%' . $keywords . '%')->get();
            }

            if ($result) {
                foreach ($result as $item) {
                    extract($item);
?>
                    <tr>
                        <td><?php echo $user ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php if ($phone == '') {
                                echo 'Không có';
                            } else {
                                echo $phone;
                            }
                            ?></td>
                        <td><?php echo ($role == 1) ? 'Nhân Viên' : 'Admin' ?></td>
                        <td><?php echo ($active == 0) ? 'Khoá' : 'Kích Hoạt' ?></td>
                        <td>
                            <?php
                            if ($role == 1) { ?>
                                <button type="button" value="<?= $id ?>" class="editUserBtn btn btn-success">Edit</button>
                                <button type="button" value="<?= $id ?>" class="deleteUserBtn btn btn-danger">Delete</button>
                            <?php } else { ?>
                                <button disabled="disabled" class="btn btn-default">Đây Là Tài Khoản Admin</button>
                            <?php } ?>
                        </td>
                    </tr>
<?php }
            }
        }
    }

    public function add()
    {
        $this->data['page_title'] = 'Thêm Nhân Viên';
        $this->data['sub_content'][''] = null;
        $this->data['sub_content']['title'] = 'Thêm Nhân Viên';
        $this->data['content'] = 'admin/nhanvien/add';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function insert_user()
    {

        if (isset($_POST['save_user'])) {
            $email = $_POST['email'];
            $user = $_POST['user'];
            $pass = md5($_POST['pass']);
            $name = $_POST['name'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $active = $_POST['active'];
            $role = $_POST['role'];

            $data = [
                '`email`' => $email,
                '`user`' => $user,
                '`password`' => $pass,
                '`name`' => $name,
                '`address`' => $address,
                '`phone`' => $tel,
                '`active`' => $active,
                '`role`' => $role
            ];

            $status = $this->db->table('user')->insert($data);

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

            $data = $this->db->table('user')->where('id', '=', $student_id)->first();
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



        // $this->data['page_title'] = 'Cập Nhật Nhân Viên';
        // $this->data['sub_content']['user_one'] = $this->db->table('user')->where('id', '=', $id)->first();
        // $this->data['sub_content']['title'] = 'Sửa Nhân Viên';
        // $this->data['content'] = 'admin/nhanvien/update';
        // $this->render('layouts/admin_layout', $this->data);
    }

    public function update_User()
    {

        if (isset($_POST['update_user']) && ($_POST['update_user'])) {
            $email = $_POST['email'];
            $user = $_POST['user'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $active = $_POST['active1'];
            $role = $_POST['role1'];
            $id = $_POST['user_id'];

            $data = [
                '`email`' => $email,
                '`user`' => $user,
                '`name`' => $name,
                '`address`' => $address,
                '`phone`' => $tel,
                '`active`' => $active,
                '`role`' => $role
            ];

            $data = $this->db->table('user')->where('id', '=', $id)->update($data);
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

    public function delete_user()
    {

        if (isset($_POST['user_id'])) {

            $id = $_POST['user_id'];

            $data =  $this->db->table('user')->where('id', '=', $id)->delete();

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

    public function profile($id)
    {
        $this->data['page_title'] = 'Profile';
        $user = $this->db->table('user')->where('id', '=', $id)->first();
        $this->data['sub_content']['user_one'] = $user;
        $this->data['sub_content']['title'] = 'Profile';
        $this->data['content'] = 'admin/nhanvien/profile';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function updateprofile()
    {

        if (isset($_POST['update_Profile']) && ($_POST['update_Profile'])) {
            $email = $_POST['email'];
            $user = $_POST['user'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $id = $_SESSION['useradmin']['id'];
            $name_img = $_FILES['hinh']['name'];
            $source_img = $_FILES['hinh']['tmp_name'];
            $path_img = "./public/uploads/" . $name_img;
            move_uploaded_file($source_img, $path_img);

            if ($name_img != '') {
                $data = [
                    '`user`' => $user,
                    '`email`' => $email,
                    '`name`' => $name,
                    '`address`' => $address,
                    '`phone`' => $tel,
                    'image' => $name_img
                ];
            } else {
                $data = [
                    '`user`' => $user,
                    '`email`' => $email,
                    '`name`' => $name,
                    '`address`' => $address,
                    '`phone`' => $tel,
                ];
            }

            $data = $this->db->table('user')->where('id', '=', $id)->update($data);
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

            // $response = new Response();
            // $response->redirect('admin/profile/' . $_SESSION['useradmin']['id']);
        }
    }

    public function changepass($id)
    {
        $user = $this->db->table('user')->where('id', '=', $id)->first();
        $this->data['page_title'] = 'Đổi Mật Khẩu';
        $this->data['sub_content']['title'] = 'Đổi Mật Khẩu';
        $this->data['sub_content']['user_one'] = $user;
        $this->data['content'] = 'admin/nhanvien/changepass';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function up_changepass()
    {
        if (isset($_POST['change_pass'])) {
            $passcu = md5($_POST['passcu']);
            $passmoi = md5($_POST['passmoi']);
            $repassmoi = md5($_POST['repassmoi']);
            $id = $_SESSION['useradmin']['id'];
            $checkpasscu = $this->db->query("SELECT password FROM `user` WHERE password='$passcu' AND id='$id'")->fetch(PDO::FETCH_ASSOC);
            
            if($passmoi!=""||$passmoi!=""||$repassmoi!=""){
                if ($passmoi === $repassmoi) {
                    if (is_array($checkpasscu)) {
                        $data = [
                            'password' => $passmoi,
                        ];
                        $this->db->table('user')->where('id', '=', $id)->update($data);
                        echo 'true';
                    } else {
                        echo 'flase';
                    }
                } else {
                    echo 'sairepass';
                }
            }

        }
    }

    // public function up_changepass($id)
    // {
    //     if (isset($_POST['updatemk']) && ($_POST['updatemk'])) {
    //         $passcu = md5($_POST['passcu']);
    //         $passmoi = md5($_POST['passmoi']);
    //         $repassmoi = md5($_POST['repassmoi']);
    //         $id = $_SESSION['useradmin']['id'];
    //         // $checkpasscu = checkpasscu($passcu, $id);

    //         $checkpasscu = $this->db->query("SELECT password FROM `user` WHERE password='$passcu' AND id='$id'")->fetch(PDO::FETCH_ASSOC);

    //         if (is_array($checkpasscu)) {
    //             // update_taikhoan4($id, $passmoi);
    //             $data = [
    //                 'password' => $passmoi,
    //             ];
    //             $this->db->table('user')->where('id', '=', $id)->update($data);
    //             $thanhcong = "Đổi Mật Khẩu Thành Công";
    //             $response = new Response();
    //             $response->redirect('admin/profile/changepass/' . $id);
    //             // $url = _WEB_ROOT.'/admin/logout';
    //             // header('refresh:5; '.$url.'');
    //         } else {
    //             $thatbai = "Mật Khẩu Cũ Không Đúng";
    //             // header('refresh:3; index.php?act=suamk');
    //         }
    //     }
    // }

}
