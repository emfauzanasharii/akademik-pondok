
<?php
class Login extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }
    function index(){
        $this->load->view('v_login');
    }
    function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('username')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));
        $u=$username;
        $p=$password;
        $cadmin=$this->m_login->cekadmin($u,$p);
        $ceksantri=$this->m_login->ceksantri($u,$p);
        echo json_encode($cadmin);
        if($cadmin->num_rows() > 0){
         $this->session->set_userdata('masuk',true);
         $this->session->set_userdata('user',$u);
         $xcadmin=$cadmin->row_array();
         if($xcadmin['pengguna_level']=='1'){
            $this->session->set_userdata('akses','1');
            $idadmin=$xcadmin['pengguna_id'];
            $user_nama=$xcadmin['pengguna_nama'];
            $this->session->set_userdata('idadmin',$idadmin);
            $this->session->set_userdata('nama',$user_nama);
            redirect('superadmin/dashboard');
         }
         elseif ($xcadmin['pengguna_level']=='2') {
             $this->session->set_userdata('akses','2');
            $idadmin=$xcadmin['pengguna_id'];
            $user_nama=$xcadmin['pengguna_nama'];
            $this->session->set_userdata('idadmin',$idadmin);
            $this->session->set_userdata('nama',$user_nama);
            redirect('admin/dashboard');
         }

       }
       elseif ($ceksantri->num_rows() > 0) {
        $this->session->set_userdata('masuk',true);
         $this->session->set_userdata('user',$u);
             $xsantri=$ceksantri->row_array();  
             $this->session->set_userdata('akses','4');
             $idsantri=$xsantri['siswa_id'];
             $siswa_nama=$xsantri['siswa_nama'];
             $this->session->set_userdata('idsantri',$idsantri);
             $this->session->set_userdata('nama',$siswa_nama);
             redirect('siswa/home');

       }


       else{
         echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
         redirect('login');
       }

    }

    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
