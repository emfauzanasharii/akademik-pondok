<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('default_controller');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_siswa->get_all_siswa();
		// $x['data']=$this->m_siswa->get_all_siswa();
		$this->load->view('siswa/v_home',$x);
	}
}
	