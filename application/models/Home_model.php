<?php

class Home_model extends CI_Model
{
    public function getAllType()
    {
        $query = $this->db->query("SELECT * FROM type");
        return $query->result();
    }    

    public function addSubcribe($email)
    {
    	$array = array(
		   'email' => $email ,
		   'created_date' => date('Y-m-d H:i:s') ,
		);
		$this->db->insert('subcribes', $array); 
    }

    public function existEmailSub($email)
    {
    	$this->db->where('email',$email);
	    $query = $this->db->get('subcribes');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
    }
}

?>