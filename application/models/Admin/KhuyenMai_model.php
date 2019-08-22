<?php

class KhuyenMai_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM subcribes");
        return $query->result();
	}
	
	public function getSubcribes()
    {
    	$query = $this->db->get('subcribes');
        return $query->result_array();
    }
}

?>