<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ThanhToan extends CI_Controller
{
    function __construct()
    {
        // parent::__construct();

        // $this->load->library('session');

        $this->load->model('ThanhToan_model');
    }

    public function paypal()
    {
    	$list_details_item = $this->input->post('list_details_item');
    	$data['name'] = $this->input->post('cus_name');
        $data['address'] = $this->input->post('cus_address');
        $data['phone'] = $this->input->post('cus_phone');
        $data['note'] = $this->input->post('cus_note');

        $data['id'] = trim($this->input->post('id_items')," ");
        $data['quantity'] = trim($this->input->post('quantity_items')," ");

        $status = $this->uri->segment(3);

        if($status == "success"){
            $this->ThanhToan_model->saveOrder("paypal", "paid", $data);
            $this->session->sess_destroy();
        }
        else{
            $this->ThanhToan_model->saveOrder("paypal", "unpaid", $data);
        }
    }
}