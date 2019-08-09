<?php

class GioHang_model extends CI_Model
{
    public function getAllById($id)
    {
        $query = $this->db->select('*')->from('product')->where('id', $id)->get();
        return $query->result_array();
    }
}

?>