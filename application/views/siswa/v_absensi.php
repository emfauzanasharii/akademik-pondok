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
  <title>Ponpes Ash-Sholihah | Data Absensi SAntri</title>
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

<style type="text/css">
  #kehadiran{
    padding: 5px;
  }
</style>

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
        Data Absensi Santri
        <small></small>
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-4">
          <div class="box" id="kehadiran">
            
            <h4>Kehadiran</h4>
         <table id="kehadiran1" class="table table-striped" style="font-size:20px;">
                <thead>
                <tr>
                    <th rowspan="2">Alpha</th>
                    <th rowspan="2">Izin</th>
                </tr>
                </thead>
                <tbody>
                  
                <tr>
                  <td><?php echo $alpha ?></td>
                  <td><?php echo $izin ?></td>
                </tr>
       
                </tbody>
              </table>  
             
            </div> 
          </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <h4>Kehadiran</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <table id="example1" class="table table-striped" style="font-size:13px;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Absen</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                   <?php 
                    $no=0;
                    foreach ($absen->result_array() as $i) :
                     $no++;
                   $nis=$i['siswa_nis'];
                   $nama=$i['siswa_nama'];
                   $absen=$i['absen_status'];
                   $tanggal=$i['absen_tanggal']
                   ?> 
                   <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $nis;?></td>
                    <td><?php echo $nama;?></td>
                    <td><?php echo date("d-m-Y",strtotime($tanggal));?></td>
                    <?php if($absen=='0'):?>
                      <td>masuk</td>
                    <?php elseif ($absen=='1'):?>
                      <td>Alpha</td>
                    <?php else:?>
                      <td>Ijin</td>
                    <?php endif;?>
                    
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
    </div>
      <!-- /.row -->
    </section>
</div>
</div>


  

<?php 
$this->load->view('siswa/v_footer');
 ?>

<!-- Control Sidebar -->

<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->

<!-- ./wrapper -->





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
      text: "Gagal Input Absensi.",
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
      text: "Absensi Berhasil disimpan ke database.",
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
