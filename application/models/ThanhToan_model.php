<?php

class ThanhToan_model extends CI_Model
{
    public function saveOrder($type, $status = "", $data)
    {
        $array = array(
		   'cus_name' => $data['name'] ,
		   'cus_address' => $data['address'] ,
		   'cus_phone' => $data['phone'] ,
		   'cus_note' => $data['note'] ,
		   'method' => $type ,
		   'status' => $status ,
		   'id_items' => $data['id'] ,
		   'quantity_items' => $data['quantity'] ,
		   'created_date' => date('Y-m-d H:i:s') ,
		);
		$this->db->insert('booking', $array); 
    }
}

?>