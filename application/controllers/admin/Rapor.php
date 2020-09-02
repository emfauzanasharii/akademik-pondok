<?php
class Rapor extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('login');
            redirect($url);
        };
		$this->load->model('m_kelas');
		$this->load->model('m_siswa');
		$this->load->model('m_rapor');
		
	}

	function index(){
		$x['data']=$this->m_siswa->get_siswa_by_id($_SESSION['idadmin']);
		$this->load->view('admin/v_rapor',$x);
	}
	function detail_rapor($id){

		$x['data']=$this->m_rapor->get_rapor_byid($_SESSION['idadmin'], $id);
		$x['nilai']=$this->m_rapor->get_nilai($id,$_SESSION['idadmin']);
		$x['alpa']=$this->m_rapor->get_absen_alpha($id)->num_rows();
		$x['izin']=$this->m_rapor->get_absen_izin($id)->num_rows();
		// $x['kelas']=$this->m_kelas->ambil_kelas(TRUE);
		
		$this->load->view('admin/v_detail_rapor',$x);
}
	function cetak_rapor($id){
	$status=strip_tags($this->input->post('status_kenaikan'));
	if ($status!=2) {
	$id_siswa=strip_tags($this->input->post('id_siswa'));
	$semester=$this->input->post('id_semester');
	$kelas=strip_tags($this->input->post('kelas'));
	$catatan=$this->input->post('catatan');
	$wali_id=$this->session->userdata('idadmin');
	
	// print_r($semester);
	// die();
	$hasil=$this->m_rapor->simpan_rapor($id_siswa,$semester,$status,$kelas,$catatan,$wali_id);
		$kelas=strip_tags($this->input->post('kelas'));
		$id_siswa=strip_tags($this->input->post('id_siswa'));
		$wali_id=$this->m_rapor->get_wali($kelas);
		$wali=$wali_id->kelas_wali_id;
		$update=$this->m_rapor->update_kelas($id_siswa,$kelas,$wali);
		 redirect ('admin/rapor');
	}else{
	$id_siswa=strip_tags($this->input->post('id_siswa'));
	$semester=$this->input->post('id_semester');
	$kelas=strip_tags($this->input->post('kelas'));
	$catatan=$this->input->post('catatan');
	$wali_id=$this->session->userdata('idadmin');
	
	// print_r($semester);
	// die();
	$hasil=$this->m_rapor->simpan_rapor($id_siswa,$semester,$status,$kelas,$catatan,$wali_id);
		$kelas=strip_tags($this->input->post('kelas'));
		$id_siswa=strip_tags($this->input->post('id_siswa'));
		$status=strip_tags($this->input->post('status_kenaikan'));
		$update=$this->m_rapor->update_kelasStatus($id_siswa,$kelas,$status);
		 redirect ('admin/rapor');
	}
}
	function listRapor(){
	$x['data']=$this->m_rapor->listRapor($_SESSION['idadmin']);
	$this->load->view('admin/v_listRapor',$x);
}
	function cetak($id){
$this->load->library('dompdf/dompdf_gen');
			$wali=$this->m_rapor->get_wali_baru($id);
			$wali_baru=$wali->kelas_wali_id;
			$cari=$this->m_rapor->get_nama($id);
			$nama=$cari->siswa_nama;
			$nis=$cari->siswa_nis;
			$x['data']=$this->m_rapor->get_rapor_by_wali($wali_baru, $id);
			$x['nilai']=$this->m_rapor->get_nilai($id,$_SESSION['idadmin']);
			$x['alpa']=$this->m_rapor->get_absen_alpha($id)->num_rows();
			$x['izin']=$this->m_rapor->get_absen_izin($id)->num_rows();
			$x['catatan']=$this->m_rapor->ambil_rapor($id);

 		$this->dompdf_gen->generate('admin/v_cetakRapor', $x, 'DATA NILAI_'.$nis.'_'.$nama, 'A4', 'potrait'); 
}
}