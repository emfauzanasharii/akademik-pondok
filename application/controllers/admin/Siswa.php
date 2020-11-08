<?php
class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->model('m_kelas');
		$this->load->model('m_pelajaran');
		$this->load->model('m_nilai');
		$this->load->library('upload');
	}


	function index(){
		$x['kelas']=$this->m_kelas->get_all_kelas();
		$x['data']=$this->m_siswa->get_siswa_by_id($_SESSION['idadmin']);
		$this->load->view('admin/v_siswa',$x);
	}

	function nilai_siswa($mapel_id){
			$x['data']=$this->m_siswa->get_siswa_by_nilai($_SESSION['idadmin'],$mapel_id);
			$x['nilai']=$this->m_pelajaran->get_nama_mapel($mapel_id)->row();
			$x['editnilai']=$this->m_siswa->edit_siswa_by_nilai($_SESSION['idadmin'],$mapel_id);
			$this->load->view('admin/v_nilai_siswa',$x);
		
	}

	function input_nilai($mapel_id){
		$kode=$this->input->post('kode');
		$nilai_waliId=$this->session->userdata('idadmin');
		$mapel_id=$this->input->post('mapel_id');
		$nilai1=strip_tags($this->input->post('xnilai1'));
		$nilai2=strip_tags($this->input->post('xnilai2'));
		$nilaiakhir=($nilai1+$nilai2)/2;
		
		$this->m_nilai->input_nilai($kode,$nilai_waliId,$mapel_id,$nilai1,$nilai2,$nilaiakhir);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/siswa/nilai_siswa/'.$mapel_id);
		
	}

	function edit_nilai(){
		$kode=$this->input->post('kode');
		$mapel_id=$this->input->post('mapel_id');
		$nilai1=strip_tags($this->input->post('xnilai1'));
		$nilai2=strip_tags($this->input->post('xnilai2'));
		$nilaiakhir=($nilai1+$nilai2)/2;
		// print_r($mapel_id);
		// die();
		$this->m_nilai->edit_nilai($kode,$nilai1,$nilai2,$nilaiakhir);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/siswa/nilai_siswa/'.$mapel_id);
		
	}
	
	function simpan_siswa(){
				$config['upload_path'] = './assets/images/foto_santri'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	            $config['max_size']     = 3024; // 3MB
	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/foto_santri/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/foto_santri/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$nis=strip_tags($this->input->post('xnis'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$siswa_guru_id=$this->session->userdata('idadmin');
							$idkelas=$this->m_kelas->get_id_kelas($siswa_guru_id);
							$kelas=$idkelas->kelas_id;
							$random=rand();
							$siswa_password=$random;
							
							$this->m_siswa->simpan_siswa($siswa_guru_id,$nis,$nama,$jenkel,$kelas,$photo,$siswa_password,$random);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/siswa');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/siswa');
	                }
	                 
	            }else{
	            	$nis=strip_tags($this->input->post('xnis'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$kelas=strip_tags($this->input->post('xkelas'));
					$random=rand();
					$siswa_password=$random;
					$this->m_siswa->simpan_siswa_tanpa_img($nis,$nama,$jenkel,$kelas,$siswa_password,$random);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/siswa');
				}
				
	}
	
	function update_siswa(){
				
	            $config['upload_path'] = './assets/images/foto_santri/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	            $config['max_size']     = 3024; // 3MB
	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/foto_santri/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/foto_santri/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/foto_santri/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$nis=strip_tags($this->input->post('xnis'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$kelas=strip_tags($this->input->post('xkelas'));

							$this->m_siswa->update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/siswa');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/siswa');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$nis=strip_tags($this->input->post('xnis'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$kelas=strip_tags($this->input->post('xkelas'));

							$this->m_siswa->update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$kelas);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/siswa');
	            } 

	}

	function hapus_siswa(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/foto_santri/'.$gambar;
		unlink($path);
		$this->m_siswa->hapus_siswa($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/siswa');
	}

}