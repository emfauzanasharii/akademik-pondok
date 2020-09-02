<?php
class Mapel extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('login');
            redirect($url);
        };
		$this->load->model('m_pelajaran');
		$this->load->model('m_kelas');
	}

	function index(){
		$idadmin = $this->session->userdata('idadmin');
		$kategori=$this->m_kelas->get_kategori_wali($idadmin);
		$kategorikelaswali=$kategori->kelas_kategori_id;
		$mapelkategori=$this->m_pelajaran->get_kategori_mapel($kategorikelaswali);
		$x['data']=$mapelkategori;
		$this->load->view('admin/v_mapel',$x);
	}

	function hapus_inbox(){
		$kode=$this->input->post('kode');
		$this->m_kontak->hapus_kontak($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/inbox');
	}
}