<?php
class Cart extends Controller
{

    public $data = [];

    public function __construct()
    {
    }

    public function index()
    {
        $list_order = $this->db->table('oder')->orderBy('id', 'DESC')->get();
        $this->data['page_title'] = 'Hoá Đơn';
        $this->data['content'] = 'admin/cart/list';
        $this->data['sub_content']['page_title'] = 'Hoá Đơn';
        $this->data['sub_content']['list_order'] = $list_order;
        $this->render('layouts/admin_layout', $this->data);
    }

    public function update($id)
    {
        // $order = $this->db->table('oder')->join('order_detail', 'oder.id=order_detail.id_order')->where('oder.id', '=', $id)->first();
        $order = $this->db->query("SELECT * FROM `oder` INNER JOIN order_detail ON oder.id=order_detail.id_order WHERE oder.id=$id")->fetch(PDO::FETCH_ASSOC);
        $product = $this->db->query("SELECT order_detail.*,product.name FROM `order_detail` INNER JOIN product ON order_detail.id_prod=product.id WHERE id_order=$id")->fetchAll(PDO::FETCH_ASSOC);
        $this->data['page_title'] = 'Cập Nhật Hoá Đơn';
        $this->data['sub_content']['order'] = $order;
        $this->data['sub_content']['product'] = $product;
        $this->data['content'] = 'admin/cart/update';
        $this->data['sub_content']['title'] = 'Cập Nhật Hoá Đơn';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function update_cart($id)
    {
        if (isset($_POST['update']) && ($_POST['update'])) {

            $status = $_POST['status'];

            $data = [
                'status' => $status
            ];

            $this->db->table('oder')->where('id', '=', $id)->update($data);
            $response = new Response();
            $response->redirect('admin/cart');
        }
    }

    public function delete()
    {
        if (isset($_POST['cart_id'])) {

            $cart_id = $_POST['cart_id'];

            $data = $this->db->table('oder')->where('id', '=', $cart_id)->delete();

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
