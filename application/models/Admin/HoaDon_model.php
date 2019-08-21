<?php

class HoaDon_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM booking");
        return $query->result();
	}
}

?>