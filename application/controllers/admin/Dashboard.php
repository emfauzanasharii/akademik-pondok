<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('login');
            redirect($url);
        };
		$this->load->model('m_pengunjung');
		$this->load->model('m_kelas');
		$this->load->model('m_pelajaran');
	}
	function index(){
		if($this->session->userdata('akses')=='2'){
		$idadmin = $this->session->userdata('idadmin');
		$kategori=$this->m_kelas->get_kategori_wali($idadmin);
		$kategorikelaswali=$kategori->kelas_kategori_id;
		$x['data']=$this->m_pelajaran->get_kategori_mapel($kategorikelaswali)->num_rows();
	// print_r($x);
	// die();
		$this->load->view('admin/v_dashboard',$x);
		}else{
			redirect('login');
		}
	}

	
	
}