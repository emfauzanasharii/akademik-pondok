<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>

<aside class="main-sidebar">
    <?php
              $id_admin=$this->session->userdata('idadmin');
              $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
              $c=$q->row_array();
          ?>
 

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li  class="sidebar-link">
          <a href="<?php echo base_url().'admin/dashboard'?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
     
        <li class="sidebar-link">
          <a href="<?php echo base_url().'admin/pengguna'?>">
            <i class="fa fa-users"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
         <li class="sidebar-link">
          <a href="<?php echo base_url().'admin/absensi'?>">
            <i class="fa fa-users"></i> <span>Absensi</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

         <li class="sidebar-link">
          <a href="<?php echo base_url().'admin/lihat_absen'?>">
            <i class="fa fa-users"></i> <span>Lihat Absensi</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
       
          <li class="sidebar-link">
          <a href="<?php echo base_url().'admin/files'?>">
            <i class="fa fa-download"></i> <span>File</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
       
         <li class="sidebar-link">
          <a href="<?php echo base_url().'admin/guru'?>">
            <i class="fa fa-graduation-cap"></i> <span>Data Guru</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
         <li class="sidebar-link">
          <a href="<?php echo base_url().'admin/siswa'?>">
            <i class="fa fa-users"></i> <span>Data Santri</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="sidebar-link">
          <a href="<?php echo base_url().'admin/mapel'?>">
            <i class="fa fa-book"></i> <span>Penilaian</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="sidebar-link">
          <a href="<?php echo base_url().'admin/administrasi'?>">
            <i class="fa fa-money" aria-hidden="true"></i> <span>Administrasi</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="sidebar-link">
          <a href="<?php echo base_url().'admin/rapor'?>">
            <i class="fa fa-book" aria-hidden="true"></i> <span>Rapor</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="sidebar-link">
          <a href="<?php echo base_url().'admin/rapor/listRapor'?>">
            <i class="fa fa-print" aria-hidden="true"></i> <span>Cetak Rapor</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
         <li class="sidebar-link">
          <a href="<?php echo base_url().'login/logout'?>">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- <script type="text/javascript">
    
    $('.sidebar-link').on('click', function(){

      $('.sidebar-link').removeClass('active');

    });
  </script> -->