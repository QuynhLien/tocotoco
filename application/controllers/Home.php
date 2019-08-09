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
}
