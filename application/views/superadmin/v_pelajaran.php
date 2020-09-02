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
  <title>Ponpes Ash-Sholohah | Data Peljaran</title>
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
        Data Mata Pelajaran
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pelajaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Pelajaran</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
          					<th>Kode Mapel</th>
          					<th>Nama Mapel</th>
          					<th>Kelas</th>
                    <th>Kategori Kelas</th>
          					<!-- <th>Guru Pengampu</th> -->
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;
          					   $id=$i['mapel_id'];
          					   $mapel_kode=$i['mapel_kode'];
          					   $mapel_nama=$i['mapel_nama'];
                       $mapel_kategori=$i['kategori_kelas'];
          					   $mapel_kelas=$i['kelas_nama'];
                       // $mapel_guru=$i['guru_nama'];
                    ?>
                <tr>
                  <td><?php echo $mapel_kode;?></td>
        				  <td><?php echo $mapel_nama;?></td>
                  <td><?php echo $mapel_kelas;?></td>
                  <td><?php echo $mapel_kategori;?></td>
                  <!-- <td><?php echo $mapel_guru;?></td> -->
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
  $this->load->view('superadmin/v_footer')
 ?>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
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
                    <form class="form-horizontal" action="<?php echo base_url().'superadmin/matapelajaran/simpan_pelajaran'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kode Mapel</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkodemapel" class="form-control" id="inputUserName" placeholder="Contoh: K240q" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Mapel</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnamamapel" class="form-control" id="inputUserName" placeholder="Contoh: PPKN, Matematika" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kelas</label>
                                        <div class="col-sm-7">

                                          <select class="form-control" name="xkelasmapel" style="width: 100%;" required>
                                                    <option value="">-Pilih-</option>
                                              <?php
                                             
                                              foreach ($kelas->result_array() as $a) :
                                                
                                                           $kelas_id=$a['kelas_id'];
                                                           $kelas_nama=$a['kelas_nama'];

                                                        ?>
                                                    <option value="<?php echo $kelas_id;?>"><?php echo $kelas_nama;?></option>
                                              <?php endforeach;?>
                                          </select>
                                        </div>
                                    </div>

                                   

                                    <!-- <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Guru Penggampu</label>
                                        <div class="col-sm-7">

                                          <select class="form-control" name="xidgurumapel" style="width: 100%;" required>
                                                    <option value="">-Pilih-</option>
                                              <?php
                                              $no=0;
                                              foreach ($gru->result_array() as $a) :
                                                 $no++;
                                                           $gru_id=$a['guru_id'];
                                                           $gru_nama=$a['guru_nama'];

                                                        ?>
                                                    <option value="<?php echo $gru_id;?>"><?php echo $gru_nama;?></option>
                                              <?php endforeach;?>
                                          </select>
                                        </div>
                                    </div> -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

  <!--Modal Edit mapel-->
  <?php foreach ($data->result_array() as $i) :
                  $id=$i['mapel_id'];
                  $mapel_kode=$i['mapel_kode'];
                  $mapel_nama=$i['mapel_nama'];
                  $mapel_kelas=$i['kelas_nama'];
                  // $guru_mapel_id=$i['mapel_guru_id'];
                  // $mapel_guru=$i['guru_nama'];
                  ?>

        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Mata Pelajaran</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'superadmin/matapelajaran/update_pelajaran'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kode Mapel</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkodemapel" value="<?php echo $mapel_kode;?>" class="form-control" id="inputUserName"  required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Mapel</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnamamapel" value="<?php echo $mapel_nama;?>" class="form-control" id="inputUserName"  required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kelas</label>
                                        <div class="col-sm-7">

                                          <select class="form-control" name="xkelasmapel" style="width: 100%;" required>
                                                   
                                              <?php
                                             
                                              foreach ($kelas->result_array() as $a) :
                                                
                                                           $kelas_id=$a['kelas_id'];
                                                           $kelas_nama=$a['kelas_nama'];

                                                        ?>
                                                    <option value="<?php echo $kelas_id;?>"><?php echo $kelas_nama;?></option>
                                              <?php endforeach;?>
                                          </select>
                                        </div>
                                    </div>  

                                    <!-- <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kelas</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkelasmapel" value="<?php echo $mapel_kelas;?>" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div> -->

                                  <!--    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Guru Penggampu</label>
                                        <div class="col-sm-7">

                                          <select class="form-control" name="xidgurumapel" style="width: 100%;" required>
                                                    <option value=""><?php echo $mapel_guru; ?></option>
                                                    <option value="">-Pilih-</option>
                                              <?php
                                              $no=0;
                                              foreach ($gru->result_array() as $a) :
                                                 $no++;
                                                           $gru_id=$a['guru_id'];
                                                           $gru_nama=$a['guru_nama'];

                                                        ?>
                                                    <option value="<?php echo $gru_id;?>"><?php echo $gru_nama;?></option>
                                              <?php endforeach;?>
                                          </select>
                                        </div>
                                    </div> -->


                                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>
	<!--Modal Hapus Mapel-->

	<?php foreach ($data->result_array() as $i) :
              $id=$i['mapel_id'];
                  $mapel_kode=$i['mapel_kode'];
                  $mapel_nama=$i['mapel_nama'];
                  $mapel_kelas=$i['mapel_kelas'];
                  //  $mapel_guru=$i['guru_nama'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Mata Pelajaran<h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'superadmin/matapelajaran/hapus_pelajaran'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus Mata Pelajaran <b><?php echo $mapel_nama;?></b> ?</p>

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
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Mata Pelajaran Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Mata Pelajaran berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Mata Pelajaran Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>
</body>
</html>
