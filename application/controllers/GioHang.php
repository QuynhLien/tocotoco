<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GioHang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('session');

        $this->load->model('GioHang_model');
    }

    public function index()
    {
        $template['page'] = 'GioHang/gio_hang';
        $template['page_title'] = "Giỏ hàng";
        $template['page_parent'] = "Giỏ hàng";
        $template['page_child1'] = "";
        $template['page_child2'] = "";
        $template['menu'] = "";
        $template['data'] = "";

        $session = $this->session->userdata();
        if($session) {
        	// print_r($session);
        	$i = 0;
            $template['data'] = [];
        	foreach ($session as $key => $value) {
        		if(substr_count($key,"cart_")) {
        			$id = trim($key,"cart_");
        			$template['data'][] = $this->GioHang_model->getAllById($id)[0];
        			$template['data'][$i++]['amount'] = $value;
        		}
        	}
        }
        // print_r($template['data']);

        $this->load->view('template', $template);
    }

    public function addCart()
    {
    	// $this->session->sess_destroy();
    	$id = isset($_POST['id']) ? $_POST['id'] : "";
    	$amount = isset($_POST['amount']) ? $_POST['amount'] : "";
    	$this->session->set_userdata('cart_'.$id,$amount);
        echo "true";
    }

    public function minusCart()
    {
    	$id = isset($_POST['id']) ? $_POST['id'] : "";
    	$this->session->unset_userdata('cart_'.$id);
        echo "true";
    }
}
