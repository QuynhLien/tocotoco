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
		   'image' => 'template/images/menu/'.$file ,
		   'slug' => $slug ,
		   'h1' => 'Tổng hợp các loại '.strtolower($name) ,
		   'alt_img' => $name ,
		   'title_img' => $name ,
		);
		$this->db->insert('type', $array); 
	}

	public function editMenu($name, $slug, $id, $file="")
	{
		if($file){
			$array = array(
				'name_type' => $name ,		   
				'slug' => $slug ,
				'h1' => 'Tổng hợp các loại '.strtolower($name) ,
				'alt_img' => $name ,
				'title_img' => $name ,		
				'image' => 'template/images/menu/'.$file
			);
		}else{
			$array = array(
			   'name_type' => $name ,		   
			   'slug' => $slug ,
			   'h1' => 'Tổng hợp các loại '.strtolower($name) ,
			   'alt_img' => $name ,
			   'title_img' => $name				
			);
		}
		
		$this->db->update('type', $array, 'id='.$id); 
	}
}

?>