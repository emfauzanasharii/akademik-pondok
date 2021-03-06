<?php
class Files extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('login');
            redirect($url);
        };
		$this->load->model('m_files');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
		$this->load->helper('download');
	}


	function index(){
		$idadmin = $this->session->userdata('idadmin');
		$x['data']=$this->m_files->get_files_byAutor($idadmin);
		$this->load->view('admin/v_files',$x);
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
		redirect('admin/files');
	}
	
	function simpan_file(){
				$config['upload_path'] = './assets/files/'; //path folder
	            $config['allowed_types'] = 'rtf|pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	            $config['max_size']  = '2048';

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        $file=$gbr['file_name'];
							$judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');
							$idadmin = $this->session->userdata('idadmin');
							$status= $this->input->post('bagikan');
							// print_r($status);
							// die();
							// $oleh=strip_tags($this->input->post('xoleh'));
	
							$this->m_files->simpan_file($judul,$deskripsi,$idadmin,$status,$file);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/files');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/files');
	                }
	            }else{
					redirect('admin/files');
				}
				
	}
	
	function update_file(){
				
	            $config['upload_path'] = './assets/files/'; //path folder
	            $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        $file=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');
							$oleh=strip_tags($this->input->post('xoleh'));
							$status= $this->input->post('bagikan');
							$data=$this->input->post('file');
							$path='./assets/files/'.$data;
							unlink($path);
							$this->m_files->update_file($kode,$judul,$deskripsi,$oleh,$status,$file);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/files');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/files');
	                }
	                
	            }else{
						$kode=$this->input->post('kode');
	                    $judul=strip_tags($this->input->post('xjudul'));
						$deskripsi=$this->input->post('xdeskripsi');
						$oleh=strip_tags($this->input->post('xoleh'));
						$this->m_files->update_file_tanpa_file($kode,$judul,$deskripsi,$oleh);
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/files');
	            } 

	}

	function hapus_file(){
		$kode=$this->input->post('kode');
		$data=$this->input->post('file');
		$path='./assets/files/'.$data;
		unlink($path);
		$this->m_files->hapus_file($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/files');
	}

}