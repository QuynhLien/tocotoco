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
        $empInfo = $this->Home_model->getSubcribes();

        $rowCount = 2;
        foreach ($empInfo as $element) {
            $objPHPExcel->getActiveSheet()->SetCellValueByColumnAndRow(0, $rowCount, $element['email']);
            $rowCount++;
        }
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="Subcribes.xlsx"');

        $objWriter->save('php://output');   
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
