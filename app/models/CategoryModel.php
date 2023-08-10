<?php

class CategoryModel extends Model
{

    function tableFill()
    {
        return 'list_product';
    }

    function fieldFill()
    {
        return '*';
    }

    function primaryKey()
    {
        return 'id';
    }

    function getCategory(){
        $data= $this->db->table('list_product')->get();
        return $data;
    }

}