<?php
class Rapor extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('default_controller');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_rapor');
		$this->load->model('m_nilai');
		$this->load->library('upload');
	}

function index(){
	$x['rapor']=$this->m_rapor->list_rapor($_SESSION['idsantri']);
	$this->load->view('siswa/v_list_rapor',$x);
}
	function detail_rapor($id,$id_semester){

		$wali=$this->m_rapor->get_wali_input($id,$id_semester);
		$waliInput=$wali->rapor_waliId;

		$x['data']=$this->m_rapor->lihat_rapor($id);// untuk mengambil data santri via tabel rapor
		$x['nilai']=$this->m_rapor->get_nilai_santri($id,$waliInput);//ambil  nilai berdasarkna id santri dan wali kelas dulu.
		$x['alpha']=$this->m_rapor->get_absen_alpha($id)->num_rows();//ambil jumlah alpa dengan id santri
		$x['izin']=$this->m_rapor->get_absen_izin($id)->num_rows();// ambil jumlah absen izin
		$x['rapor']=$this->m_rapor->get_rapor_all($id,$id_semester);// ambil data dari tabel rapor dengan parameter id santri dan wali kelas dulu.
		// $x['data']=$this->m_siswa->get_all_siswa();
		$this->load->view('siswa/v_detail_rapor',$x);
		
	}
}
	