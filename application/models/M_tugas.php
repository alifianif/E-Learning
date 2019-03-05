<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_tugas extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function insertTugas($data){
		$query = $this->db->insert('tugas', $data);
        return;
	}
	function add($s){
		$this->db->insert('sss',$s);
	}
	function get(){
			return $this->db->query("SELECT * FROM tugas")->result(); 
			}
	function getByid($id){
			return $this->db->query("SELECT * FROM  materi where kd_materi='$id'")->result();
	}
	function del($kode){	
			$this->db->query("DELETE FROM tugas WHERE kd_tugas='$kode'");
			}	
	function simpanedit($data){
			$this->db->where("kd_materi",$data['kd_materi']);
			$this->db->update('materi',$data);
}
	function viewMatakuliah(){
		
		$lihat = $this->db->get('matakuliah');
		return $lihat->result_array();

}
}
?>
