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
		$file = $_FILES["file"]["name"];

		$message = [];
		$data["type"] = "message_img";

		$target_dir = "template/images/menu/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["file"]["tmp_name"]);
		if ($check !== false) {
			$uploadOk = 1;
		} else {
			$array = ["message" => "File is not an image.", "class" => "danger"];
			array_push($message, $array);
			$uploadOk = 0;
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			$array = ["message" => "Sorry, file already exists.", "class" => "danger"];
			array_push($message, $array);
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["file"]["size"] > 500000) {
			$array = ["message" => "Sorry, your file is too large.", "class" => "danger"];
			array_push($message, $array);
			$uploadOk = 0;
		}
		// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"/* && $imageFileType != "gif" */) {
			$array = ["message" => "Sorry, only JPG, JPEG, & PNG files are allowed.", "class" => "danger"];
			array_push($message, $array);
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 1) {
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
				$this->Menu_model->addMenu($name, $slug, $file);
				$message = ["message" => "Thêm menu '" . $name . "' thành công!", "class" => "success"];
				$data["type"] = "message";
			} else {
				$message = ["message" => "Sorry, there was an error uploading your file.", "class" => "danger"];
				$data["type"] = "message";
			}
		}

		$data["message"] = $message;
		echo json_encode($data);
	}

    public function editMenu()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $slug = $this->input->post('slug');
        $edit_img = $this->input->post('edit_img');
        if($edit_img != "false"){
            $file = $_FILES["file"]["name"];
            $message = [];
            $data["type"] = "message_img";

            $target_dir = "template/images/menu/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $array = ["message" => "File is not an image.", "class" => "danger"];
                array_push($message, $array);
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                $array = ["message" => "Sorry, file already exists.", "class" => "danger"];
                array_push($message, $array);
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["file"]["size"] > 500000) {
                $array = ["message" => "Sorry, your file is too large.", "class" => "danger"];
                array_push($message, $array);
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"/* && $imageFileType != "gif" */) {
                $array = ["message" => "Sorry, only JPG, JPEG, & PNG files are allowed.", "class" => "danger"];
                array_push($message, $array);
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    $this->Menu_model->editMenu($name, $slug, $id, $file);
                    $message = ["message" => "Chỉnh sửa menu '" . $name . "' thành công!", "class" => "success"];
                    $data["type"] = "message";
                } else {
                    $message = ["message" => "Sorry, there was an error uploading your file.", "class" => "danger"];
                    $data["type"] = "message";
                }
            }

            $data["message"] = $message;
            echo json_encode($data);
        }else{
            $this->Menu_model->editMenu($name, $slug, $id);
            echo "success";
        }
        
    }

}