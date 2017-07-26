<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlMain extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this -> load -> model('MdlUser');

	}
	
	public function index( $id = NULL ) {

		$data = [];

		if ( $id ) {

			$data['users'] = $this -> MdlUser -> getUsers($id);

		}
		
		$this->load->view('view_form', $data);

	}

	public function insert($id = NULL) {

		$resumeFileName = $this -> upload('resume');

		if($id) {

			$this -> MdlUser -> updateUsers($id, $resumeFileName);
			
		} else {

			$this -> MdlUser -> putUsers($resumeFileName);

		}
	}

	public function delete($id = NULL) {
	
		if ($id) {

			$this -> MdlUser -> deleteUsers($id);
			echo "Record Deleted";
		}

	}

	public function table() {

		$data['records'] = $this -> MdlUser -> getUsers();
		$this -> load -> view('view_table', $data);

	}

	private function upload($fileName) {

		$target_dir 	= "uploads/";
		$target_file 	= $target_dir . basename($_FILES[$fileName]["name"]);
		$uploadOk 		= 1;
		$imageFileType 	= pathinfo($target_file,PATHINFO_EXTENSION);

		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";

		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES[$fileName]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES[$fileName]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		return ( $_FILES[$fileName]["name"]);

	}

}
