<?php 
class Matapelajaran extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('default_controller');
            redirect($url);
        };
		$this->load->model('m_guru');
		$this->load->model('m_kelas');
		$this->load->model('m_pelajaran');
		$this->load->library('upload');
	}


	function index(){
		$kode=$this->session->userdata('idadmin');
		$x['data']=$this->m_pelajaran->get_all_pelajaran();
		$x['kelas']=$this->m_kelas->get_all_kelas();
		$x['gru']=$this->m_guru->get_all_guru();
		$this->load->view('superadmin/v_pelajaran',$x);
	}

	function simpan_pelajaran(){
		$kodemapel=strip_tags($this->input->post('xkodemapel'));
		$namamapel=strip_tags($this->input->post('xnamamapel'));
		$kelasmapel=strip_tags($this->input->post('xkelasmapel'));
		$idgurumapel=strip_tags($this->input->post('xidgurumapel'));
		
		$kategorikelas=$this->m_pelajaran->get_mapel_kategori_kelas($kelasmapel);//mengambil nilai id kategori kelas dari tabel kategori kelas
		$mapel_kategori_kelas=$kategorikelas->kelas_kategori_id;

		$this->m_pelajaran->simpan_pelajaran($kodemapel,$namamapel,$kelasmapel,$idgurumapel,$mapel_kategori_kelas);
		echo $this->session->set_flashdata('msg','success');
		redirect('superadmin/matapelajaran');
	}

	function update_pelajaran(){
		$kode=$this->input->post('kode');
		$kodemapel=strip_tags($this->input->post('xkodemapel'));
		$namamapel=strip_tags($this->input->post('xnamamapel'));
		$kelasmapel=strip_tags($this->input->post('xkelasmapel'));
		$idgurumapel=strip_tags($this->input->post('xidgurumapel'));
		$this->m_pelajaran->update_pelajaran($kode,$kodemapel,$namamapel,$kelasmapel,$idgurumapel);
		echo $this->session->set_flashdata('msg','info');
		redirect('superadmin/matapelajaran');
	}
	function hapus_pelajaran(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_pelajaran->hapus_pelajaran($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('superadmin/matapelajaran');
}


}
