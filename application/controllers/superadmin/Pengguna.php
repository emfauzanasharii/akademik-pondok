<?php
class Pengguna extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('default_controller');
            redirect($url);
        };
		$this->load->model('m_pengguna');
		$this->load->model('m_guru');
		$this->load->library('upload');
		$this->load->library('email');
	}


	function index(){
		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->m_pengguna->get_pengguna_login($kode);
		$x['data']=$this->m_pengguna->get_all_pengguna($_SESSION['idadmin']);
		$this->load->view('superadmin/v_pengguna',$x);
	}


	function profil($id){
		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->m_pengguna->get_pengguna_login($kode);
		$x['profile'] = $this->m_pengguna->get_profile($id);
		$this->load->view('superadmin/v_profil',$x);
	}

	function simpan_pengguna(){
	            $config['upload_path'] = './assets/images/foto_pengguna/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
	            $config['max_size']     = 3024; // 3MB
	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name'])) //1
	            {
	                if ($this->upload->do_upload('filefoto')) //2
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/foto_pengguna/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '50%';
	                        $config['new_image']= './assets/images/foto_pengguna/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $nama=$this->input->post('xnama');
	                        $jenkel=$this->input->post('xjenkel');
	                        $username=$this->input->post('xusername');
	                        $pass_lihat=rand();
	                        // $password=$this->input->post('xpassword');
                         //    $konfirm_password=$this->input->post('xpassword2');
	                        $password=$pass_lihat;

                            $email=$this->input->post('xemail');
                            $nohp=$this->input->post('xkontak');
							$level=$this->input->post('xlevel');
							 $pesan =[$pass_lihat,$username]; 

     						// if ($password <> $konfirm_password) { //3
     						// 	echo $this->session->set_flashdata('msg','error');
	          //      				redirect('superadmin/pengguna');
     						// }else{  //3
     							// print_r($pesan[0]);
     							// die();
	               				$this->m_pengguna->simpan_pengguna($nama,$jenkel,$username,$pass_lihat,$password,$email,$nohp,$level,$gambar);

									$this->load->library('mailer');
								    $email_penerima =  $email;
								    $subjek = "Pondok AshSholihah";
								   $pesan =[$pass_lihat,$username]; 
								    $content = $this->load->view('content', array('pesan'=>$pesan), true); // Ambil isi file content.php dan masukan ke variabel $content
								    $sendmail = array(
								      'email_penerima'=>$email_penerima,
								      'subjek'=>$subjek,
								      'content'=>$content 
								    );
								    
								      $send = $this->mailer->send($sendmail);
	                    		echo $this->session->set_flashdata('msg','success');
	                    			redirect('superadmin/pengguna');
	                    
	                


	                }else{  //2
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('superadmin/pengguna');
	                }
	                 
	            }else{ //1
	            	$nama=$this->input->post('xnama');
	                $jenkel=$this->input->post('xjenkel');
	                $username=$this->input->post('xusername');
	                $password=$this->input->post('xpassword');
                    $konfirm_password=$this->input->post('xpassword2');
                    $email=$this->input->post('xemail');
                    $nohp=$this->input->post('xkontak');
					$level=$this->input->post('xlevel');
	        //     	if ($password <> $konfirm_password) { //6
     				// 	echo $this->session->set_flashdata('msg','error');
	        //        		redirect('superadmin/pengguna');
     				// }else{ //6

	               		$this->m_pengguna->simpan_pengguna_tanpa_gambar($nama,$jenkel,$username,$password,$email,$nohp,$level);
	                    echo $this->session->set_flashdata('msg','success');
	               		redirect('superadmin/pengguna');
	               	
	            } 

	}


	function update_pengguna(){
				
	            $config['upload_path'] = './assets/images/foto_pengguna/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = FALSE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/foto_pengguna/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '50%';
	                        // $config['width']= 300;
	                        // $config['height']= 300;
	                        $config['new_image']= './assets/images/foto_pengguna/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
	                        $nama=$this->input->post('xnama');
	                		$jenkel=$this->input->post('xjenkel');
	                		$username=$this->input->post('xusername');
	                		$password=$this->input->post('xpassword');
                    		$konfirm_password=$this->input->post('xpassword2');
                    		$email=$this->input->post('xemail');
                    		$nohp=$this->input->post('xkontak');
							$level=$this->input->post('xlevel');
                            if (empty($password) && empty($konfirm_password)) {
                            	$this->m_pengguna->update_pengguna_tanpa_pass($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
	                    		echo $this->session->set_flashdata('msg','info');
	               				redirect('superadmin/pengguna');
     						}elseif ($password <> $konfirm_password) {
     							echo $this->session->set_flashdata('msg','error');
	               				redirect('superadmin/pengguna');
     						}else{
	               				$this->m_pengguna->update_pengguna($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
	                    		echo $this->session->set_flashdata('msg','info');
	               				redirect('superadmin/pengguna');
	               			}
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('superadmin/pengguna');
	                }
	                
	            }else{
	            	$kode=$this->input->post('kode');
	            	$nama=$this->input->post('xnama');
	                $jenkel=$this->input->post('xjenkel');
	                $username=$this->input->post('xusername');
	                $password=$this->input->post('xpassword');
                    $konfirm_password=$this->input->post('xpassword2');
                    $email=$this->input->post('xemail');
                    $nohp=$this->input->post('xkontak');
					$level=$this->input->post('xlevel');
	            	if (empty($password) && empty($konfirm_password)) {
                       	$this->m_pengguna->update_pengguna_tanpa_pass_dan_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level);
	                    echo $this->session->set_flashdata('msg','info');
	               		redirect('superadmin/pengguna');
     				}elseif ($password <> $konfirm_password) {
     					echo $this->session->set_flashdata('msg','error');
	               		redirect('superadmin/pengguna');
     				}else{
	               		$this->m_pengguna->update_pengguna_tanpa_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level);
	                    echo $this->session->set_flashdata('msg','warning');
	               		redirect('superadmin/pengguna');
	               	}
	            } 

	}

	function hapus_pengguna(){
		$kode=$this->input->post('kode');
		$data=$this->m_pengguna->get_pengguna_login($kode);
		$q=$data->row_array();
		$p=$q['pengguna_photo'];
		$path=base_url().'assets/images/foto_pengguna/'.$p;
		delete_files($path);
		$this->m_pengguna->hapus_pengguna($kode);
	    echo $this->session->set_flashdata('msg','success-hapus');
	    redirect('superadmin/pengguna');
	}

	function reset_password(){
   
        $id=$this->uri->segment(4);
        $get=$this->m_pengguna->getusername($id);
        if($get->num_rows()>0){
            $a=$get->row_array();
            $b=$a['pengguna_username'];
        }
        $pass=rand(123456,999999);
        $this->m_pengguna->resetpass($id,$pass);
        echo $this->session->set_flashdata('msg','show-modal');
        echo $this->session->set_flashdata('uname',$b);
        echo $this->session->set_flashdata('upass',$pass);
	    redirect('superadmin/pengguna');
   
    }


}