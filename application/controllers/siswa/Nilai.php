<?php
class Nilai extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('default_controller');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_nilai');
		$this->load->library('upload');
	}


	function index(){
		$idsantri = $this->session->userdata('idsantri');
		$x['nilai']=$this->m_nilai->lihat_nilai($idsantri);
		// $x['data']=$this->m_siswa->get_all_siswa();
		$this->load->view('siswa/v_nilai',$x);
	}
}
	