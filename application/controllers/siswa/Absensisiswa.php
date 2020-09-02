<?php
class Absensisiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_absensi');
		$this->load->model('m_pengguna');
		$this->load->model('m_rapor');
		$this->load->library('upload');
	}

function index(){
	$x['data']=NULL;
	$idsantri = $this->session->userdata('idsantri');
	$x['alpha']=$this->m_rapor->get_absen_alpha($idsantri)->num_rows();
	$x['izin']=$this->m_rapor->get_absen_izin($idsantri)->num_rows();
	$x['absen']=$this->m_absensi->get_absen_santri($idsantri);
	
	$this->load->view('siswa/v_absensi',$x);
}
function lihat_absen_siswa(){
		$idsantri = $this->session->userdata('idsantri');
		
		$tanggal=$this->input->post('date');
		$x['data']=$this->m_absensi->lihat_absen_siswa($tanggal,$idsantri);
		

		$this->load->view('siswa/v_absensi',$x);

	}
}