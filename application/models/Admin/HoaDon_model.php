<?php

class HoaDon_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM booking");
        return $query->result();
	}

	public function detailById($id)
	{
		$query = $this->db->where('id',$id)->get('booking');
        return $query->result_array();
	}

	public function deleteById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('booking');
	}
}

?>