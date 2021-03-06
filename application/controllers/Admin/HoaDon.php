<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HoaDon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Admin/HoaDon_model');

        if(!$this->session->userdata('logged_in')) {
            redirect(site_url('admin/signin'));
        }
    }

    public function index()
    {
    	$template['page_child1'] = "Hóa đơn";
    	$template['page_child2'] = "";
        $template['page'] = 'Admin/HoaDon/view';
        $template['data'] = $this->HoaDon_model->getAll();
        $this->load->view('Admin/template', $template);
    }

    public function view()
    {
        $id = $this->input->post('id');
        $data = $this->HoaDon_model->detailById($id)[0];
        echo json_encode($data);
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->HoaDon_model->deleteById($id);
    }
}
