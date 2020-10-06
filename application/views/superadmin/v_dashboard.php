<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Ponpes Ash-Sholihah | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
  



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
    $this->load->view('superadmin/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php 
   $this->load->view('superadmin/v_sidebar');
   ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col col-md-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <h4>Tahun Ajaran</h4>
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Tahun Ajaran</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
          					<th>No</th>
          					<th>Semeter</th>
                    <th>Tahun Ajaran</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=0;
          				foreach ($tahun->result_array() as $i) :
                       $no++;
                       $id=$i['thn_id'];
                       $semester=$i['thn_semester'];
                       $tahun_awal=$i['thn_awal'];
                       $tahun_akhir=$i['thn_akhir'];
                    ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php if ($semester=='2'):?>
                    Genap
                    <?php else: ?>
                      Ganjil
                    <?php endif; ?>
                  </td>
                  <td><?php echo $tahun_awal. " / ". $tahun_akhir; ?></td>
                  
                  <!-- <td><?php echo $mapel_guru;?></td> -->
                  <td style="text-align:right;">
                        <a class="btn btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"> </span> Hapus</a>
                  </td>
                </tr>
			<?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div>

          <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">

          <div class="info-box">
          <a href="<?php echo base_url().'superadmin/guru'?>">
            <span class="info-box-icon bg-aqua"><i class="fa fa-graduation-cap "></i></span>
              <?php
                  $query=$this->db->query("SELECT * FROM tbl_guru ");
                  $jml=$query->num_rows();
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Guru</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
         </a>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
          <a href="<?php echo base_url().'superadmin/siswa'?>">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
            <?php
                  $query=$this->db->query("SELECT * FROM tbl_siswa");
                  $jml=$query->num_rows();
            ?>
            <div class="info-box-content">
              <span class="info-box-text">Santri</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
           </a>
          </div>
          <!-- /.info-box -->
        </div>
        </div>
        <!-- /.col -->
<div class="row">
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
          <a href="<?php echo base_url().'superadmin/pengguna'?>">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
              <?php
                    $query=$this->db->query("SELECT * FROM tbl_pengguna");
                    $jml=$query->num_rows();
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Pengguna</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
            </a>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
          <a href="<?php echo base_url().'superadmin/matapelajaran'?>">
            <span class="info-box-icon bg-yellow"><i class="fa fa-book"></i></span>
            <?php
                    $query=$this->db->query("SELECT * FROM tbl_mapel");
                    $jml=$query->num_rows();
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Mata Pelajaran</span>
              <span class="info-box-number"><?php echo $jml;?></span>
            </div>
            </a>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
  $this->load->view('superadmin/v_footer')
 ?>


</div>
<!-- ./wrapper -->

    <!--Modal tambah mapel-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Mata Pelajaran</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'superadmin/dashboard/simpan_tahun_ajaran'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Semester</label>
                                        <div class="col-sm-7">
                                            
                                                <select class="form-control" name="semester" id="sel1">
                                                  <option value="1">Ganjil</option>
                                                  <option value="2">Genap</option>
                                                </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tahun Ajaran</label>
                                        <div class="col-sm-3">
                                            <input type="number" max="3000" name="tahun_awal"  class="form-control" id="tahunAkhir" placeholder="2020" required>
                                        </div>
                                        <label for="inputUserName" class="col-sm-1 control-label">/ </label>
                                         <div class="col-sm-3">
                                            <input type="number" max="3000" name="tahun_akhir" class="form-control" id="tahunAkhir" placeholder="2021" required>
                                        </div>
                                    </div>

                                    

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

	<!--Modal Hapus Mapel-->
  <?php    
   foreach ($tahun->result_array() as $i) :
                      
                       $id=$i['thn_id'];
                       $semester=$i['thn_semester'];
                       $tahun_awal=$i['thn_awal'];
                       $tahun_akhir=$i['thn_akhir'];
   ?>
  <!--Modal Hapus kelas-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Tahun Ajaran</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'superadmin/dashboard/hapus_tahun'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                     <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>

	


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>




<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                Swal.fire({
                        icon: 'warning',
                        title: 'Gagal Menmbah Data',
                        text: 'Data Telah Terdata',
                      });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
                  <script type="text/javascript">
                Swal.fire({
                        icon: 'success',
                        title: 'Berhasil Menmbah Data',
                        text: 'Data Ditambah',
                      });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
           <script type="text/javascript">
                Swal.fire({
                        icon: 'success',
                        title: 'Data Terhapus',
                        text: 'Data Telah Terhapus',
                      });
        </script>
  
    <?php else:?>

    <?php endif;?>
</body>
</body>
</html>
