<?php

class Menu_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM type");
        return $query->result();
	}

	public function addMenu($name, $slug, $file)
	{
		$array = array(
		   'name_type' => $name ,
		   'image' => 'template/images/'.$file ,
		   'slug' => $slug ,
		   'h1' => 'Tổng hợp các loại '.strtolower($name) ,
		   'alt_img' => $name ,
		   'title_img' => $name ,
		);
		$this->db->insert('type', $array); 
	}
}

?>