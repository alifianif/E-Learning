<?php
class 404 extends CI_Controller {
	public function 404(){
		parent::__construct();
		$this->load->helper(array('url','form'));
	}

	public function index(){
		$this->load->view('Login');
	}
}
?>