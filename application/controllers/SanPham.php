<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SanPham extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('session');

        $this->load->model('SanPham_model');
    }

    public function index()
    {
        $type = $this->uri->segment(2);
        $slug_prod = $this->uri->segment(3);
        $idname_type = [];
        $idname_type = $this->SanPham_model->getIdAndNameType($type)[0];
        if ($slug_prod) {
            $template['page'] = 'SanPham/details';
            $template['page_title'] = "Sản phẩm";
            $template['page_parent'] = "Sản phẩm";
            $template['page_child1'] = $idname_type->name_type;
            $template['menu'] = $this->SanPham_model->getMenu();
            $template['sp'] = $template['menu'];
            $template['data'] = $this->SanPham_model->getProd($slug_prod)[0];
            $template['page_child2'] = $template['data']->name_prod;
            $template['same'] = $this->SanPham_model->getProdRandom($template['data']->id_type, $template['data']->slug);
            $this->load->view('template', $template);
        } else {
            $template['page'] = 'SanPham/san_pham';
            $template['page_title'] = "Sản phẩm";
            $template['page_parent'] = "Sản phẩm";
            $template['page_child1'] = $idname_type->name_type;
            $template['page_child2'] = "";
            $template['menu'] = $this->SanPham_model->getMenu();
            $template['sp'] = $template['menu'];
            $template['data'] = $this->SanPham_model->getAllByIdType($idname_type->id);
            $this->load->view('template', $template);
        }
    }
}
