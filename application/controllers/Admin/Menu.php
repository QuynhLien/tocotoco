<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Admin/Menu_model');
    }

    public function index()
    {
    	$template['page_child1'] = "Menu";
    	$template['page_child2'] = "";
        $template['page'] = 'Admin/Menu/view';
        $this->load->view('Admin/template', $template);
    }

}
