<?php

class Login extends Controller
{
    public $data = [];
    public $model_login;
    public function __construct()
    {
        $this->model_login = $this->model('LoginModel');
    }

    public function index(){
        $this->render('admin/login/index');
    }

    public function login(){
        if (isset($_POST['login']) && $_POST['login']) {
            $user = $_POST['username'];
            $pass = md5($_POST['password']);
            $checkuser = $this->db->table('user')->where('user','=', $user)->where('password','=', $pass)->where('active', '=' , '1' )->first();
            if (is_array($checkuser)) {
                $_SESSION['useradmin'] = $checkuser;
                $response = new Response();
                $response->redirect('admin/dashboard');
            }else{
                Session::flash('msg','Tài Khoản Hoặc Mật Khẩu Không Chính Xác');
                $response = new Response();
                $response->redirect('admin/login');
            }
        }
    }

    public function logout(){
        if (isset($_SESSION['useradmin'])) {
            session_destroy();
            unset($_SESSION['useradmin']);
        }
            $response = new Response();
            $response->redirect('admin/login');
    }

}