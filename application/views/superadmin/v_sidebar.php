<?php
$query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment=$query2->num_rows();
$jum_pesan=$query->num_rows();
?>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Utama</li>
      <li>
        <a href="<?php echo base_url().'superadmin/dashboard'?>">
          <i class="fa fa-home"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <small class="label pull-right"></small>
          </span>
        </a>
      </li>

      <li>
        <a href="<?php echo base_url().'superadmin/pengguna'?>">
          <i class="fa fa-users"></i> <span>Pengguna</span>
          <span class="pull-right-container">
            <small class="label pull-right"></small>
          </span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Data Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url().'superadmin/guru'?>"><i class="fa fa-graduation-cap"></i>Data Guru</a></li>
          <li><a href="<?php echo base_url().'superadmin/siswa'?>"><i class="fa fa-users"></i> Data Siswa</a></li>
           <li><a href="<?php echo base_url().'superadmin/kelas'?>"><i class="  fa fa-institution"></i> Data Kelas</a></li>
          <li><a href="<?php echo base_url().'superadmin/matapelajaran'?>"><i class="fa fa-book"></i> Mata Pelajaran</a></li>

        </ul>
      </li>

      <li>
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