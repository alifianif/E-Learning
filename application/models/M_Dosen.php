<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Dosen extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	
	function viewDosenByID($data){
		$d = $this->db->get_where('dosen',array('nik'=>$data));
		return $d->result();
	}

	
}
?>