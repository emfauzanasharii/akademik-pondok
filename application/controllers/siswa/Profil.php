<?php
class Profil extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->model('m_kelas');
		$this->load->library('upload');
	}



function profil($id){
		$kode=$this->session->userdata('idsantri');
		$x['user']=$this->m_siswa->get_siswa_login($kode);
		$x['data']=$this->m_siswa->get_all_siswa();
		$x['profile'] = $this->m_siswa->get_profile($id);
		$this->load->view('siswa/v_profil',$x);
	}

function update_siswa(){
				
	            $config['upload_path'] = './assets/images/foto_santri/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
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
							// $kelas=strip_tags($this->input->post('xkelas'));
							$password=$this->input->post('xpassword');
							$konfirm_password=$this->input->post('xpassword2');
                            $lihat_password=$password;

								if ($password <> $konfirm_password) {
     							echo $this->session->set_flashdata('msg','error');
	               				redirect('siswa/profil');
     						}else{
	               				$this->m_siswa->update_siswa($kode,$nis,$nama,$jenkel,$password,$lihat_password,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('siswa/home');

							
	                    
	               			 }

	           		}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('siswa/home');
	               		 }
	                
	            }else{
							$kode=$this->input->post('kode');
							$nis=strip_tags($this->input->post('xnis'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$password=$this->input->post('xpassword');
                            $konfirm_password=$this->input->post('xpassword2');
                            $lihat_password=$password;

								if ($password <> $konfirm_password) {
     							echo $this->session->set_flashdata('msg','error');
	               				redirect('siswa/profil');
     						}else{
	               				$this->m_siswa->update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$password,$lihat_password);
							echo $this->session->set_flashdata('msg','info');
							redirect('siswa/home');

	            } 

	}
}
}
