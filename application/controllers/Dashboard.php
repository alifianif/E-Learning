<?php
class Dashboard extends CI_Controller {

	public function Dashboard(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('M_Mhs');
		$this->load->model('M_Dosen');
		$this->load->model('M_matkul');
		$this->load->model('M_tugas');
		$this->load->library('session');
	}
	function index(){
		$data['menuDashboard']= "active";
		if ($this->session->userdata('roles')) {
			if ($this->session->userdata('roles') == "mahasiswa") {
				$data['mahasiswa']=$this->M_Mhs->viewMahasiswaByID($this->session->userdata('idusr'));
				$this->load->view('mahasiswa/Dashboards', $data);
			}elseif ($this->session->userdata('roles') == "dosen") {
				$data['dosen']=$this->M_Dosen->viewDosenByID($this->session->userdata('idusr'));
				$data['tabelMateri']=$this->M_matkul->get();
				$data['list_matkul']=$this->M_matkul->viewMatakuliah();
				$this->load->view('dosen/Dashboard', $data);
			}
		}
		else
		{
			redirect('Welcome/index');
		}
	}
	function logout(){
		redirect('Welcome/logout');
	}
	function View(){
		$data['menuDashboard']= "active";
		if ($this->session->userdata('role')) {
			if ($this->session->userdata('role') == "mahasiswa") {
				$data['mahasiswa']=$this->M_Mhs->viewMahasiswaByID($this->session->userdata('idusr'));
				$this->load->view('mahasiswa/Dashboards', $data);
			}elseif ($this->session->userdata('role') == "dosen") {
				$data['dosen']=$this->M_Dosen->viewDosenByID($this->session->userdata('idusr'));
				$data['tabelMateri']=$this->M_matkul->get();
				$data['list_matkul']=$this->M_matkul->viewMatakuliah();
				$this->load->view('dosen/Dashboard', $data);
			}
		}
		else
		{
			redirect('Welcome/index');
		}
	}
	function ViewTugas(){
		$data['menuTugas']= "active";
		if ($this->session->userdata('role')) {
			if ($this->session->userdata('role') == "mahasiswa") {
				$data['mahasiswa']=$this->M_Mhs->viewMahasiswaByID($this->session->userdata('idusr'));
				$this->load->view('mahasiswa/tugas', $data);
			}elseif ($this->session->userdata('role') == "dosen") {
				$data['dosen']=$this->M_Dosen->viewDosenByID($this->session->userdata('idusr'));
				$data['tabelTugas']=$this->M_tugas->get();
				$data['list_matkul']=$this->M_matkul->viewMatakuliah();
				$this->load->view('dosen/tugas', $data);
			}
		}
		else
		{
			redirect('Welcome/index');
		}
	}
	function ViewTugasEdit(){
				$data['dosen']=$this->M_Dosen->viewDosenByID($this->session->userdata('idusr'));
				$data['tabelTugas']=$this->M_tugas->get();
				$data['list_matkul']=$this->M_matkul->viewMatakuliah();
				$this->load->view('dosen/tugas', $data);
			
	}
	function DashboardDosen(){
		$this->load->view('dosen/Dashboard');
	}
	function delMateri($kode){
				$this->M_matkul->del($kode);
				redirect('Dashboard/view');
	}
	function simpaneditMateriDosen(){	
			$data=array(
				'kd_materi'=>$this->input->post('kd_materi'),
				'nama_materi' => $this->input->post('judul'),
				'nama_matkul' => $this->input->post('nama_matkul'),
				'kelas' => $this->input->post('kelas'),
				'isi_materi' => $this->input->post('inputficons1'),
				);
			$this->M_matkul->simpanedit($data);
			redirect('Dashboard');				
	}
	function formeditDosen($id){
			
			$data["tugas"]=$this->M_tugas->getByid($id);
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
     function tugas(){				
		$jenis=$this->session->userdata('roles');
		if($jenis=="mahasiswa"){
			$data['mahasiswa']=$this->M_Mhs->viewMahasiswaByID($this->session->userdata('idusr'));
			$this->load->view('mahasiswa/tugas',$data);
		}elseif($jenis=="dosen"){
			$data['dosen']=$this->M_Dosen->viewDosenByID($this->session->userdata('idusr'));
			$data['tabelMateri']=$this->M_matkul->get();
			$data['list_matkul']=$this->M_matkul->viewMatakuliah();
			$this->load->view('dosen/tugas',$data);
		}else {
			$data['comment'] = array ('out'=> "");
		$this->load->view('Login', $data);
		//$this->session->sess_destroy();
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
				redirect('Dashboard/tugas');
		

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
