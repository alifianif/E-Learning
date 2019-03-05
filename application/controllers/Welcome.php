<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function Welcome(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('M_login');
		$this->load->model('M_matkul');
		$this->load->library('session');

	}
	public function index()
	{
		$jenis=$this->session->userdata('role');
		if($jenis=="mahasiswa"){
			$this->load->view('mahasiswa/Dashboards');
		}elseif($jenis=="dosen"){
			$this->load->view('dosen/Dashboard');
		}else {
			$data['comment'] = array ('out'=> "");
		$this->load->view('Login', $data);
		//$this->session->sess_destroy();
		}
		
	}
	function page_login(){
		$data['comment'] = array ('out'=> "");
		$this->load->view('Login', $data);
		$this->session->sess_destroy();
	}
	function login(){
		$usrnm = $this->input->post('username');
		$psswd = $this->input->post('password');
		$cek = $this->M_login->cek_user($usrnm, $psswd);
		//$data_session['Matkul']=$this->M_matkul->viewMatakuliah();
		if($cek){
			foreach ($cek as $role) {
				$ID = $role->no_induk;
				$ROLES = $role->type;
			}
			if ($ROLES == "mahasiswa"){
				$data_user = $this->M_login->lihat_Mhs($ID);
				foreach ($data_user as $user){
					$data_session = array(
						'idusr'=>$user->nim,
						'nama'=>$user->nama,
						'role'=>"mahasiswa",
						'roles'=>"mahasiswa",
						'type'=>"mahasiswa"
					);
				}
				$this->session->set_userdata($data_session);
				//$this->load->view('mahasiswa/Dashboards',$data_session);
			} elseif ($ROLES == "dosen"){
				$data_user = $this->M_login->lihat_Dosen($ID);
				foreach ($data_user as $user){
					$data_session = array(
						'idusr'=>$user->nik,
						'nama'=>$user->nama,
						'role'=>"dosen",
						'roles'=>"dosen",
						'type'=>"dosen"
					);
				}
				$this->session->set_userdata($data_session);
				//$this->load->view('dosen/Dashboard',$data_session);
			} 
			

			
			redirect('Dashboard/View');
		}else{
			$data['comment'] = array ('out'=> "Username atau Password salah!");
			$this->load->view('Login', $data);
		}
	}
	function logout(){
		redirect('Welcome/page_login');
		$this->session->sess_destroy(); 
	}
	

}
?>
