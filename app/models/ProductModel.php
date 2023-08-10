<?php 

class ProductModel extends Model
{

    function tableFill()
    {
        return 'product';
    }

    function fieldFill()
    {
        return '*';
    }

    function primaryKey()
    {
       return 'id';
    }

    function loadallcategory(){
        $data = $this->db->table('list_product')->get();
        return $data;
    }

    function loadall_sanpham_new(){
        $data = $this->db->query("SELECT * FROM product ORDER BY id DESC LIMIT 4")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function loadall_sanpham(){
        $data = $this->db->table('product')->get();
        return $data;
    }

    function loadall_sanpham_dm($id){
        $data = $this->db->table('product')->where('id_list_prod','=',$id)->get();
        return $data;
    }    

    function loadone_sanpham($id){

        $data = $this->db->table('product')->join('list_product','product.id_list_prod=list_product.id')->where('product.id','=',$id)->first();

        // $sql="SELECT product.*,list_product.namelistpro FROM `product` inner join `list_product` on product.id_list_prod=list_product.id WHERE product.id= $id";
        // $sql_luotxem="UPDATE `product` SET view=view+1 WHERE id=$id;";
        // $this->db->table('product')->where('id','=',$id)->update('view','view+1');
        // $this->db->query('UPDATE `product` SET view=view+1 WHERE id=$id;');
       return $data;
    }

    // function load_sanpham_cungloai($id,$idloai){
    
    //     $data = $this->query("SELECT * FROM `product` WHERE id_list_prod =".$idloai."  AND id <> ".$id)->fetchAll(PDO::FETCH_ASSOC);
    //     return $data;
    // }

}

?>