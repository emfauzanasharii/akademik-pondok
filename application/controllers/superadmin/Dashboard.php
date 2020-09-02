<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('login');
            redirect($url);
        };
		$this->load->model('m_tahun_ajaran');
	}
	function index(){
		if($this->session->userdata('akses')=='1'){
			$x['tahun'] = $this->m_tahun_ajaran->get_tahun_ajaran();
			// var_dump($x['tahun']);
			// die();
			$this->load->view('superadmin/v_dashboard',$x);
		}else{
			redirect('login');
		}
	}

	function simpan_tahun_ajaran(){
		$semester=strip_tags($this->input->post('semester'));
		$tahun_awal=strip_tags($this->input->post('tahun_awal'));
		$tahun_akhir=strip_tags($this->input->post('tahun_akhir'));

		$this->m_tahun_ajaran->simpan_tahun($semester,$tahun_awal,$tahun_akhir);
		echo $this->session->set_flashdata('msg','success');
		redirect ('superadmin/Dashboard');
	}

	function hapus_tahun(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_tahun_ajaran->hapus_tahun($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('superadmin/Dashboard');
}
	
}