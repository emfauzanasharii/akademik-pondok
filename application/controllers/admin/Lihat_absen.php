<?php
class Lihat_absen extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_absensi');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}

function index(){
	$x['data']=NULL;
	$this->load->view('admin/v_lihatabsen',$x);
}
function lihat_absen(){
		$idadmin = $this->session->userdata('idadmin');
		$startdate=$this->input->post('startdate');
		$enddate=$this->input->post('enddate');
		$x['data']=$this->m_absensi->lihat_absen($startdate,$idadmin,$enddate);
	
		$this->load->view('admin/v_lihatabsen',$x);

	}
}