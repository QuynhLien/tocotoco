<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KhuyenMai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Admin/KhuyenMai_model');

        if(!$this->session->userdata('logged_in')) {
            redirect(site_url('admin/signin'));
        }
    }

    public function thongBao()
    {
    	$template['page_child1'] = "Khuyến mãi";
    	$template['page_child2'] = "Thông báo";
        $template['page'] = 'Admin/KhuyenMai/thong_bao';
        $template['data'] = $this->KhuyenMai_model->getAll();
        $this->load->view('Admin/template', $template);
    }

    // create xlsx
    public function createXLS() {
        // load excel library
        $this->load->library('excel');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);

        // // set Header
        $table_columns = "Email";
        $column = 0;

        // foreach ($table_columns as $field) {
            $objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow($column, 1, $table_columns);
            // $column++;
        // }

        // // set Row
        $empInfo = $this->KhuyenMai_model->getSubcribes();

        $rowCount = 2;
        foreach ($empInfo as $element) {
            $objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, $rowCount, $element['email']);
            $rowCount++;
        }
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="Subcribes.xlsx"');

        $objWriter->save('php://output');
        // redirect(site_url('admin/khuyen-mai/thong-bao'));
    }

}
