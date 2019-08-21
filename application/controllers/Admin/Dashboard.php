<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in')) {
            redirect(site_url('admin/signin'));
        }
    }

    public function index()
    {
        $template['page_child1'] = "Dashboard";
        $template['page_child2'] = "";
        $template['page'] = 'Admin/Dashboard/index';
        $this->load->view('Admin/template', $template);
    }
}
