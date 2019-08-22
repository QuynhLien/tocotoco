<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['data'] = $this->Home_model->getAllType();
        $this->load->view('home', $data);
    }

    public function addSubcribe()
    {
        $email = $this->input->post('email_sub');

        $exist = $this->Home_model->existEmailSub($email);
        if($exist){
            echo "fall";
        }
        else{
            $this->Home_model->addSubcribe($email);
            echo "true";
        }
    }
}
