<?php
class Acccout extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->render('client/acccout/login');
    }

    public function login()
    {
        if (isset($_POST['login']) && $_POST['login']) {
            $user = $_POST['username'];
            $pass = md5($_POST['password']);
            $checkuser = $this->db->table('customer')->where('user', '=', $user)->where('pass', '=', $pass)->where('active', '=', '1')->first();
            if (is_array($checkuser)) {
                $_SESSION['user'] = $checkuser;
                $response = new Response();
                $response->redirect('home');
            } else {
                Session::flash('msg', 'Tài Khoản Hoặc Mật Khẩu Không Chính Xác');
                $response = new Response();
                $response->redirect('login');
            }
        }
    }

    public function register()
    {
        $this->render('client/acccout/register');
    }

    public function dk()
    {
        // if (isset($_POST['dang_ky'])) {
        //     $user = trim($_POST['username']);
        //     $pass = trim(md5($_POST['password']));
        //     $repassword = trim(md5($_POST['repassword']));
        //     $name = trim($_POST['name']);
        //     $email = trim($_POST['email']);

        //     if ($user != "" || $pass != "" || $repassword != "" || $name != "" || $email != "") {
        //         if ($pass == $repassword) {
        //             $data = [
        //                 'user' => $user,
        //                 'pass' => $pass,
        //                 'name' => $name,
        //                 'email' => $email
        //             ];
        //             $this->db->table('customer')->insert($data);
        //             echo "True";
        //         } else if ($pass != $repassword) {
        //             echo "sairepass";
        //         }
        //     } else if ($user === "" || $pass === "" || $repassword === "" || $name === "" || $email === "") {
        //         echo "false";
        //     }
        // }
        if (isset($_POST['signup']) && $_POST['signup']) {



        $user = $_POST['username'];
        $pass = md5($_POST['password']);
        $repassword = $_POST['repassword'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        $data = [
            'user' => $user,
            'pass' => $pass,
            'name' => $name,
            'email' => $email
        ];

            $this->db->table('customer')->insert($data);
            $response = new Response();
            $response->redirect('login');
            // header('refresh: 3; url=index.php?act=login');
        }
    }


    public function logout()
    {
        if (isset($_SESSION['user'])) {
            session_destroy();
            unset($_SESSION['user']);
        }
        $response = new Response();
        $response->redirect('home');
    }
}
