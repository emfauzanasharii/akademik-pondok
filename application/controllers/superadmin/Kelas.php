<?php 
class Kelas extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('default_controller');
            redirect($url);
        };
		$this->load->model('m_guru');
		$this->load->model('m_kelas');
		$this->load->library('upload');
	}


	function index(){
		$kode=$this->session->userdata('idadmin');
		$x['kategori']=$this->m_kelas->ambil_kategori_kelas();
		$x['data']=$this->m_kelas->get_all_kelas();
		$x['gru']=$this->m_guru->get_all_guru_level_2();
		$this->load->view('superadmin/v_kelas',$x);
	}

	function simpan_kelas(){
		
	
		$kelas=strip_tags($this->input->post('xkelas'));
		$idwalikelas=strip_tags($this->input->post('xidgurumapel'));
		$idkategorikelas=strip_tags($this->input->post('xkelas-kategori'));
$cek=$this->m_kelas->cekwali($idwalikelas);

if ($cek!=null) {
		echo $this->session->set_flashdata('msg','error');
		redirect('superadmin/kelas');
}else{
	$this->m_kelas->simpan_kelas($kelas,$idwalikelas,$idkategorikelas);
		echo $this->session->set_flashdata('msg','success');
		redirect('superadmin/kelas');
}

		
	}

function simpan_kategori_kelas(){
		$kategori_kelas=strip_tags($this->input->post('xkelas-kategori'));
		$this->m_kelas->simpan_kategori_kelas($kategori_kelas);
		echo $this->session->set_flashdata('msg','success');
		redirect('superadmin/kelas');
	}

	function update_kelas(){
		$kode=$this->input->post('kode');
		$kelas=strip_tags($this->input->post('xkelas'));
		$idwalikelas=strip_tags($this->input->post('xidwalikelas'));
		$this->m_kelas->update_kelas($kelas,$idwalikelas,$kode);
		echo $this->session->set_flashdata('msg','info');
		redirect('superadmin/kelas');
	}
	function hapus_kelas(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_kelas->hapus_kelas($kode);
		echo $this->session->set_flashdata('msg','success-hapus-kelas');
		redirect('superadmin/kelas');
}

function hapus_kategori_kelas(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_kelas->hapus_kategori_kelas($kode);
		echo $this->session->set_flashdata('msg','success-hapus-kategori');
		redirect('superadmin/kelas');
}



}