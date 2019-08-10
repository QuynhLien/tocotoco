<?php

class Home_model extends CI_Model
{
    public function getAllType()
    {
        $query = $this->db->get('type');
        return $query->result();
    }

    public function getSubcribes()
    {
    	$query = $this->db->get('subcribes');
        return $query->result_array();
    }

    public function addSubcribe()
    {
    	$email = $this->input->post('email_sub');
    	
    }
}

?>