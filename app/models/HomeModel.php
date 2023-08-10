<?php
class HomeModel extends Model
{
//    private $__table = 'sach';

    function tableFill()
    {
        return 'sach';
    }

    function fieldFill()
    {
        return '*';
    }

    function primaryKey()
    {
        return 'MaSach';
    }

    function loadallcategory(){
        $data = $this->db->table('list_product')->get();
        return $data;
    }

    function loadallsphome(){
        $data = $this->db->table('product')->join('list_product','product.id_list_prod = list_product.id')->select('product.*,list_product.filter')->get();
        return $data;
    }

    function loadall_sanpham_new(){
        $data = $this->db->query("SELECT * FROM product ORDER BY id DESC LIMIT 4")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function loadall_sanpham_hot(){
        $data= $this->db->query("SELECT * FROM product ORDER BY view DESC LIMIT 4")->fetchAll(PDO::FETCH_ASSOC);
        // $sql="SELECT * FROM product ORDER BY view DESC LIMIT 4;";
        return $data;
    }

    function loadall_sanpham_km(){
        $data =$this->db->query("SELECT * FROM product WHERE price_sale>0 ORDER BY price_sale DESC LIMIT 4")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function loadall_baiviet_new(){
        $data= $this->db->query("SELECT * FROM blog ORDER BY id DESC LIMIT 3")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}
