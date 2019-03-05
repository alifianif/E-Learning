<?php
class Tugas extends CI_Controller {

	public function Tugas(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('M_Mhs');
		$this->load->model('M_Dosen');
		$this->load->model('M_matkul');
		$this->load->model('M_tugas');
		$this->load->library('session');
	}
	function index(){
		redirect('Dashboard/ViewTugas');
	}
	function logout(){
		redirect('Welcome/logout');
	}
	
	function DashboardDosen(){
		$this->load->view('dosen/Dashboard');
	}
	function delTugas($kode){
				$this->M_matkul->del($kode);
				redirect('ViewTugas');
	}
	function simpaneditTugasDosen(){	
			$data=array(
				'kd_tugas'=>$this->input->post('kd_tugas'),
				'judul_tugas' => $this->input->post('judul'),
				'desk_tugas' => $this->input->post('desk'),
				'tugas' => $this->input->post('inputficons1'),
				'nama_matkul' => $this->input->post('nama_matkul'),
				'kelas'=>$this->input->post('kelas'),
				'tgl_mulai'=>$this->input->post('tgl_mulai'),
				'tgl_akhir'=>$this->input->post('tgl_akhir'),
				'jam'=>$this->input->post('jam')
				);
			$this->M_tugas->simpanedit($data);
			redirect('Tugas');				
	}
	function formeditDosen($id){
			
			$data['tugas']=$this->M_tugas->getByid($id);
			$data['list_matkul']=$this->M_matkul->viewMatakuliah();
			$this->load->view('dosen/tugas_edit',$data);
	}
	function insertMateri(){
		if(($this->session->userdata('role')=="dosen")){
			$data = array(
			 'nama_materi'=> $this->input->post('judul'),
             'nama_matkul'=>$this->input->post('nama_matkul'),
             'kelas'=>$this->input->post('kelas'),
             'isi_materi'=> $this->input->post('inputficons1')
			//'GLNGN'	=> $this->input->post('ddlGolongan'),
            
	        );

	        	$this->M_matkul->insertMateri($data);
				redirect('Dashboard/view');
		}
 }
     function materi(){
   	 //if($this->session->userdata('role')=="mahasiswa"){
   	 //	$this->load->view('mahasiswa/Dashboards');
   	 //}elseif($this->session->userdata('role')=="dosen"){
   	 	$type=$this->session->userdata('roles');
   	 	if($type=="dosen"){
   	 	$this->load->view('dosen/index');
   	 	}else if($type=="mahasiswa"){
   	 		$this->load->view('mahasiswa/index');
   	 	}
     	
     }

	
	function insertTugasDosen(){
		$tgl=date('Y-m-d');
			$data = array(
			 'judul_tugas'=> $this->input->post('judul'),
             'desk_tugas'=>$this->input->post('desk'),
             'tugas'=>$this->input->post('inputficons1'),
             'nama_matkul'=> $this->input->post('nama_matkul'),
             'kelas'=>$this->input->post('kelas'),
             'tgl_akhir'=>$this->input->post('tgl_akhir'),
             'tgl_mulai'=>$tgl,
             'jam'=>$this->input->post('jam')
			//'GLNGN'	=> $this->input->post('ddlGolongan'),
            
	        );

	        	$this->M_tugas->insertTugas($data);
				redirect('Tugas');
		

	}	
/*function insertMateri(){
		
		if ($this->session->userdata('role')) {
			$data = array(
            'kd_materi' => $this->input->post('kdmateri'),
            
            'nama_materi'	=> $this->input->post('namamateri'),
            'isi_materi'	=> $this->input->post('isimateri'),
            'kd_matkul'	=> $this->input->post('kdmatkul'),
			//'GLNGN'	=> $this->input->post('ddlGolongan'),
            
	        );

	        	$this->M_matkul->insertMateri($data);
	        	redirect('Dashboard/V_dashboard');

		} else {
			redirect('Welcome/PageLogin');
		}
     }
*/
/*	function ViewDashboard(){
		$data['menuDashboard']= "active";
		if ($this->session->userdata('role')) {
			$startDate = $this->input->post('startDate');
			$finishDate = $this->input->post('finishDate');
			$data['startDate'] = date("d-F-Y", strtotime($startDate));
			$data['finishDate'] = date("d-F-Y", strtotime($finishDate));

			if ($this->session->userdata('role') == "mahasiswa") {
				
				$data['mahasiswa'] = $this->M_Mhs->countVisitKepalaCabangByDate($this->session->userdata('idusr'), date("Y-m-d", strtotime($startDate)), date("Y-m-d", strtotime($finishDate)));
				$this->load->view('mahasiswa/Dashboard', $data);

			}elseif ($this->session->userdata('role') == "dosen") {

				$data['Data_Supervisor'] = $this->M_Dosen->countVisitSupervisorByDate($this->session->userdata('idusr'), date("Y-m-d", strtotime($startDate)), date("Y-m-d", strtotime($finishDate)));
				$this->load->view('dosen/Dashboard', $data);

			}
		}
		else
		{
			redirect('Welcome/index');
		}
	}
	*/
}
?>
