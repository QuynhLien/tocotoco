<?php

class Home_model extends CI_Model
{
    public function getAllType()
    {
        $query = $this->db->get('type');
        $result = $query->result();
        return $result;
    }
}

?>