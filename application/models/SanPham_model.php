<?php

class SanPham_model extends CI_Model
{
    public function getMenu()
    {
        $query = $this->db->query("SELECT * FROM type");
        return $query->result();
    }

    public function getIdAndNameType($type)
    {
        $query = $this->db->select('id, name_type')->from('type')->where('slug', $type)->get();
        return $query->result();
    }

    public function getAllByIdType($id_type)
    {
        $query = $this->db->select('product.*, type.name_type, type.slug as slug_type')->from('product')->join('type', 'type.id = product.id_type')->where('product.id_type', $id_type)->get();
        return $query->result();
    }

    public function getProd($slug_prod)
    {
        $query = $this->db->select('*')->from('product')->where('slug', $slug_prod)->get();
        return $query->result();
    }
}

?>