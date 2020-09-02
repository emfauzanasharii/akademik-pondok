<?php
class Administrasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->model('m_administrasi');
		$this->load->library('upload');
	}


function index(){
			$x['data']=$this->m_administrasi->get_administrasi($_SESSION['idsantri']);
			
			// $x['nilai']=$this->m_pelajaran->get_nama_mapel($mapel_id)->row();
			$this->load->view('siswa/v_administrasi',$x);
		
	}
	

}