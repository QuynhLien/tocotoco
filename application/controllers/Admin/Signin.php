<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form'));
        $this->load->model('Admin/Signin_model');
    }

    public function index()
    {
		if(isset($_POST)) {
			$this->load->library('form_validation');			
			
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
			
			                  
			if($this->form_validation->run() == TRUE) {
				redirect(site_url('admin'));
			}			
			
		}

        $this->load->view('Admin/Signin/login');
    }

    function check_database($password) {
		$email = $this->input->post('email');
		$result = $this->Signin_model->check($email, $password);		
	
		if($result) {
			$sess_array = array();
			foreach($result as $row) {
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->first_name." ".$row->last_name,
					'level'=> $row->level,
					'img' => $row->img,
				);
				$this->session->set_userdata('logged_in',$sess_array);
				$this->session->set_userdata('admin',$row->level);
				$this->session->set_userdata('id',$row->id);
		    }
		    return TRUE;
		}
		else {
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}		
		
	}

	public function sign_out() {
		$this->session->sess_destroy();
		redirect(site_url('admin/signin'));
	}


}
