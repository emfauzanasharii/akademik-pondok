<?php
class Files extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_files');
		$this->load->model('m_pengguna');
		$this->load->model('m_siswa');
		$this->load->library('upload');
		$this->load->helper('download');
	}


	function index(){
		$idsantri=$this->session->userdata('idsantri');
		$cek=$this->m_siswa->get_data($idsantri);
		$wali=$cek->siswa_guru_id;
		// print_r($wali);
		// die();
		$x['data']=$this->m_files->get_all_files($wali);
		$this->load->view('siswa/v_files',$x);
	}

	function download(){
		$id=$this->uri->segment(4);
		$get_db=$this->m_files->get_file_byid($id);
		$q=$get_db->row_array();
		$file=$q['file_data'];
		$path='./assets/files/'.$file;
		$data =  file_get_contents($path);
		$name = $file;

		force_download($name, $data); 
		redirect('siswa/files');
	}

}