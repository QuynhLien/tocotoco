<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('Admin/Menu_model');

		if (!$this->session->userdata('logged_in')) {
			redirect(site_url('admin/signin'));
		}
	}

	public function index()
	{
		$template['page_child1'] = "Menu";
		$template['page_child2'] = "";
		$template['page'] = 'Admin/Menu/view';
		$template['data'] = $this->Menu_model->getAll();
		$this->load->view('Admin/template', $template);
	}

	public function addMenu()
	{
		$name = $this->input->post('name');
		$slug = $this->input->post('slug');
		// $file = $this->input->post('file');

		$target_dir = "template/images/menu/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		// if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["file"]["tmp_name"]);
			if ($check !== false) {
				// echo "File is an image - " . $check["mime"] . ".";
    //             $this->session->set_flashdata('message_img', array('message' => 'Sorry, your file was not uploaded.', 'class' => 'danger'));
				$uploadOk = 1;
			} else {
				// echo "File is not an image.";
                $this->session->set_flashdata('message_img', array('message' => 'File is not an image.', 'class' => 'danger'));
				$uploadOk = 0;
			}
		// }
		// Check if file already exists
		if (file_exists($target_file)) {
			// echo "Sorry, file already exists.";
            $this->session->set_flashdata('message_img', array('message' => 'Sorry, file already exists.', 'class' => 'danger'));
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["file"]["size"] > 500000) {
			// echo "Sorry, your file is too large.";
            $this->session->set_flashdata('message_img', array('message' => 'Sorry, your file is too large.', 'class' => 'danger'));
			$uploadOk = 0;
		}
		// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"/* && $imageFileType != "gif" */) {
			// echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
            $this->session->set_flashdata('message_img', array('message' => 'Sorry, only JPG, JPEG, & PNG files are allowed.', 'class' => 'danger'));
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 1) {
			// echo "Sorry, your file was not uploaded.";
            // $this->session->set_flashdata('message', array('message' => 'Sorry, your file was not uploaded.', 'class' => 'danger'));
			// if everything is ok, try to upload file
		// } else {
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
				// echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";                
                $this->Menu_model->addMenu($name, $slug, $file);
                $this->session->set_flashdata('message', array('message' => 'Thêm menu ' . $name . ' thành công!', 'class' => 'success'));
			} else {
				// echo "Sorry, there was an error uploading your file.";
                $this->session->set_flashdata('message', array('message' => 'Sorry, there was an error uploading your file.', 'class' => 'danger'));
			}
		}

		// redirect('admin/menu');
	}

}
