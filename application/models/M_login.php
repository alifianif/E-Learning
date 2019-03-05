<?php
class M_login extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function cek_user($usrnm, $psswd){
		$d = $this->db->get_where('akun',array('username'=>$usrnm, 'password'=>$psswd));	
		return $d->result();
	}

	function lihat_Mhs($data){		
		$d = $this->db->get_where('mahasiswa',array('nim'=>$data));	
		return $d->result();
	}

	function lihat_Dosen($data){		
		$d = $this->db->get_where('dosen',array('nik'=>$data));	
		return $d->result();
	}


}
 
?>