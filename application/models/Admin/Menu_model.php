<?php

class Menu_model extends CI_Model
{
    public function check($email, $password)
    {
        $this->db->where(['email' => $email, 'password' => $password]);
	    $query = $this->db->get('account_admin');
	    if ($query -> num_rows() == 1)
	    	return $query->result();
		else
			return false;
	}
}

?>