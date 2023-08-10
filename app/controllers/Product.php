<?php 
    class Product extends Controller
    {
        public $data = [] , $model_product , $dsdm;

        public function __construct()
        {
            $this->model_product = $this->model('ProductModel');
            $this->dsdm = $this->model_product->loadallcategory();
        }

        public function index(){
            $spnew1 = $this->model_product->loadall_sanpham_new();
            $dssp = $this->model_product->loadall_sanpham();
            $this->data['content']="client/product/product";
            $this->data['page_title'] = 'Sản Phẩm';
            $this->data['dsdm']=$this->dsdm;
            $this->data['sub_content']['spnew1'] = $spnew1;
            $this->data['sub_content']['dsdm']=$this->dsdm;
            $this->data['sub_content']['dssp']=$dssp;
            $this->render('layouts/client_layout', $this->data);
        }

        public function detail($id){
            $this->data['sub_content']['product_one'] = $this->db->table('product')->where('id', '=', $id)->first();
            $this->db->query("UPDATE `product` SET view=view+1 WHERE id = $id");
            $this->data['content'] = "client/product/product_detail";
            $this->data['page_title'] = 'Sản Phẩm Chi Tiết';
            // $this->data['sub_content']['spcungloai']= $spcungloai;
            $this->data['dsdm']=$this->dsdm;
            $this->data['sub_content']['dsdm']=$this->dsdm;
            $this->data['sub_content']['page_title']= "Sản Phẩm Chi Tiết";
            $this->render('layouts/client_layout',$this->data);
        }

        public function product($id){
            $spnew1 = $this->model_product->loadall_sanpham_new();
            $dssp = $this->model_product->loadall_sanpham_dm($id);
            $this->data['content']="client/product/product";
            $this->data['page_title'] = 'Sản Phẩm';
            $this->data['dsdm']=$this->dsdm;
            $this->data['sub_content']['spnew1'] = $spnew1;
            $this->data['sub_content']['dsdm']=$this->dsdm;
            $this->data['sub_content']['dssp']=$dssp;
            $this->render('layouts/client_layout', $this->data);
        }
        

    }
?>