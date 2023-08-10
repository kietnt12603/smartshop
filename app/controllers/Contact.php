<?php 
    class Contact extends Controller
    {
        public $data=[];
        public function __construct()
        {
              
        }

        public function index()
        {
            // $thongtinchung1 = $this->model('ContactModel')->loadone_thongtinchung();
            $dsdm=$this->db->table('list_product')->get();
            $thongtinchung1 = $this->db->table('contact_info')->where('id','=','1')->first();
            $this->data['page_title'] = 'Liên Hệ';
            $this->data['dsdm'] = $dsdm;
            $this->data['sub_content']['page_title'] = 'Liên Hệ';
            $this->data['content'] = 'client/contact';
            $this->data['sub_content']['thongtinchung1'] = $thongtinchung1;
            $this->render('layouts/client_layout',$this->data);
        }

        public function lienhe()
        {
            // if(isset($_POST['guiphanhoi'])&&($_POST['guiphanhoi'])){
            //     if(isset($_SESSION['user'])){
            //         $iduser=$_SESSION['user']['id'];
            //     }else{
            //     $iduser=0;
            //     }
            //     $name=$_POST['name'];
            //     $email=$_POST['email'];
            //     $content=$_POST['content'];
            //     // insert_lienhe($iduser,$name,$email,$content);
            //     $thanhcong='<div style="background: #b1ffc3;">
            //     <p style="text-align: center; line-height: 40px; font-size: large; color: black;">Cảm Ơn Bạn Đã Liên Hệ Với Chúng Tôi</p>
            // </div>';
            //     // header("refresh:4; index.php?act=lienhe");
            // }

            if (isset($_POST['lien_he'])) {

                if(isset($_SESSION['user'])){
                    $iduser = $_SESSION['user']['id'];
                }else{
                    $iduser = 0;
                }

                $name=$_POST['name'];
                $email=$_POST['email'];
                $content=$_POST['content'];
    
                $data = [
                    'name' => $name,
                    'email' => $email,
                    'content' => $content,
                    'iduser' => $iduser
                ];
    
                $status = $this->db->table('contact')->insert($data);
    
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

    }
