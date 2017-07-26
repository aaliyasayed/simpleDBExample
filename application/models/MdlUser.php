<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlUser extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function putUsers($resumeFileName) {
		
		$data = array(
			'name'			=> $this -> input -> post('name'),
			'gender'		=> $this -> input -> post('gender'),
			'graduation'	=> $this -> input -> post('graduation'),
			'country'		=> $this -> input -> post('country'),
			'resume' 		=> $resumeFileName
		);

		$query = $this -> db -> insert('user_info', $data);

		if($query) {
			return true;
		} else {
			return false;
		}

		
	}

	public function updateUsers($id = '', $resumeFileName) {

		$data = array(
			'name'			=> $this -> input -> post('name'),
			'gender'		=> $this -> input -> post('gender'),
			'graduation'	=> $this -> input -> post('graduation'),
			'country'		=> $this -> input -> post('country'),
			'resume' 		=> $resumeFileName
		);

		$this -> db -> where('id', $id);
		$query = $this -> db -> update('user_info', $data);

	}

	public function deleteUsers($id = '') {

		$this -> db -> where('id', $id);
		$this -> db -> delete('user_info');

	}

	public function getUsers($id = '') {

		if($id) {

			$query = $this -> db -> where(['id' => $id]);

		}

		$query = $this -> db -> get('user_info');

		$data = [];

		foreach ($query -> result() as $key => $row){
		    
		    $data[$key]['id'] 			= $row -> id;
		    $data[$key]['name'] 		= $row -> name;
		    $data[$key]['gender'] 		= $row -> gender;
		    $data[$key]['graduation'] 	= $row -> graduation;
		    $data[$key]['country'] 		= $row -> country;
		    $data[$key]['resume'] 		= $row -> resume;
		}

		return $data;
	}
}