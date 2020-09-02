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
    $this->load->view('siswa/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php 
   $this->load->view('siswa/v_sidebar');
   ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <h1>
        Data Administrasi
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Administrasi</li>
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
              <table id="example1" class="table table-striped" style="font-size:10px;">
                <thead>
                <tr>
                    <th rowspan="2" style="text-align: center;">Semester</th>
                    <th rowspan="2" style="text-align: center;">Tahun Ajaran</th>
                    <th colspan="12" style="text-align: center;">Administrasi Bulanan</th>
                    
                </tr>
                <tr>
                  <th>Jan</th>
                  <th>Feb</th>
                  <th>Mar</th>
                  <th>Apr</th>
                  <th>Mei</th>
                  <th>Jun</th>
                  <th>Jul</th>
                  <th>Agu</th>
                  <th>Sep</th>
                  <th>Okt</th>
                  <th>Nov</th>
                  <th>Des</th>
                </tr>
                </thead>
                <tbody style="text-align: center;">
                  <?php
                  $semester=$tahun->thn_semester;
                  $tahun_awal=$tahun->thn_awal;
                  $tahun_akhir=$tahun->thn_akhir;
                   
                  
                       
                       $jan=$data->januari;
                       $feb=$data->februari;
                       $mar=$data->maret;
                       $apr=$data->april;
                       $mei=$data->mei;
                       $jun=$data->juni;
                       $jul=$data->juli;
                       $ags=$data->agustus;
                       $sep=$data->september;
                       $okt=$data->oktober;
                       $nov=$data->november;
                       $des=$data->desember;

                    ?>
                <tr>
                  
                  <td><?php echo $semester; ?></td>
                  <td><?php echo $tahun_awal." / ".$tahun_akhir; ?></td>
                  <td><?php if ($jan==NULL):?>
                    
                    <?php elseif ($jan=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($feb==NULL):?>
                    
                    <?php elseif ($feb=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($mar==NULL):?>
                    
                    <?php elseif ($mar=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($apr==NULL):?>
                    
                    <?php elseif ($apr=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($mei==NULL):?>
                    
                    <?php elseif ($mei=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  
                  <td><?php if ($jun==NULL):?>
                    
                    <?php elseif ($jun=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($jul==NULL):?>
                    
                    <?php elseif ($jul=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($ags==NULL):?>
                    
                    <?php elseif ($ags=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($sep==NULL):?>
                    
                    <?php elseif ($sep=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($okt==NULL):?>
                    
                    <?php elseif ($okt=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($nov==NULL):?>
                    
                    <?php elseif ($nov=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  <td><?php if ($des==NULL):?>
                    
                    <?php elseif ($des=='0'): ?>
                      Belum Lunas
                      <?php else: ?>
                        Lunas
                    <?php endif; ?>
                  </td>
                  
                  
                </tr>
        
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
  $this->load->view('siswa/v_footer')
 ?>

  
 



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
      "responsive": true,
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

</body>
</html>
