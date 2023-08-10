<?php
class Cart extends Controller
{
    public $data = [], $cart;
    public function __construct()
    {
        $this->cart = $this->model('CartModel');
        // $this->dsdm = $this->model('ProductModel')->loadallcategory();
    }
    public function index()
    {
        $dsdm = $this->db->table('list_product')->get();
        // $tong = 0;
        // foreach ($_SESSION['mycart'] as $cart) {
        //     $tt = $cart['price'] * $cart['quanlity'];
        //     $tong += $tt;
        // }
        // $tongdon = $tong + 20000;
        // return $tong;
        $this->data['page_title'] = "Giỏ Hàng";
        $this->data['content'] = 'client/cart/viewcart';
        $this->data['dsdm'] = $dsdm;
        // $this->data['sub_contebt']['tong'] =$tong;
        // $this->data['sub_contebt']['tongdon'] =$tongdon;
        $this->data['sub_content']['page_title'] = 'Giỏ Hàng';
        $this->render('layouts/client_layout', $this->data);
    }

    public function addtocart()
    {
        if (isset($_POST['id'])) {
            $id = (int)$_POST['id'];
            $product_byid = $this->db->table('product')->where('id', '=', $id)->first();
            extract($product_byid);
            if (empty($_SESSION['mycart'])) {
                $_SESSION['mycart'] = [];
                $_SESSION['mycart'][$id] = array(
                    'id' => $id,
                    'name' => $name,
                    // 'price' => $price,
                    'price' => ($price_sale > 0) ? $price_sale : $price,
                    'img' => $img,
                    'quanlity' => $soluong = 1,
                    // 'total' => $soluong*$price
                    // 'total' => ($soluong * ($price_sale>0)? $price_sale : $price)
                );
            } else {
                if (isset($_SESSION['mycart'][$id])) {
                    $_SESSION['mycart'][$id]["quanlity"] += 1;
                } else {
                    $_SESSION['mycart'][$id] = array(
                        'id' => $id,
                        'name' => $name,
                        // 'price' => $price,
                        'price' => ($price_sale > 0) ? $price_sale : $price,
                        'img' => $img,
                        'quanlity' => $soluong = 1,
                        // 'total' => $soluong*$price
                        // 'total' => ($soluong * ($price_sale>0)? $price_sale : $price)
                    );
                }
            }
        }
    }

    public function delcart()
    {
        if (isset($_SESSION['mycart'])) {
            if (isset($_POST['idcart'])) {
                array_splice($_SESSION['mycart'], $_POST['idcart'], 1);
            }
        }
    }

    public function updatecart()
    {
        $id = $_POST['id'];
        // $quanlity = $_POST['quanlity'];
        $type = $_POST['type1'];
        if ($type === 'decre') {
            if ($_SESSION['mycart'][$id]['quanlity'] > 1) {
                $_SESSION['mycart'][$id]['quanlity']--;
            } else {
                unset($_SESSION['mycart'][$id]);
            }
        } else {
            $_SESSION['mycart'][$id]['quanlity']++;
        }
    }
    public function updatecartsl()
    {
        $id = $_POST['id'];
        $quanlity = $_POST['quanlity'];
        if ($quanlity > 0) {
            $_SESSION['mycart'][$id]['quanlity'] = $quanlity;
        }
    }

    public function addOrder()
    {
        if (isset($_POST['pttt'])) {
            $payment = $_POST['pttt'];
            if ($payment == 'Trả tiền khi nhận hàng') {
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = 0;
                }
                $name = $_POST['name'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $pttt = $_POST['pttt'];

                $tongdonhang = $_POST['tongdon'];

                $data = [
                    'id_cus' => $iduser,
                    'name_cus' => $name,
                    'phone_cus' => $tel,
                    'email_cus' => $email,
                    'address_cus' => $address,
                    'payment' => $pttt,
                    'total' => $tongdonhang,
                ];

                $id_order =  $this->cart->insert_bill($data);

                // $this->db->table('oder')->insert($data)->lastId();



                // $idbill = insert_bill($iduser, $pttt, $tongdonhang, $name, $tel, $email, $address);
                foreach ($_SESSION['mycart'] as $cart) {
                    $data1 = [
                        'price' => $cart['price'],
                        'quanlity' => $cart['quanlity'],
                        'id_prod' => $cart['id'],
                        'id_order' => $id_order
                    ];
                    $this->db->table('order_detail')->insert($data1);
                }
            }
        }
        $_SESSION['mycart'] = [];
    }

    public function checkmybill($id)
    {
        $listBill1 = $this->db->query("SELECT * FROM `oder` where oder.id_cus = $id order by pay_date desc")->fetchAll(PDO::FETCH_ASSOC);
        $this->data['page_title'] = 'Đơn Hàng Của Tôi';
        $this->data['content'] = 'client/cart/checkmybill';
        $this->data['sub_content']['listBill1'] = $listBill1;
        $this->render('layouts/client_layout', $this->data);
    }

    public function billDetail($id)
    {
        $listBill = $this->db->query("SELECT product.*,order_detail.*, oder.* FROM `product` INNER JOIN order_detail ON product.id = order_detail.id_prod INNER JOIN oder on oder.id = order_detail.id_order where oder.id = $id")->fetchAll(PDO::FETCH_ASSOC);
        $this->data['page_title'] = 'Cập Nhật Đơn Hàng Của Tôi';
        $this->data['content'] = 'client/cart/billDetail';
        $this->data['sub_content']['listBill'] = $listBill;
        $this->render('layouts/client_layout', $this->data);
    }

    public function huyhoadon()
    {
        // $id=$_POST['id'];
        // $this->db->query("UPDATE `oder` SET `status`=5 WHERE id=$id");
        // header("Location: index.php?act=checkMyBill&id=$id_cus");

        if (isset($_POST['cart_id'])) {

            $cart_id = $_POST['cart_id'];

            $data = $this->db->query("UPDATE `oder` SET `status`=5 WHERE id=$cart_id");

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
