<!-- Tahun Ajaran -->
<?php
    $query=$this->db->query("SELECT * FROM tbl_thn_ajaran ORDER BY thn_id limit 1");
    $tahun=$query->row();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ponpes Ash-Sholihah | Download</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php
    $this->load->view('admin/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php 
   $this->load->view('admin/v_sidebar');
   ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php 
      $nama_mapel=$nilai->mapel_nama;
      $mapel_id=$nilai->mapel_id;
       ?>
      <h1>
        Data Nilai <?php echo $nama_mapel; ?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mata Pelajaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">NIS</th>
                    <th rowspan="2">Nama</th>
                    <th rowspan="2">Jenis Kelamin</th>
                    <th rowspan="2">Semester</th>
                    <th colspan="3" style="text-align: center;">NILAI</th>
                    <th rowspan="2" style="text-align: right;">Input</th>
                </tr>
                <tr>
                  <th>UAS</th>
                  <th>UTS</th>
                  <th>Nilai Akhir</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $semester=$tahun->thn_semester;
                    $no=0;
                    foreach ($data->result_array() as $i) :
                       $no++;
                       $id=$i['siswa_id'];
                       $nis=$i['siswa_nis'];
                       $nama=$i['siswa_nama'];
                       $jenkel=$i['siswa_jenkel'];
                       $nilai1=$i['nilai1'];
                       $nilai2=$i['nilai2'];
                       $nilai_akhir=$i['nilai_akhir'];

                    ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $nis ?></td>
                  <td><?php echo $nama ?></td>
                  <td><?php echo $jenkel ?></td>
                  <td><?php if ($semester=='2'):?>
                    Genap
                    <?php else: ?>
                      Ganjil
                    <?php endif; ?>
                  </td>
                  <td><?php echo $nilai1 ?></td>
                  <td><?php echo $nilai2 ?></td>
                  <td><?php echo $nilai_akhir ?></td>
                  <td style="text-align:right;">
                        <a class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>" ><span class="fa fa-pencil"> Input Nilai</span></a>
                       
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
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php 
  $this->load->view('admin/v_footer')
 ?>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


                 <?php
                    foreach ($data->result_array() as $i) :
                       $id=$i['siswa_id'];
                       $nis=$i['siswa_nis'];
                       $nama=$i['siswa_nama'];
                       $jenkel=$i['siswa_jenkel'];
                 ?>
  <!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Input Nilai <?php echo $nama_mapel; ?></h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/siswa/input_nilai'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                       <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                       <input type="hidden" name="mapel_id" value="<?php echo $mapel_id;?>"/>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">NIS</label>
                            <div class="col-sm-7">
                              <input type="text" name="xnis" value="<?php echo $nis;?>" class="form-control" id="inputUserName" placeholder="NIP" readonly>
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                            <div class="col-sm-7">
                              <input type="text" name="xnama" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="NIP" readonly>
                             </div>
                      </div>
                      <hr>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nilai UTS</label>
                            <div class="col-sm-7">
                              <input type="number" max="100" name="xnilai1"  class="form-control" id="inputUserName" placeholder="Nilai 1" required autocomplete="off" >
                             </div>
                      </div>
                      <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nilai UAS</label>
                            <div class="col-sm-7">
                              <input type="number" max="100" name="xnilai2"  class="form-control" id="inputUserName" placeholder="Nilai 2" required autocomplete="off">
                             </div>
                      </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Input</button>
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
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
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

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $(".timepicker").timepicker({
      showInputs: true
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
                    text: "Nilai Berhasil disimpan ke database.",
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
                    text: "File berhasil di update",
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
                    text: "File Berhasil dihapus.",
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
