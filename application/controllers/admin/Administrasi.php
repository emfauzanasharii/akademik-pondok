<?php
class Administrasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->model('m_administrasi');
		$this->load->library('upload');
	}


function index(){
			$x['data']=$this->m_siswa->get_siswa_by_administrasi($_SESSION['idadmin']);
			// $x['nilai']=$this->m_pelajaran->get_nama_mapel($mapel_id)->row();
			$this->load->view('admin/v_administrasi',$x);
		
	}
	function simpan_adm($id){
		$cek=$this->m_administrasi->cek_adm($id);
		if ($cek==0) {
		
		
		$siswa_id=strip_tags($this->input->post('kode'));
		$wali_id=$this->session->userdata('idadmin');
		$tahun_ajaran=$this->input->post('tahun');
		$jan=strip_tags($this->input->post('jan'));
		$feb=strip_tags($this->input->post('feb'));
		$mar=strip_tags($this->input->post('mar'));
		$apr=strip_tags($this->input->post('apr'));
		$mei=strip_tags($this->input->post('mei'));
		$jun=strip_tags($this->input->post('jun'));
		$jul=strip_tags($this->input->post('jul'));
		$ags=strip_tags($this->input->post('ags'));
		$sep=strip_tags($this->input->post('sep'));
		$okt=strip_tags($this->input->post('okt'));
		$nov=strip_tags($this->input->post('nov'));
		$des=strip_tags($this->input->post('des'));

	
		$this->m_administrasi->simpan_adm($siswa_id,$wali_id,$tahun_ajaran,$jan,$feb,$mar,$apr,$mei,$jun,$jul,$ags,$sep,$okt,$nov,$des);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/administrasi');
	}else{
		$siswa_id=strip_tags($this->input->post('kode'));
		$wali_id=$this->session->userdata('idadmin');
		$tahun_ajaran=$this->input->post('tahun');
		$jan=strip_tags($this->input->post('jan'));
		$feb=strip_tags($this->input->post('feb'));
		$mar=strip_tags($this->input->post('mar'));
		$apr=strip_tags($this->input->post('apr'));
		$mei=strip_tags($this->input->post('mei'));
		$jun=strip_tags($this->input->post('jun'));
		$jul=strip_tags($this->input->post('jul'));
		$ags=strip_tags($this->input->post('ags'));
		$sep=strip_tags($this->input->post('sep'));
		$okt=strip_tags($this->input->post('okt'));
		$nov=strip_tags($this->input->post('nov'));
		$des=strip_tags($this->input->post('des'));
		$kode=strip_tags($this->input->post('kode2'));
	
		$this->m_administrasi->update_adm($jan,$feb,$mar,$apr,$mei,$jun,$jul,$ags,$sep,$okt,$nov,$des,$kode);
		echo $this->session->set_flashdata('msg', 'success-update');
		redirect('admin/administrasi');
	}
	}

}