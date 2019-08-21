<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HoaDon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Admin/HoaDon_model');
    }

    public function index()
    {
    	$template['page_child1'] = "Hóa đơn";
    	$template['page_child2'] = "";
        $template['page'] = 'Admin/HoaDon/view';
        $template['data'] = $this->HoaDon_model->getAll();
        $this->load->view('Admin/template', $template);
    }

}
