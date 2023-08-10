<?php
    class CartModel extends Model
    {
	public function tableFill() {
	}
	
	public function fieldFill() {
	}
	
	public function primaryKey() {
	}


    public function insert_bill($data){
        $this->db->table('oder')->insert($data);
        return $this->db->lastId();
    }
    public function insert_bill_vnpay($data){
        $this->db->table('oder')->insert($data);
        return $this->db->lastId();
    }

}
