<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Mhs extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	
	function viewMahasiswaByID($data){
		$d = $this->db->get_where('mahasiswa',array('nim'=>$data));
		return $d->result();
	}

	
}
?>