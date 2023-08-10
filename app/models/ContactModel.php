<?php 
    class ContactModel extends Model
    {
    
	public function tableFill() {
        return 'contact';
	}
	
	public function fieldFill() {
        return '*';
    }
    
	public function primaryKey() {
        return 'id';
    }

    function loadone_thongtinchung(){
        // $sql="SELECT * FROM `contact_info` where id=1";
        $data = $this->db->table('contact')->where('id','=','1')->first();
        return $data;
    }

}
