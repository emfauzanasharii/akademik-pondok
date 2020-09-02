
<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Ash-Sholihah</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Halaman Santri</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          

          <?php
              $id_santri=$this->session->userdata('idsantri');
              $q=$this->db->query("SELECT * FROM tbl_siswa WHERE siswa_id='$id_santri'");
              $c=$q->row_array();
          ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'assets/images/foto_santri/'.$c['siswa_photo'];?>" class="user-image" alt="">
              <span class="hidden-xs"><?php echo $c['siswa_nama'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/images/foto_santri/'.$c['siswa_photo'];?>" class="img-circle" alt="">

                <p>
                  <?php echo $c['siswa_nama'];?>
                  
                    <small><?php echo $c['siswa_nis'];?></small>
                 
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->

              <li class="user-footer">
              
                <div class="pull-right">
                  <a href="<?php echo base_url().'login/logout'?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              <div class="pull-left">
                  <a href="<?php echo base_url().'siswa/profil/profil/'.$id_santri?>" class="btn btn-default btn-flat">Profil</a>
                </div> 
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>

    </nav>
  </header>
